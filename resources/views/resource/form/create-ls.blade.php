<div role="tabpanel" class="tab-pane" id="tambah-ls">
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
                                    <div class="panel-title text-center">KELENGKAPAN PENGAJUAN LS</div>
                                </div>
                                    <div class="panel-body">

                                        {!! Form::open(['action' => 'lsController@store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/data']) !!}
                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('noSPP', 'No SPP : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('noSPP', '', ['class' => 'form-control', 'placeholder' => 'No SPP', 'required', 'name' => 'noSPP'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('namaBPP', 'Nama BPP : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('namaBPP', '', ['class' => 'form-control namaBPP', 'placeholder' => 'Nama BPP', 'required', 'readonly', 'name' => 'namaBPP'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('unitKerja', 'Unit Kerja : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('unitKerja', '', ['class' => 'form-control unitKerja', 'placeholder' => 'Unit Kerja', 'required', 'readonly', 'name' => 'unitKerja'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('perusahaan', 'Perusahaan : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('perusahaan', '', ['class' => 'form-control', 'placeholder' => 'Perusahaan', 'required', 'name' => 'perusahaan'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('pekerjaan', 'Pekerjaan : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('pekerjaan', '', ['class' => 'form-control', 'placeholder' => 'Pekerjaan', 'required', 'name' => 'pekerjaan'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('namaKegiatan', 'Nama Kegiatan : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{-- {{Form::text('namaKegiatan', '', ['class' => 'form-control', 'placeholder' => 'Nama Kegiatan', 'required', 'id' => 'programKegiatan', 'onchange' => 'ambilKode(this.value)',])}} --}}
                                                        <select id="programKegiatanLS" name="programKegiatan" class="form-control programKegiatanLS" style="height:37px" required>
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
                                                        {{Form::text('kodeKegiatan', '', ['name' => 'kodeKegiatan', 'class' => 'form-control kodeKegiatan', 'placeholder' => 'Kode Kegiatan', 'required', 'id' => 'kodeKegiatanLS', 'readonly'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('dpa', 'DPA : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" style="width:auto">Rp.</span>
                                                            {{Form::text('dpa','', ['class' => 'form-control', 'placeholder' => 'DPA', 'required', 'name' => 'dpa'])}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('hps', 'HPS : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" style="width:auto">Rp.</span>
                                                            {{Form::text('hps','', ['class' => 'form-control', 'placeholder' => 'HPS tidak boleh lebih besar dari DPA', 'required', 'name' => 'hps'])}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('penawaran', 'Penawaran : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" style="width:auto">Rp.</span>
                                                            {{Form::text('penawaran','', ['class' => 'form-control', 'placeholder' => 'Penawaran tidak boleh lebih besar dari HPS', 'required', 'name' => 'penawaran'])}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('spk', 'SPK : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" style="width:auto">Rp.</span>
                                                            {{Form::text('spk','', ['class' => 'form-control', 'placeholder' => 'SPK tidak boleh lebih besar dari Penawaran', 'required', 'name' => 'spk'])}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('mp', 'Masa Pekerjaan : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-8">
                                                        {{Form::text('mp', '', ['class' => 'form-control', 'placeholder' => 'Masa Pekerjaan', 'required', 'name' => 'mp'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('kak', 'Kerangka Acuan Kerja (KAK) : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('kak', ['id' => 'KAK', 'name' => 'kak[]', 'placeholder' => 'Kerangka Acuan Kerja (KAK) : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-9', 'data-rbutton' => 'KAK'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('rab', 'Hasil Survey/RAB : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('rab', ['id' => 'RAB', 'name' => 'rab[]', 'placeholder' => 'Hasil Survey/RAB : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-10', 'data-rbutton' => 'RAB'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('hps2', 'SK Harga Perkiraan Sendiri (HPS) : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('hps2', ['id' => 'HPS2', 'name' => 'hps2[]', 'placeholder' => 'SK Harga Perkiraan Sendiri (HPS) : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-11', 'data-rbutton' => 'HPS2'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('pengadaan', 'Dok. Pengadaan & Isian Administrasi Penyedia Jasa : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('pengadaan', ['id' => 'Pengadaan', 'name' => 'pengadaan[]', 'placeholder' => 'Dok. Pengadaan & Isian Administrasi Penyedia Jasa : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-12', 'data-rbutton' => 'Pengadaan'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('tdp', 'Surat Penawaran, TDP, SIUP, Domisili, ITU, IG, SIUJK/Sertifikat BUJPK : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('tdp', ['id' => 'TDP', 'name' => 'tdp[]', 'placeholder' => 'Surat Penawaran, TDP, SIUP, Domisili, ITU, IG, SIUJK/Sertifikat BUJPK : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-13', 'data-rbutton' => 'TDP'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('npwp', 'Surat Pengukuhan Pengusaha Kena Pajak, NPWP : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('npwp', ['id' => 'NPWP', 'name' => 'npwp[]', 'placeholder' => 'Surat Pengukuhan Pengusaha Kena Pajak, NPWP : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-14', 'data-rbutton' => 'NPWP'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('akta', 'Akta Perusahaan : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('akta', ['id' => 'Akta', 'name' => 'akta[]', 'placeholder' => 'Akta Perusahaan : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-15', 'data-rbutton' => 'Akta'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('pernyataan', 'Pernyataan Bukan PNS/TNI/POLRI, Neraca, Struktur Orang, Df Peralatan, Df Personalia : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('pernyataan', ['id' => 'Pernyataan', 'name' => 'pernyataan[]', 'placeholder' => 'Pernyataan Bukan PNS/TNI/POLRI, Neraca, Struktur Orang, Df Peralatan, Df Personalia : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-16', 'data-rbutton' => 'Pernyataan'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('refBank', 'Referensei Bank : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('refBank', ['id' => 'refBank', 'name' => 'refBank[]', 'placeholder' => 'Referensi Bank : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-17', 'data-rbutton' => 'refBank'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('spk2', 'Surat Perintah Kerja (SPK) : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('spk2', ['id' => 'SPK2', 'name' => 'spk2[]', 'placeholder' => 'Surat Perintah Kerja (SPK) : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-18', 'data-rbutton' => 'SPK2'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('kontrak', 'Ringkasan Kontrak : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('kontrak', ['id' => 'Kontrak', 'name' => 'kontrak[]', 'placeholder' => 'Ringkasan Kontrak : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-19', 'data-rbutton' => 'Kontrak'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('surat_bayar', 'Surat Permohonan Pembayaran : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('surat_bayar', ['id' => 'SB', 'name' => 'surat_bayar[]', 'placeholder' => 'Surat Permohonan Pembayaran : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-20', 'data-rbutton' => 'SB'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('faktur', 'Surat/Faktur/Kiriman Barang : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('faktur', ['id' => 'faktur', 'name' => 'faktur[]', 'placeholder' => 'Surat/Faktur/Kiriman Barang : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-21', 'data-rbutton' => 'Faktur'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('bap', 'Berita Acara Pemeriksaan Barang/Jasa : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('bap', ['id' => 'BAP', 'name' => 'bap[]', 'placeholder' => 'Berita Acara Pemeriksaan Barang/Jasa : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-22', 'data-rbutton' => 'BAP'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('serah_terima', 'Berita Acara Serah Terima Barang/Jasa : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('serah_terima', ['id' => 'ST', 'name' => 'serah_terima[]', 'placeholder' => 'Berita Acara Serah Terima Barang/Jasa : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-23', 'data-rbutton' => 'ST'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('penerimaan', 'Berita Acara Penerimaan Barang : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('penerimaan', ['id' => 'penerimaan', 'name' => 'penerimaan[]', 'placeholder' => 'Berita Acara Penerimaan Barang : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-24', 'data-rbutton' => 'Penerimaan'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('pembayaran', 'Berita Acara Pembayaran : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('pembayaran', ['id' => 'Pembayaran', 'name' => 'pembayaran[]', 'placeholder' => 'Berita Acara Pembayaran : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-25', 'data-rbutton' => 'Pembayaran'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('persetujuan', 'Berita Acara Persetujuan Pembayaran : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('persetujuan', ['id' => 'Persetujuan', 'name' => 'persetujuan[]', 'placeholder' => 'Berita Acara Persetujuan Pembayaran : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-26', 'data-rbutton' => 'Persetujuan'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('kwitansi', 'Kwitansi : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('kwitansi', ['id' => 'KWLS', 'name' => 'kwitansi[]', 'placeholder' => 'Kwitansi : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-27', 'data-rbutton' => 'KWLS'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('bukti_transfer', 'Bukti Transfer : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('bukti_transfer', ['id' => 'BT', 'name' => 'bukti_transfer[]', 'placeholder' => 'Bukti Transfer : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-28', 'data-rbutton' => 'BT'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('ssp_ebilling', 'SSP Ebilling & e-Faktur : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('ssp_ebilling', ['id' => 'SPPE', 'name' => 'ssp_ebilling[]', 'placeholder' => 'SSP Ebilling & e-Faktur : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-29', 'data-rbutton' => 'SPPE'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('bukti_stor', 'Bukti Stor BPJK, Jam. Uang Muka, Pelaksanaan, Pemeliharaan  : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('bukti_stor', ['id' => 'BS', 'name' => 'bukti_stor[]', 'placeholder' => 'Bukti Stor BPJK, Jam. Uang Muka, Pelaksanaan, Pemeliharaan  : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-30', 'data-rbutton' => 'BS'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('laporan_hasil', 'Laporan Hasil Pekerjaan, Foto Dok., RAB, OE, EE, Gambar, INVOICE : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('laporan_hasil', ['id' => 'LH', 'name' => 'laporan_hasil[]', 'placeholder' => 'Laporan Hasil Pekerjaan, Foto Dok., RAB, OE, EE, Gambar, INVOICE : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-31', 'data-rbutton' => 'LH'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('surat_pengantar', 'Surat Pengantar : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('surat_pengantar', ['id' => 'SPLS', 'name' => 'surat_pengantar[]', 'placeholder' => 'Surat Pengantar : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-32', 'data-rbutton' => 'SPLS'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('ringkasan', 'Ringkasan : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('ringkasan', ['id' => 'Ringkasan', 'name' => 'ringkasan[]', 'placeholder' => 'Ringkasan : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-33', 'data-rbutton' => 'Ringkasan'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('rincian', 'Rincian Penggunaan Dana : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('rincian', ['id' => 'Rincian', 'name' => 'rincian[]', 'placeholder' => 'Rincian Penggunaan Dana : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-34', 'data-rbutton' => 'Rincian'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    {{Form::label('sptjb', 'Surat Pertanggungjawaban Belanja (SPTJB) : ', ['class' => 'control-label col-md-4'])}}
                                                    <div class="col-md-6">
                                                        {{Form::file('sptjb', ['id' => 'SPTJBLS', 'name' => 'sptjb[]', 'placeholder' => 'Surat Pertanggungjawaban Belanja (SPTJB) : ', 'multiple', 'accept' => 'image/*, .pdf'])}}
                                                    </div>
                                                    <div class="col-md-2">
                                                        {{Form::button('Reset', ['class' => 'resetButton pull-right', 'id' => 'resetButton-35', 'data-rbutton' => 'SPTJBLS'])}}
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <input type="hidden" value="{{Auth::user()->bpp->id_bpp}}" name="idBPP">
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
