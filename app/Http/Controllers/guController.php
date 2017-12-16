<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GU;

class guController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

             $nameToStore = implode(',', $names);
         }
         return $nameToStore;
     }

    public function store(Request $request)
    {
        $request->validate([
           'idBPP' => 'required',
           'kodeKegiatan' => 'required',
           'suratPermohonan.*' => 'required|image|nullable',
           'bukuKasUmum.*' => 'required|image|nullable',
           'laporanPertanggungjawaban.*' => 'required|image|nullable',
           'sptbl.*' => 'required|image|nullable',
           'sipkd.*' => 'required|image|nullable',
           'kwitansi.*' => 'required|image|nullable',
           'sppFakturPajak.*' => 'required|image|nullable',
           'dokumentasi.*' => 'required|image|nullable',
        ]);

        $nameSPToStore =  $this->ambil('suratPermohonan', $request->file('suratPermohonan'), $request->hasFile('suratPermohonan.*'));
        $nameBKUToStore = $this->ambil('bukuKasUmum', $request->file('bukuKasUmum'), $request->hasFile('bukuKasUmum.*'));
        $nameLPToStore = $this->ambil('laporanPenanggungjawaban', $request->file('laporanPenanggungjawaban'), $request->hasFile('laporanPenanggungjawaban.*'));
        $nameSPTBL = $this->ambil('sptbl', $request->file('sptbl'), $request->hasFile('sptbl.*'));
        $nameSIPKD = $this->ambil('sipkd', $request->file('sipkd'), $request->hasFile('sipkd.*'));
        $nameKW = $this->ambil('kwitansi', $request->file('kwitansi'), $request->hasFile('kwitansi.*'));
        $nameSPP = $this->ambil('sppFakturPajak', $request->file('sppFakturPajak'), $request->hasFile('sppFakturPajak.*'));
        $nameDOC = $this->ambil('dokumentasi', $request->file('dokumentasi'), $request->hasFile('dokumentasi.*'));


        // Create Post
        $gu = new GU;

        $gu->kode_kegiatan = $request->input('kodeKegiatan');
        $gu->id_bpp = $request->input('idBPP');

        $gu->surat_permohonan = $nameSPToStore;
        $gu->buku_kas_umum = $nameBKUToStore;
        $gu->laporan_pertanggungjawaban = $nameLPToStore;
        $gu->sptbl = $nameSPTBL;
        $gu->rekap_pajak_sipkd = $nameSIPKD;
        $gu->kwitansi = $nameKW;
        $gu->spp_n_faktur_pajak = $nameSPP;
        $gu->dokumentasi = $nameDOC;

        $gu->status = "Proses Verifikasi";
        $gu->save();

        return redirect()->to('/home')->with('success', 'Pengajuan GU berhasil!');
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
