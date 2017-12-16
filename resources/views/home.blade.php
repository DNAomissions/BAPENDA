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

        // Untuk Table Admin
            $("#tableUser").DataTable();
            $("#tableBPP").DataTable();
            $("#tableKegiatan").DataTable();
            
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
                                        <li role="presentation" class="active"><a href="#bpp" aria-controls="bpp" role="tab" data-toggle="tab">BPP</a></li>
                                        <li role="presentation"><a href="#user" aria-controls="user" role="tab" data-toggle="tab">USER</a></li>
                                        <li role="presentation"><a href="#kegiatan" aria-controls="kegiatan" role="tab" data-toggle="tab">KEGIATAN</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="panel-body tabs-body-custom">
                                <div class="tab-content">
                                    
                                    <!--Dalam BPP-->
                                    <div role="tabpanel" class="tab-pane active" id="bpp">
                                        <!--Tab BPP-->
                                        <div class="panel">
                                            <div class="panel-heading">
                                            <!-- Tabs and Pills Content -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#tabelbpp" aria-controls="tabelbpp" role="tab" data-toggle="tab">Tabel BPP</a></li>
                                                    <li role="presentation"><a href="#tambahbpp" aria-controls="tambahbpp" role="tab" data-toggle="tab">Tambah BPP</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                            <div class="panel-body tabs-body-custom">
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="tabelbpp">
                                                    @include('resource.admin.table-bpp')
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tambahbpp">
                                                    @include('resource.tambah.tambah-bpp')
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <!--Dalam User-->
                                    <div role="tabpanel" class="tab-pane" id="user">
                                        <!--Tab User-->
                                        <div class="panel">
                                            <div class="panel-heading">
                                            <!-- Tabs and Pills Content -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#tabeluser" aria-controls="tabeluser" role="tab" data-toggle="tab">Tabel User</a></li>
                                                    <li role="presentation"><a href="#tambahuser" aria-controls="tambahuser" role="tab" data-toggle="tab">Tambah User</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body tabs-body-custom">
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="tabeluser">
                                                    @include('resource.admin.table-user')
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tambahuser">
                                                    @include('resource.tambah.tambah-user')
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <!--Dalam Kegiatan-->
                                    <div role="tabpanel" class="tab-pane" id="kegiatan">
                                        <!--Tab Kegiatan-->
                                        <div class="panel">
                                            <div class="panel-heading">
                                            <!-- Tabs and Pills Content -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#tabelkegiatan" aria-controls="tabelkegiatan" role="tab" data-toggle="tab">Tabel Kegiatan</a></li>
                                                    <li role="presentation"><a href="#tambahkegiatan" aria-controls="tambahkegiatan" role="tab" data-toggle="tab">Tambah Kegiatan</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="panel-body tabs-body-custom">
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="tabelkegiatan">
                                                    @include('resource.admin.table-kegiatan')
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="tambahkegiatan">
                                                    @include('resource.tambah.tambah-kegiatan')
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
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
