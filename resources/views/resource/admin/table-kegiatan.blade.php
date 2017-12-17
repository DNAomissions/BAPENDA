<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Tabel Kegiatan</h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableKegiatan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kegiatan</th>
                            <th>Program Kegiatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        @foreach($kegiatan as $keg)
                        <tr>
                            <td>{{$keg->id}}</td>
                            <td>{{$keg->kode_kegiatan}}</td>
                            <td>{{$keg->program_kegiatan}}</td>
                            <td>
                                <a href="/edit/kegiatan/{{$keg->id}}" class="btn btn-success">EDIT</a>
                            </td>
                        </tr>
                        @endforeach
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>