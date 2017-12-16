<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="text-left"><i class="fa fa-fw fa-table"></i>&nbsp;Table Revisi</h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-bordered" id="tableRevisi">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=1;
                            for($a=0;$a<=30;$a++){
                                ?>
                        <tr>
                            <td>{{$no}}</td>
                            <td>Ganti Uang(GU) atau Langsung(LS)</td>
                            <td>Nama Kegiatan</td>
                            <td>2017-06-01</td>
                            <td>
                                <a href="#" class="btn btn-success" title="detail"><i class="fa fa-fw fa-eye"></i></a>
                                &nbsp;
                                <a href="#" class="btn btn-primary" title="edit"><i class="fa fa-fw fa-edit"></i></a>
                                &nbsp;
                                <a href="#" class="btn btn-danger" title="hapus"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                                <?php   
                                $no++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>