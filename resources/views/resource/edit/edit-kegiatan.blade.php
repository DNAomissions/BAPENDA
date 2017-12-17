@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="card">
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
                            <div role="tabpanel" class="tab-pane active" id="kegiatan">
                                <!--Tab BPP-->
                                <div class="panel">
                                    <div class="panel-heading">
                                    <!-- Tabs and Pills Content -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation"><a href="{{url('/home')}}">Tabel Kegiatan</a></li>
                                            <li role="presentation"><a href="{{url('/home')}}">Tambah Kegiatan</a></li>
                                            <!--<li role="presentation" class="active"><a href="#editbpp" aria-controls="editbpp" role="tab" data-toggle="tab">Edit BPP</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="panel-body">  
                                        <div class="tab-content"> 
                                            <div class="tab-pane active">                             
                                                <form action="{{url('/update/kegiatan',$kegiatan->id)}}" method="POST">
                                                {!! csrf_field() !!}
                                                    <div class="form-group">
                                                        <label for="kode_kegiatan">Kode Kegiatan : </label>
                                                        <input type="text" class="form-control" id="kode_kegiatan" name="kode_kegiatan" value="{{$kegiatan->kode_kegiatan}}" required>                                                      
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="program_kegiatan">Program Kegiatan : </label>
                                                        <input type="text" class="form-control" id="program_kegiatan" name="program_kegiatan" value="{{$kegiatan->program_kegiatan}}" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">UPDATE</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection