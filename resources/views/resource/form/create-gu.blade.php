<div role="tabpanel" class="tab-pane" id="tambah-gu">
    <div class="panel panel-success">
        <div class="panel-heading">
            Form Tambah
        </div>
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="card">
                                <div class="panel-heading">
                                    <div class="panel-title text-center">KELENGKAPAN PENGAJUAN GU</div>
                                </div>
                                    <div class="panel-body">

                                        {!! Form::open(['action' => 'guController@store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/data']) !!}
                                            <input type="hidden" value="{{Auth::user()->bpp->id_bpp}}" name="idBPP">
                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('unitKerja', 'Unit Kerja : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('unitKerja', '', ['class' => 'form-control unitKerja', 'placeholder' => 'Unit Kerja', 'required', 'readonly'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('namaKegiatan', 'Nama Kegiatan : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{-- {{Form::text('namaKegiatan', '', ['class' => 'form-control', 'placeholder' => 'Nama Kegiatan', 'required', 'id' => 'programKegiatan', 'onchange' => 'ambilKode(this.value)',])}} --}}
                                                        <select id="programKegiatanGU" name="programKegiatan" class="form-control programKegiatan" style="height:37px" required>
                                                            <option value="" selected disabled></option>
                                                            @foreach($kegiatan as $kg)
                                                                <option  data-cc="{{$kg->kode_kegiatan}}">{{$kg->program_kegiatan}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('kodeKegiatan', 'Kode Kegiatan : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('kodeKegiatan', '', ['name' => 'kodeKegiatan', 'class' => 'form-control kodeKegiatan', 'placeholder' => 'Kode Kegiatan', 'required', 'id' => 'kodeKegiatanGU', 'readonly'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('namaBPP', 'Nama BPP : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('namaBPP', '', ['class' => 'form-control namaBPP', 'placeholder' => 'Nama BPP', 'required', 'readonly'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('suratPermohonan', 'Surat Permohonan GU : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('suratPermohonan', ['id' => 'SP', 'name' => 'suratPermohonan[]', 'placeholder' => 'Surat Permohonan', 'required', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-1', 'data-rbutton' => 'SP'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('bukuKasUmum', 'Buku Kas Umum : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('bukuKasUmum', ['id' => 'BKU', 'name' => 'bukuKasUmum[]', 'placeholder' => 'Buku Kas Umum', 'required', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-2', 'data-rbutton' => 'BKU'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('laporanPenanggungjawaban', 'Laporan Penanggungjawaban Per Kegiatan Manual : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('laporanPenanggungjawaban', ['id' => 'LP', 'name' => 'laporanPenanggungjawaban[]', 'placeholder' => 'Laporan Penanggungjawaban Per Kegiatan Manual', 'required', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-3', 'data-rbutton' => 'LP'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('sptbl', 'SPTBL Per Kegiatan SIPKD : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('sptbl', ['id' => 'SPTBL', 'name' => 'sptbl[]', 'placeholder' => 'SPTBL Per Kegiatan SIPKD : ', 'required', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-4', 'data-rbutton' => 'SPTBL'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('sipkd', 'Rekap Pajak SIPKD : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('sipkd', ['id' => 'SIPKD', 'name' => 'sipkd[]', 'placeholder' => 'Rekap Pajak SIPKD : ', 'required', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-5', 'data-rbutton' => 'SIPKD'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('kwitansi', 'Kwitansi : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('kwitansi', ['id' => 'KW', 'name' => 'kwitansi[]', 'placeholder' => 'Kwitansi : ', 'required', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-6', 'data-rbutton' => 'KW'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('sppFakturPajak', 'SPP dan Faktur Pajak Bernomor Seri : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('sppFakturPajak', ['id' => 'SPP', 'name' => 'sppFakturPajak[]', 'placeholder' => 'SPP dan Faktur Pajak Bernomor Seri : ', 'required', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-7', 'data-rbutton' => 'SPP'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('dokumentasi', 'Dokumentasi Hasil Pengadaan Barang/Jasa : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('dokumentasi', ['id' => 'DOC', 'name' => 'dokumentasi[]', 'placeholder' => 'Dokumentasi Hasil Pengadaan Barang/Jasa : ', 'required', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-8', 'data-rbutton' => 'DOC'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            {{Form::submit('Submit', ['class' => 'btn btn-primary pull-right'])}}
                                            <p>Maksimum upload data : 8MB </p>
                                        {!! Form::close() !!}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
