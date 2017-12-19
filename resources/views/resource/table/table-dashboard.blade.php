<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Table Dashboard</h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableDashboard">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach($dashboardBPP as $dBPP)
                            @if($dBPP->id_bpp == Auth::user()->id_bpp)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$dBPP->Kategori}}</td>
                                    <td>{{$dBPP->program_kegiatan}}</td>
                                    <td>{{$dBPP->created_at}}</td>
                                    <td>{{$dBPP->status}}</td>
                                </tr>
                            @else

                            @endif
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
