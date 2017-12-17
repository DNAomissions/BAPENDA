    <div role="tabpanel" class="tab-pane active" id="table-ls">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Table Pengajuan Langsung</h3>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableLs">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach($idls as $lsu)
                                    <tr>
                                        <td><?php echo $no;$no++; ?></td>
                                        <td>{{$lsu->kegiatan->program_kegiatan}}</td>
                                        <td>{{$lsu->created_at}}</td>
                                        <td>{{$lsu->status}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
