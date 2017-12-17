<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Table Pengajuan</h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered" id="tablePengajuan-v">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama BPP</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                            @foreach($dashboardAll as $dbpp)
                                <tr>
                                    <td><?php echo $no;$no++; ?></td>
                                    <td>{{$dbpp->Kategori}}</td>
                                    <td>{{$dbpp->nama_bpp}}</td>
                                    <td>{{$dbpp->program_kegiatan}}</td>
                                    <td>{{$dbpp->created_at}}</td>
                                    <td>{{$dbpp->status}}</td>
                                    @if($dbpp->Kategori == 'GU')
                                        <td><a href="{{url('/verifikator/show_gu',base64_encode($dbpp->id_gu))}}">Verifikasi</a></td>
                                    @elseif($dbpp->Kategori == 'LS')
                                        <td><a href="{{url('/verifikator/show_ls',base64_encode($dbpp->id_gu))}}">Verifikasi</a></td>
                                    @else
                                        {{redirect('/home')}}
                                    @endif
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>