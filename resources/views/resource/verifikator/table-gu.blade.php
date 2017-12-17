<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>

<script>
$(document).ready(function() {
// $('.btnPrint').printPage();
    $('.btnPrint').printPage()
});
</script>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Table Pengajuan Ganti Uang</h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableGu-v">
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
                            @foreach($tabelGU as $tgu)
                                <tr>
                                    <td><?php echo $no;$no++; ?></td>
                                    <td>{{$tgu->kegiatan->program_kegiatan}}</td>
                                    <td>{{$tgu->bpp->nama_bpp}}</td>
                                    <td>{{$tgu->created_at}}</td>
                                    <td>{{$tgu->status}}</td>
                                    <td>
                                        <a href="{{url('/verifikator/show_gu',base64_encode($tgu->id_gu))}}">Verifikasi</a>
                                        
                                        @if($tgu->status == 'diterima')
                                        |
                                        <!-- <a href="{{url('/printer/print')}}" class="btnPrint">Print</a> -->
                                        @endif
                                        <a href="{{url('/printer/print')}}" class="btnPrint">Print</a>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>