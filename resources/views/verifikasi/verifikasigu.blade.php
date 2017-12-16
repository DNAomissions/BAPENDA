<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    th{
      text-align:center;
    }
    
  </style>
</head>
<body>
  <!-- mulai 1 -->
  <br>
  <br>
    <div class="container">
      <div class="jumbotron">
        <h3><center>KELENGKAPAN PENGAJUAN GU</center></h3>
        <form>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="unitkerja">Unit Kerja</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="unitkerja"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="form">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-2"><label for="namakegiatan">Nama Kegiatan</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" id="namakegiatan"></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="namabpp">Nama BPP</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="namabpp"></div>
              </div>
            </div>
            <div class="container">
              <table class="table table-responsive table-bordered">
                <thread>
                  <tr>
                    <th width="5%">No</th>
                    <th width="70%">Uraian</th>
                    <th width="7%">Detail</th>
                    <th width="18%">Keterangan</th>
                  </tr>
                  <tr>
                    <td align="center">1</td></div>
                    <td>Surat Permohonan GU</td>
                    <td>
                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                         <span class="glyphicon glyphicon-list-alt"></span> Detail
                        </button>
                          <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Modal Header</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Some text in the modal.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                           </div>
                    </td>
                    <td align="center">
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan1">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan1">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">2</td></div>
                    <td>Buku Kas Umum (BKU)</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal" role="dialog">
                         <div class="modal-dialog">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Modal Header</h4>
                             </div>
                             <div class="modal-body">
                               <p>Some text in the modal.</p>
                             </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                           
                         </div>
                       </div>
                      </div>
                    </td>
                    <td align="center">
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan2">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan2">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">3</td></div>
                    <td>Laporan Pertanggung Jawaban (LPJ) Per Kegiatan Manual</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal" role="dialog">
                         <div class="modal-dialog">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Modal Header</h4>
                             </div>
                             <div class="modal-body">
                               <p>Some text in the modal.</p>
                             </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                           
                         </div>
                       </div>
                      </div>
                    </td>
                    <td align="center">
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan3">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan3">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">4</td></div>
                    <td>SPTBL Per Kegiatan SIPKD</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal" role="dialog">
                         <div class="modal-dialog">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Modal Header</h4>
                             </div>
                             <div class="modal-body">
                               <p>Some text in the modal.</p>
                             </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                           
                         </div>
                       </div>
                      </div>
                    </td>
                    <td align="center">
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan4">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan4">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">5</td></div>
                    <td>Kwitansi (Buku Kas)</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal" role="dialog">
                         <div class="modal-dialog">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Modal Header</h4>
                             </div>
                             <div class="modal-body">
                               <p>Some text in the modal.</p>
                             </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                           
                         </div>
                       </div>
                      </div>
                    </td>
                    <td align="center">
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan5">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan5">Tidak Ada</label>
                    </td>
                  </tr>
                </thread>
              </table>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-2"><label for="catatan">Catatan</label></div>
              </div>
                <textarea class="form-control" rows="20" id="catatan"></textarea>
            </div><br>
            <div class="form-group">
              <div class="row">
                  <div class="col-md-9"></div>
                  <button type="button" class="btn btn-success col-md-1"><a href="home">Verifikasi</a>
                  <button type="button" class="btn btn-warning col-md-1"><a href="home">Revisi</a></button>
                  <button type="button" class="btn btn-default col-md-1"><a href="home">Cancel</a></button>
              </div>
        </form>
      </div>
    </div>
  <!-- akhir 1 -->
</body>
</html>