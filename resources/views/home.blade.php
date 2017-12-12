@extends('layouts.app')

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
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Detail</th>
                                </tr>
                                @if(count($users))
                                <?php $no = 1; ?>
                                    @foreach($users as $item)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->username}}</td>
                                            <td>{{$item->email}}</td>
                                            <td><a href="#" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i></a></td>
                                        </tr>
                                    <?php $no++; ?>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Nothing Found</td>
                                    </tr>
                                @endif
                            </table> 
                            {{$users->render()}}
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
                                        Ini DashBoard Buat BPP :
                                        <br>
                                        <ol>
                                            <li>Table Pengajuan yang dia sendiri</li>
                                            <li>Table hasil Revisi</li>
                                        </ol>
                                        <br><br>
                                        <i>Kekurangan :</i>
                                        <br>
                                        <ol>
                                            <li>Buat User belum ada fitur edit akun sendiri</li>
                                            <li>Fitur Registernya masih ada di home<br>*Tapi langsung terdaftar sebagai BPP</li>
                                        </ol>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="gu">
                                        Ini Ganti Uang BPP :
                                        <br>
                                        <ol>
                                            <li>Disini Ada Table GU punya si user BPP itu sendiri</li>
                                            <li>Ada fitur tambah GU juga.. Nanti ngelink ke formnya</li>
                                        </ol>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="ls">
                                        Ini Langsung BPP :
                                        <br>
                                        <ol>
                                            <li>Disini Ada Table LS punya si user BPP itu sendiri</li>
                                            <li>Ada fitur tambah LS juga.. Nanti ngelink ke formnya</li>
                                        </ol>
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
