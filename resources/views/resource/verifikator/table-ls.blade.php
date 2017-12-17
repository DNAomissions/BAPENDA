<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Table Pengajuan Langsung</h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="text-left">
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="tableLs-v">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Nama BPP</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach($tabelLS as $ls)
                            <tr>
                                <td><?php echo $no;$no++; ?></td>
                                <td>{{$ls->kegiatan->program_kegiatan}}</td>
                                <td>{{$ls->bpp['nama_bpp']}}</td>
                                <td>{{$ls->created_at}}</td>
                                <td>{{$ls->status}}</td>
                                <td><a href="{{url('/verifikator/show_ls', base64_encode($ls->id_ls))}}">Verifikasi</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>