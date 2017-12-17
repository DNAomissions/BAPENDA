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
        <form action="{{url('/verifikasi/gu/{id}')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="unitkerja">Unit Kerja</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="unitkerja" name="unit_kerja" value="{{ $gu->bpp->unit_kerja }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="form">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-2"><label for="namakegiatan">Nama Kegiatan</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" id="namakegiatan" name="program_kegiatan" value="{{$gu->kegiatan->program_kegiatan}}" readonly></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="namabpp">Nama BPP</label></div>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="namabpp" name="nama_bpp" value="{{$gu->bpp->nama_bpp}}" readonly>
                  <input type="hidden" class="form-control" id="id" name="id_gu" value="{{$gu->id_gu}}" readonly>
                </div>
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
                        <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal1">
                         <span class="glyphicon glyphicon-list-alt"></span> Detail
                        </button>
                          <!-- Modal -->
                            <div class="modal fade" id="myModal1" role="dialog">
                              <div class="modal-dialog modal-lg">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Detail Surat Permohonan</h4>
                                  </div>
                                  <div class="modal-body">
                                    @foreach($image1 as $i) 
                                      <img width="100%" src="{{asset('storage/suratPermohonan/'.$i)}}" alt="..." name="surat_permohonan">
                                      <hr>
                                    @endforeach
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan">Tidak Ada</label>
                    </td>
                  </tr>

                  <tr>
                    <td align="center">2</td></div>
                    <td>Buku Kas Umum (BKU)</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal2">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal2" role="dialog">
                         <div class="modal-dialog modal-lg">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Detail Buku Kas Umum</h4>
                             </div>
                             <div class="modal-body">
                               @foreach($image2 as $i) 
                                <img width="100%" src="{{asset('storage/bukuKasUmum/'.$i)}}" alt="..." name="buku_kas_umum">
                                <hr>
                                @endforeach
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
                    <td align="center">3</td></div>
                    <td>Laporan Pertanggung Jawaban (LPJ) Per Kegiatan Manual</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal3">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal3" role="dialog">
                         <div class="modal-dialog modal-lg">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Detail Laporan Pertanggung Jawbaan (LPJ) Per Kegiatan Manual</h4>
                             </div>
                             <div class="modal-body">
                                @foreach($image3 as $i) 
                                  <img width="100%" src="{{asset('storage/laporanPenanggungjawaban/'.$i)}}" alt="..." name="laporan_pertanggungjawaban"/>
                                  <hr>
                                @endforeach
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
                    <td align="center">4</td></div>
                    <td>SPTBL Per Kegiatan SIPKD</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal4">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal4" role="dialog">
                         <div class="modal-dialog modal-lg">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Detail SPTBL per Kegiatan SIPKD</h4>
                             </div>
                             <div class="modal-body">
                                @foreach($image4 as $i) 
                                  <img width="100%" src="{{asset('storage/sptbl/'.$i)}}" alt="..." name="sptbl">
                                  <hr>
                                @endforeach
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
                    <tr>
                    <td align="center">5</td></div>
                    <td>Rekap Pajak SIPKD</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal5">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal5" role="dialog">
                         <div class="modal-dialog modal-lg">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Detail Rekap Pajak SIPKD</h4>
                             </div>
                             <div class="modal-body">
                               @foreach($image5 as $i) 
                                  <img width="100%" src="{{asset('storage/sipkd/'.$i)}}" alt="..." name="sipkd">
                                  <hr>
                                @endforeach
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
                    <td align="center">6</td></div>
                    <td>Kwitansi (Buku Kas)</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal6">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal6" role="dialog">
                         <div class="modal-dialog modal-lg">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Detail Kwitansi</h4>
                             </div>
                             <div class="modal-body">
                               @foreach($image6 as $i) 
                                  <img width="100%" src="{{asset('storage/kwitansi/'.$i)}}" alt="..." name="kwitansi">
                                  <hr>
                                @endforeach
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
                    <tr>
                    <td align="center">7</td></div>
                    <td>SSP & Faktur Pajak Bernomor Seri</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal7">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal7" role="dialog">
                         <div class="modal-dialog modal-lg">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Detai SPP & Faktur Pajak Bernomor Seri</h4>
                             </div>
                             <div class="modal-body">
                               @foreach($image7 as $i) 
                                  <img width="100%" src="{{asset('storage/sppFakturPajak/'.$i)}}" alt="..." name="spp_n_faktur_pajak">
                                  <hr>
                                @endforeach
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan6">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan6">Tidak Ada</label>
                    </td>
                    <tr>
                    <td align="center">8</td></div>
                    <td>Dokumentasi Hasil Pengadaan Barang/Jasa (Photo)</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal8">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal8" role="dialog">
                         <div class="modal-dialog modal-lg">
                         
                           <!-- Modal content-->
                           <div class="modal-content">
                             <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                               <h4 class="modal-title">Detail Dokumentasi Hasil Pengadaan Barang/Jasa</h4>
                             </div>
                             <div class="modal-body">
                               @foreach($image8 as $i) 
                                  <img width="100%" src="{{asset('storage/dokumentasi/'.$i)}}" alt="..." name="dokumentasi">
                                  <hr>
                                @endforeach
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan7">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan7">Tidak Ada</label>
                    </td>
                  </tr>
                </thread>
              </table>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-2"><label for="catatan">Catatan</label></div>
              </div>
                <textarea class="form-control" rows="20" id="catatan" name="catatan"></textarea>
            </div><br>
            <div class="form-group pull-right">
              <button class="btn btn-primary">Submit</button>
              <a class="btn btn-danger" href="/home">Cancel</a>
            </div>
        </form>
      </div>
    </div>
</body>
</html>