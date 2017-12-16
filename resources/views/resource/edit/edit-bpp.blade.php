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
                            <div role="tabpanel" class="tab-pane active" id="bpp">
                                <!--Tab BPP-->
                                <div class="panel">
                                    <div class="panel-heading">
                                    <!-- Tabs and Pills Content -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation"><a href="{{url('/home')}}">Tabel BPP</a></li>
                                            <li role="presentation"><a href="{{url('/home')}}">Tambah BPP</a></li>
                                            <li role="presentation" class="active"><a href="#editbpp" aria-controls="editbpp" role="tab" data-toggle="tab">Edit BPP</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">  
                                        <div class="tab-content"> 
                                            <div class="tab-pane active">                             
                                                <form action="{{url('/update/bpp',$bpp->id_bpp)}}" method="post">
                                                {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label for="nama">Nama : </label>
                                                        <input type="text" class="form-control" id="nama_bpp" name="name" value="{{$bpp->id_bpp}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Unit Kerja : </label>
                                                        <input type="text" class="form-control" id="unit_kerja" name="unit_kerja" value="{{$bpp->unit_kerja}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat : </label>
                                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$bpp->alamat}}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">No Telepon : </label>
                                                        <input type="text" class="form-control" id="no_telepon" value="{{$bpp->no_telepon}}" name="no_telepon">
                                                    </div>		
                                                    <!-- {{Form::hidden('_method', 'PUT')}} -->
                                                    <button type="submit" class="btn btn-primary">Update</button>
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