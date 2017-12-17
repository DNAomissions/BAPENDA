<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\GU;
use App\LS;
use App\Kegiatan;
use App\VerifikasiGU;
use App\VerifikasiLS;

class VerifikatorController extends Controller
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
    public function store_gu(Request $request)
    {
        $gu = GU::find($request->input('id_gu'));

        $vgu = new VerifikasiGU;
        $vgu->surat_permohonan = $request->input('keterangan');
        $vgu->buku_kas_umum = $request->input('keterangan1');
        $vgu->laporan_pertanggungjawaban = $request->input('keterangan2');
        $vgu->sptbl = $request->input('keterangan3');
        $vgu->rekap_pajak_sipkd = $request->input('keterangan4');
        $vgu->kwitansi = $request->input('keterangan5');
        $vgu->spp_n_faktur_pajak = $request->input('keterangan6');
        $vgu->dokumentasi = $request->input('keterangan7');
        $vgu->catatan = $request->input('catatan');

        if($vgu->surat_permohonan == 'tidak') {
            $gu->status = "harus direvisi";
        }else if($vgu->surat_permohonan == 'ada') $gu->status = "diterima";
        if($vgu->buku_kas_umum == 'tidak') {
            $gu->status = "harus direvisi";
        }else if($vgu->buku_kas_umum == 'ada') $gu->status = "diterima";
        if($vgu->laporan_pertanggungjawaban == 'tidak') {
            $gu->status = "harus direvisi";
        }else if($vgu->laporan_pertanggungjawaban == 'ada') $gu->status = "diterima";
        if($vgu->sptbl == 'tidak') {
            $gu->status = "harus direvisi";
        }else if($vgu->sptbl == 'ada') $gu->status = "diterima";
        if($vgu->rekap_pajak_sipkd == 'tidak') {
            $gu->status = "harus direvisi";
        }else if($vgu->rekap_pajak_sipkd == 'ada') $gu->status = "diterima";
        if($vgu->kwitansi == 'tidak') {
            $gu->status = "harus direvisi";
        }else if($vgu->kwitansi == 'ada') $gu->status = "diterima";
        if($vgu->spp_n_faktur_pajak == 'tidak') {
            $gu->status = "harus direvisi";
        }else if($vgu->spp_n_faktur_pajak == 'ada') $gu->status = "diterima";
        if($vgu->dokumentasi == 'tidak') {
            $gu->status = "harus direvisi";
        }else if($vgu->dokumentasi == 'ada') $gu->status = "diterima";

        // if($gu->status == 'harus direvisi') {

        // }else if($gu->status == 'diterima') return "Dokumen lengkap, diterima";

        $vgu->save();
        $gu->save();
        
        return redirect()->to('/home')->with('success', 'Verifikasi GU berhasil!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_ls(Request $request)
    {
        $ls = LS::find($request->input('id_ls'));

        $vls = new VerifikasiLS;
        $vls->kak = $request->input('keterangan1');
        $vls->rab = $request->input('keterangan2');
        $vls->hps2 = $request->input('keterangan3');
        $vls->dok_pengadaan = $request->input('keterangan4');
        $vls->tdp = $request->input('keterangan5');
        $vls->npwp = $request->input('keterangan6');
        $vls->akta = $request->input('keterangan7');
        $vls->pernyataan = $request->input('keterangan8');
        $vls->ref_bank = $request->input('keterangan9');
        $vls->spk2 = $request->input('keterangan10');
        $vls->kontrak = $request->input('keterangan11');
        $vls->surat_bayar = $request->input('keterangan12');
        $vls->faktur = $request->input('keterangan13');
        $vls->bap = $request->input('keterangan14');
        $vls->serah_terima = $request->input('keterangan15');
        $vls->penerimaan = $request->input('keterangan16');
        $vls->pembayaran = $request->input('keterangan17');
        $vls->persetujuan = $request->input('keterangan18');
        $vls->kwitansi = $request->input('keterangan19');
        $vls->bukti_transfer = $request->input('keterangan20');
        $vls->ssp_ebilling = $request->input('keterangan21');
        $vls->bukti_stor = $request->input('keterangan22');
        $vls->laporan_hasil = $request->input('keterangan23');
        $vls->surat_pengantar = $request->input('keterangan24');
        $vls->ringkasan = $request->input('keterangan25');
        $vls->sptjb = $request->input('keterangan26');
        $vls->catatan = $request->input('catatan');

        if($vls->kak == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->kak == 'ada') $ls->status = "diterima";
        if($vls->rab == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->rab == 'ada') $ls->status = "diterima";
        if($vls->hps2 == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->hps2 == 'ada') $ls->status = "diterima";
        if($vls->dok_pengadaan == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->dok_pengadaan == 'ada') $ls->status = "diterima";
        if($vls->tdp == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->tdp == 'ada') $ls->status = "diterima";
        if($vls->npwp == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->npwp == 'ada') $ls->status = "diterima";
        if($vls->akta == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->akta == 'ada') $ls->status = "diterima";
        if($vls->pernyataan == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->pernyataan == 'ada') $ls->status = "diterima";
        if($vls->ref_bank == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->ref_bank == 'ada') $ls->status = "diterima";
        if($vls->spk2 == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->spk2 == 'ada') $ls->status = "diterima";
        if($vls->kontrak == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->kontrak == 'ada') $ls->status = "diterima";
        if($vls->surat_bayar == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->surat_bayar == 'ada') $ls->status = "diterima";
        if($vls->faktur == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->faktur == 'ada') $ls->status = "diterima";
        if($vls->bap == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->bap == 'ada') $ls->status = "diterima";
        if($vls->serah_terima == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->serah_terima == 'ada') $ls->status = "diterima";
        if($vls->penerimaan == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->penerimaan == 'ada') $ls->status = "diterima";
        if($vls->pembayaran == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->pembayaran == 'ada') $ls->status = "diterima";
        if($vls->persetujuan == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->persetujuan == 'ada') $ls->status = "diterima";
        if($vls->kwitansi == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->kwitansi == 'ada') $ls->status = "diterima";
        if($vls->bukti_transfer == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->bukti_transfer == 'ada') $ls->status = "diterima";
        if($vls->ssp_ebilling == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->ssp_ebilling == 'ada') $ls->status = "diterima";
        if($vls->bukti_stor == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->bukti_stor == 'ada') $ls->status = "diterima";
        if($vls->laporan_hasil == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->laporan_hasil == 'ada') $ls->status = "diterima";
        if($vls->surat_pengantar == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->surat_pengantar == 'ada') $ls->status = "diterima";
        if($vls->ringkasan == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->ringkasan == 'ada') $ls->status = "diterima";
        if($vls->rincian == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->rincian == 'ada') $ls->status = "diterima";
        if($vls->sptjb == 'tidak') {
            $ls->status = "harus direvisi";
        }else if($vls->sptjb == 'ada') $ls->status = "diterima";
        
        $vls->save();
        $ls->save();
        
        return redirect()->to('/home')->with('success', 'Verifikasi LS berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_gu($id)
    {
        $gu = GU::find(base64_decode($id));

        $url1 = $gu->surat_permohonan;
        $url2 = $gu->buku_kas_umum;
        $url3 = $gu->laporan_pertanggungjawaban;
        $url4 = $gu->sptbl;
        $url5 = $gu->rekap_pajak_sipkd;
        $url6 = $gu->kwitansi;
        $url7 = $gu->spp_n_faktur_pajak;
        $url8 = $gu->dokumentasi;
        

        $image1=  explode(", ", $url1);
        unset($image1[count($image1)-1]);

        $image2=  explode(", ", $url2);
        unset($image2[count($image2)-1]);

        $image3=  explode(", ", $url3);
        unset($image3[count($image3)-1]);

        $image4=  explode(", ", $url4);
        unset($image4[count($image4)-1]);

        $image5=  explode(", ", $url5);
        unset($image5[count($image5)-1]);

        $image6=  explode(", ", $url6);
        unset($image6[count($image6)-1]);

        $image7=  explode(", ", $url7);
        unset($image7[count($image7)-1]);

        $image8=  explode(", ", $url8);
        unset($image8[count($image8)-1]);

        if($gu->status == 'diterima') {
            return redirect('/home')->with('error', 'Data sudah diverifikasi');
        }

        return view('resource.verifikator.form-verifikasi-gu',compact('gu', 'image1','image2','image3','image4','image5','image6','image7','image8'));
        // return $image1;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_ls($id) {
        $ls = LS::find(base64_decode($id));

        if($ls->status == 'diterima') {
            return redirect('/home')->with('error', 'Data sudah diverifikasi');
        }

        return view('resource.verifikator.form-verifikasi-ls', compact('ls'));
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
