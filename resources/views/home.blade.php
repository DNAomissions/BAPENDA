@extends('layouts.app')

@section('js')
    <script>
        $(document).ready(function(){
            $("#tableDashboard").DataTable();
            $("#tableGu").DataTable();
            $("#tableLs").DataTable();
        });

        // Untuk Table Verifikator
            $("#tableRevisi-v").DataTable();
            $("#tableGu-v").DataTable();
            $("#tableLs-v").DataTable();
            $("#tablePengajuan-v").DataTable();
    </script>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="card">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(Auth::user()->level->level == 'admin') 
                            <div class="panel">
                                <div class="panel-heading">
                                    <!-- Tabs and Pills Content -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"></li>
                                    </ul>
                                </div>
                            </div>
                        @endif 
                        @if(Auth::user()->level->level == 'verifikator') 
                            <div class="panel-heading">
                                <!-- Tabs and Pills Menu -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#dashboard-v" aria-controls="dashboard-v" role="tab" data-toggle="tab">Dashboard</a></li>
                                    <li role="presentation"><a href="#gu-v" aria-controls="gu-v" role="tab" data-toggle="tab">Ganti Uang (GU)</a></li>
                                    <li role="presentation"><a href="#ls-v" aria-controls="ls-v" role="tab" data-toggle="tab">Langsung (LS)</a></li>
                                </ul> 
                            </div>

                            <div class="panel-body tabs-body-custom">
                                <!-- Tabs and Pills Content -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="dashboard-v">
                                        @include('resource.verifikator.table-pengajuan')
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="gu-v">
                                        @include('resource.verifikator.table-gu')
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ls-v">
                                        @include('resource.verifikator.table-ls')
                                    </div>
                                </div>
                            </div>  
                        @endif 
                        @if(Auth::user()->level->level == 'bpp')
                            <div class="panel-heading">
                                <!-- Tabs and Pills Menu -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#dashboard" aria-controls="dashboard" role="tab" data-toggle="tab">Dashboard</a></li>
                                    <li role="presentation"><a href="#gu" aria-controls="gu" role="tab" data-toggle="tab">Ganti Uang (GU)</a></li>
                                    <li role="presentation"><a href="#ls" aria-controls="ls" role="tab" data-toggle="tab">Langsung (LS)</a></li>
                                </ul> 
                            </div>

                            <div class="panel-body tabs-body-custom">
                                <!-- Tabs and Pills Content -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="dashboard">
                                        @include('resource.bpp.table-dashboard')
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="gu">
                                        @include('resource.bpp.table-gu')
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ls">
                                        @include('resource.bpp.table-ls')
                                    </div>
                                </div>
                            </div>  
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
