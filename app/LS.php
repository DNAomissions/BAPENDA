<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LS extends Model
{
    //
    protected $table = "ls";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_bpp',
        'no_spp',
        'pekerjaan',
        'perusahaan',
        'direktur',
        'kode_kegiatan',
        'dpa',
        'hps',
        'penawaran',
        'spk',
        'mp',
        'kak',
        'rab',
        'hps2',
        'dok_pengadaan',
        'tdp',
        'npwp',
        'akta',
        'pernyataan',
        'ref_bank',
        'spk2',
        'kontrak',
        'surat_bayar',
        'faktur',
        'bap',
        'serah_terima',
        'penerimaan',
        'pembayaran',
        'persetujuan',
        'kwitansi',
        'bukti_transfer',
        'ssp_ebilling',
        'bukti_stir',
        'laporan_hasil',
        'surat_pengantar',
        'ringkasan',
        'rincian',
        'sptjb',
        'created_at',
        'updated_at'
    ];

    public function kegiatan(){
        return $this->belongsTo('App\Kegiatan', 'kode_kegiatan');
    }

    public function bpp(){
        return $this->belongsTo('App\BPP', 'id_bpp');
    }
}
