@extends('layouts.app')

@section('js')
    <script>
        $(document).ready(function(){
            $("#tableDashboard").DataTable();
            $("#tableGu").DataTable();
            $("#tableLs").DataTable();
        });
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

                        @if(Auth::user()->level == 1) 
                            <div class="panel">
                                <div class="panel-heading">
                                    <!-- Tabs and Pills Content -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"></li>
                                    </ul>
                                </div>
                            </div>
                        @endif 
                        @if(Auth::user()->level == 2) 
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
                                        Ini DashBoard buat Verifikator :
                                        <br>
                                        <ol>
                                            <li>Table Pengajuan GU & LS <br>*Tapi nanti ini mah di detailkan di tab GU & LS (Kayak ada Read More gitu)</li>
                                            <li>Table Perevisian <br>*Sama kyk table pengajuan.. Tapi bisa langsung di revisi disini</li>
                                        </ol>
                                        <br><br>
                                        <i>Keterangan :</i>
                                        <br>
                                        <ul>
                                            <li>
                                                Notifikasi buat Verifikator ada 2 jenis :
                                                <ol>
                                                    <li>Pengajuan (Pake font-awesome inbox => fa fa-fw fa-inbox)</li>
                                                    <li>Perevisian (Pake font-awesome edit => fa fa-fw fa-edit)</li>
                                                </ol>
                                            </li>
                                            <li>Notifikasi sama dashboard isinya mirip.. Cuman yang notifikasi mah Penjelas buat yang baru2 aja</li>
                                        </ul>
                                        <br><br>
                                        <i>Kekurangan :</i>
                                        <br>
                                        <ol>
                                            <li>Buat User belum ada fitur edit akun sendiri</li>
                                            <li>Fitur Registernya masih ada di home<br>*Tapi langsung terdaftar sebagai BPP</li>
                                        </ol>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="gu">
                                        Ini Ganti Uang buat Verifikator :
                                        <br>
                                        Belum Tau
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ls">
                                        Ini Langsung buat Verifikator :
                                        <br>
                                        Belum Tau juga
                                    </div>
                                </div>
                            </div> 
                        @endif 
                        @if(Auth::user()->level == 3)
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
