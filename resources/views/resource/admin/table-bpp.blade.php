<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Tabel BPP</h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableBPP">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Unit Kerja</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($bpp as $bp)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$bp->nama_bpp}}</td>
                            <td>{{$bp->unit_kerja}}</td>
                            <td>{{$bp->alamat}}</td>
                            <td>{{$bp->no_telepon}}</td>
                            <td>
                                <button class="btn btn-success">UPDATE</button>
                                <button class="btn btn-danger">DELETE</button>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>