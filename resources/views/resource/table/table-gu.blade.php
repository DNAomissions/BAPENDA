    <div role="tabpanel" class="tab-pane active" id="table-gu">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Table Pengajuan Ganti Uang</h3>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableGu">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach($tabelGU as $tgu)
                                    <tr>
                                        <td><?php echo $no;$no++; ?></td>
                                        <td>{{$tgu->kegiatan->program_kegiatan}}</td>
                                        <td>{{$tgu->created_at}}</td>
                                        <td>{{$tgu->status}}</td>
                                        <td><a href="{{url('/user/edit/bpp',base64_encode($tgu->id_gu))}}" target="_blank" class="btn btn-primary">EDIT</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
