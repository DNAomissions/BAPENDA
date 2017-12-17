<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LS;

class lsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function ambil($namaInputan, $a1, $a2){
         $nameToStore = "";
         $files = $a1;
         if($a2){
             foreach($files as $file){
                 $fileNameFull = $file->getClientOriginalName();

                 $name = pathinfo($fileNameFull, PATHINFO_FILENAME);
                 $extension = $file->getClientOriginalExtension();

                 // if($extension != 'pdf' || $extension != 'png' || $extension != 'jpg' || $extension != 'jpeg'){
                 //     return "File ".$namaInputan." tidak tidak valid."
                 // }

                 $nameFinal = $name.'_'.time().'.'.$extension;

                 $file->storeAs('public/'.$namaInputan, $nameFinal);

                 $names[] = $nameFinal;
             }

             foreach($names as $n){
                 $nameToStore = $nameToStore.''.$n.", ";
             }
         }
         return $nameToStore;
     }

    public function store(Request $request)
    {
        $request->validate([
            'noSPP' =>'required',
            'namaBPP' => 'required',
            'perusahaan' => 'required',
            'pekerjaan' => 'required',
            'kodeKegiatan' => 'required',
            'dpa' => 'required',
            'hps' => 'required',
            'penawaran' => 'required',
            'spk' => 'required',
            'mp' => 'required',
            'kak.*' => 'image|nullable',
            'rab.*' => 'image|nullable',
            'hps2.*' => 'image|nullable',
            'pengadaan.*' => 'image|nullable',
            'tdp.*' => 'image|nullable',
            'npwp.*' => 'image|nullable',
            'akta.*' => 'image|nullable',
            'pernyataan.*' => 'image|nullable',
            'refBank.*' => 'image|nullable',
            'spk2.*' => 'image|nullable',
            'kontrak.*' => 'image|nullable',
            'surat_bayar.*' => 'image|nullable',
            'faktur.*' => 'image|nullable',
            'bap.*' => 'image|nullable',
            'serah_terima.*' => 'image|nullable',
            'penerimaan.*' => 'image|nullable',
            'pembayaran.*' => 'image|nullable',
            'persetujuan.*' => 'image|nullable',
            'kwitansi.*' => 'image|nullable',
            'bukti_transfer.*' => 'image|nullable',
            'ssp_ebilling.*' => 'image|nullable',
            'bukti_stor.*' => 'image|nullable',
            'laporan_hasil.*' => 'image|nullable',
            'surat_pengantar.*' => 'image|nullable',
            'ringkasan.*' => 'image|nullable',
            'rincian.*' => 'image|nullable',
            'sptjb.*' => 'image|nullable'
        ]);

        $nameKAK = $this->ambil('kak',$request->file('kak'), $request->hasFile('kak.*'));
        $nameRAB = $this->ambil('rab', $request->file('rab'), $request->hasFile('rab.*'));
        $nameHPS2 = $this->ambil('hps2', $request->file('hps2'), $request->hasFile('hps2.*'));
        $namePengadaan = $this->ambil('pengadaan', $request->file('pengadaan'), $request->hasFile('pengadaan.*'));
        $nameTDP = $this->ambil('tdp', $request->file('tdp'), $request->hasFile('tdp.*'));
        $nameNPWP = $this->ambil('npwp', $request->file('npwp'), $request->hasFile('npwp.*'));
        $nameAkta = $this->ambil('akta', $request->file('akta'), $request->hasFile('akta.*'));
        $namePernyataan = $this->ambil('pernyataan', $request->file('pernyataan'), $request->hasFile('pernyataan.*'));
        $nameRBank= $this->ambil('refBank', $request->file('refBank'), $request->hasFile('refBank.*'));
        $nameSPK2 = $this->ambil('spk2', $request->file('spk2'), $request->hasFile('spk2.*'));
        $nameKontrak = $this->ambil('kontrak', $request->file('kontrak'), $request->hasFile('kontrak.*'));
        $nameSB = $this->ambil('surat_bayar', $request->file('surat_bayar'), $request->hasFile('surat_bayar.*'));
        $nameFaktur = $this->ambil('faktur', $request->file('faktur'), $request->hasFile('faktur.*'));
        $nameBAP = $this->ambil('bap', $request->file('bap'), $request->hasFile('bap.*'));
        $nameST = $this->ambil('serah_terima', $request->file('serah_terima'), $request->hasFile('serah_terima.*'));
        $namePenerimaan = $this->ambil('penerimaan', $request->file('penerimaan'), $request->hasFile('penerimaan.*'));
        $namePembayaran = $this->ambil('pembayaran', $request->file('pembayaran'), $request->hasFile('pembayaran.*'));
        $namePersetujuan = $this->ambil('persetujuan', $request->file('persetujuan'), $request->hasFile('persetujuan.*'));
        $nameKwitansi = $this->ambil('kwitansi', $request->file('kwitansi'), $request->hasFile('kwitansi.*'));
        $nameBT = $this->ambil('bukti_transfer', $request->file('bukti_transfer'), $request->hasFile('bukti_transfer.*'));
        $nameSSPE = $this->ambil('ssp_ebilling', $request->file('ssp_ebilling'), $request->hasFile('ssp_ebilling.*'));
        $nameBTStor = $this->ambil('bukti_stor', $request->file('bukti_stor'), $request->hasFile('bukti_stor.*'));
        $nameLH = $this->ambil('laporan_hasil', $request->file('laporan_hasil'), $request->hasFile('laporan_hasil.*'));
        $nameSP = $this->ambil('surat_pengantar', $request->file('surat_pengantar'), $request->hasFile('surat_pengantar.*'));
        $nameRingkasan = $this->ambil('ringkasan', $request->file('ringkasan'), $request->hasFile('ringkasan.*'));
        $nameRincian = $this->ambil('rincian', $request->file('rincian'), $request->hasFile('rincian.*'));
        $nameSPTJB = $this->ambil('sptjb', $request->file('sptjb'), $request->hasFile('sptjb.*'));

        $ls = new LS;

        $ls->id_bpp = $request->input('idBPP');
        $ls->id_verif = $request->input('idBPP');
        $ls->no_spp = $request->input('noSPP');
        $ls->pekerjaan = $request->input('pekerjaan');
        $ls->perusahaan = $request->input('perusahaan');
        $ls->kode_kegiatan = $request->input('kodeKegiatan');
        $ls->dpa = $request->input('dpa');
        $ls->hps = $request->input('hps');
        $ls->penawaran = $request->input('penawaran');
        $ls->spk = $request->input('spk');
        $ls->mp = $request->input('mp');


        if($ls->spk > $ls->penawaran) {
            return redirect('/home')->with('error', 'SPK tidak boleh lebih besar dari Penawaran');
        }

        if($ls->penawaran > $ls->hps) {
            return redirect('/home')->with('error', 'Penawaran tidak boleh lebih besar dari HPS');
        }

        if($ls->hps >= $ls->dpa) {
            return redirect('/home')->with('error', 'HPS tidak boleh lebih besar dari DPA');
        }

        $ls->kak = $nameKAK;
        $ls->rab = $nameRAB;
        $ls->hps2 = $nameHPS2;
        $ls->dok_pengadaan = $namePengadaan;
        $ls->tdp = $nameTDP;
        $ls->npwp = $nameNPWP;
        $ls->akta = $nameAkta;
        $ls->pernyataan = $namePernyataan;
        $ls->ref_bank = $nameRBank;
        $ls->spk2 = $nameSPK2;
        $ls->kontrak = $nameKontrak;
        $ls->surat_bayar = $nameSB;
        $ls->faktur = $nameFaktur;
        $ls->bap = $nameBAP;
        $ls->serah_terima = $nameST;
        $ls->penerimaan = $namePenerimaan;
        $ls->pembayaran = $namePembayaran;
        $ls->persetujuan = $namePersetujuan;
        $ls->kwitansi = $nameKwitansi;
        $ls->bukti_transfer = $nameBT;
        $ls->ssp_ebilling = $nameSSPE;
        $ls->bukti_stor = $nameBTStor;
        $ls->laporan_hasil = $nameLH;
        $ls->surat_pengantar = $nameSP;
        $ls->ringkasan = $nameRingkasan;
        $ls->rincian = $nameRincian;
        $ls->sptjb = $nameSPTJB;

        $ls->status = "Proses Verifikasi";
        $ls->save();

        return redirect()->to('/home')->with('success', 'Pengajuan LS Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
