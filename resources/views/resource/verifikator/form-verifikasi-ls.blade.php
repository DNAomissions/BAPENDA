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
        <h3><center>KELENGKAPAN SPP LS PENGADAAN BARANG/JASA</center></h3>
        <form action="{{url('/verifikasi/ls/{id}')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" class="form-control" id="id_ls" name="id_ls" value="{{$ls->id_ls}}" readonly>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="nospp">No.SPP</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="nospp" name="nospp" value="{{ $ls->no_spp }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="form">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-2"><label for="perusahaan">Perusahaan</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" id="perusahaan" value="{{ $ls->perusahaan }}" readonly></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="pekerjaan">Pekerjaan</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="pekerjaan" value="{{ $ls->pekerjaan }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="kodekegiatan">Kode Kegiatan</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="kodekegiatan" value="{{ $ls->kode_kegiatan }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="kegiatan">Kegiatan</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="kegiatan" value="{{ $ls->kegiatan->program_kegiatan }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="dpa">DPA</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="dpa" value="{{ $ls->dpa }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="hps">HPS</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="hps" value="{{ $ls->hps }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="penawaran">Penawaran</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="penawaran" value="{{ $ls->penawaran }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="spk">SPK</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="spk" value="{{ $ls->spk }}" readonly></div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><label for="mp">MP</label></div>
                <div class="col-md-8"><input type="text" class="form-control" id="mp" value="{{ $ls->mp }}" readonly></div>
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
                    <td>Kerangka Acuan Kerja (KAK)</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal1" role="dialog">
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
                    <td>Hasil Survey/RAB</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal2" role="dialog">
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
                    <td>SK Harga Perkiraan Sendiri (HPS)</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal3" role="dialog">
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
                    <td>Dok. Pengadaan & Isian Administrasi Penyedia Jasa</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal4" role="dialog">
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
                    <td>Surat Penawaran, TDP, SIUP, Domisili, ITU, IG, SIUJK/Sertf BUJPK</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal5" role="dialog">
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
                  <tr>
                    <td align="center">6</td></div>
                    <td>Surat Pengukuhan Pengusaha Kena Pajak, NPWP :</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal6" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan6">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan6">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">7</td></div>
                    <td>Akta Perusahaan</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal7" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan7">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan7">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">8</td></div>
                    <td>Pernyataan Bukan PNS/TNI/Polri, Neraca, Struktur Org, Df Peralatan, Df Personalia</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal8" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan8">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan8">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">9</td></div>
                    <td>Referensi Bank:</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal9" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan9">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan9">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">10</td></div>
                    <td>Surat Perintah Kerja(SPK)</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal10" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan10">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan10">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">11</td></div>
                    <td>Ringkasan Kontrak</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal11" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan11">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan11">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">12</td></div>
                    <td>Surat Permohonan Pembayaran</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal12" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan12">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan12">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">13</td></div>
                    <td>Surat/Faktur/Kiriman Barang</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal13" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan13">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan13">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">14</td></div>
                    <td>Berita Acara Pemeriksaan Barang/Jasa</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal14" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan14">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan14">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">15</td></div>
                    <td>Berita Acara Serah Terima Barang/Jasa</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal15" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan15">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan15">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">16</td></div>
                    <td>Berita Acara Penerimaan Barang </td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal16" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan16">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan16">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">17</td></div>
                    <td>Berita Acara Pembayaran</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal17" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan17">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan17">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">18</td></div>
                    <td>Berita Acara Persetujuan Pembayaran</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal18" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan18">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan18">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">19</td></div>
                    <td>Kwitansi</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal19" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan19">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan19">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">20</td></div>
                    <td>Bukti Transfer</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal20" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan20">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan20">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">21</td></div>
                    <td>SSP Ebiling & e-Faktur</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal21" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan21">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan21">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">22</td></div>
                    <td>Bukti Stor BPJS, Jam. Uang Muka, Pelaksanaan, Pemeliharaan</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal22" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan22">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan22">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">23</td></div>
                    <td>Laporan Hasil Pekerjaan, Foto Dok., RAB, OE, EE, Gambar, INVOICE</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal23" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan23">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan23">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">24</td></div>
                    <td>Surat Pengantar</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal24" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan24">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan24">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">25</td></div>
                    <td>Ringkasan</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal25" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan25">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan25">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">26</td></div>
                    <td>Rincian Penggunaan Dana</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal26" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan26">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan26">Tidak Ada</label>
                    </td>
                  </tr>
                  <tr>
                    <td align="center">27</td></div>
                    <td>Surat Pertanggungjawaban Belanja</td>
                    <td>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-list-alt"></span> Detail
                   </button>
                     <!-- Modal -->
                       <div class="modal fade" id="myModal27" role="dialog">
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
                      <label class="radio-inline"><input type="radio" value="ada" name="keterangan27">Ada</label>
                      <label class="radio-inline"><input type="radio" value="tidak" name="keterangan27">Tidak Ada</label>
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
              </div>
            </div>
        </form>
      </div>
    </div>
  <!-- akhir 1 -->
</body>
</html>