<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GU extends Model
{
    //
    protected $table = 'gu';
    protected $primaryKey = 'id_gu';
    protected $fillable = [
        'kode_kegiatan',
        'id_bpp',
        'surat_permohonan',
        'buku_kas_umum',
        'laporan_pertanggungjawaban',
        'sptbl',
        'rekap_pajak_sipkd',
        'kwitansi',
        'spp_n_faktu_pajak',
        'dokumentasi',
        'status'
    ];

    public function bpp(){
        return $this->belongsTo('App\BPP','id_bpp');
    }

    public function kegiatan(){
        return $this->belongsTo('App\Kegiatan','kode_kegiatan');
    }

    public function verif() {
        return $this->belongTo('App\VerifikasiGU', 'id_verif');
    }
}
