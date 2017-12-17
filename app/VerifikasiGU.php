<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifikasiGU extends Model
{
    protected $table = 'verif_gu';
    protected $primaryKey = 'id_verif';
    protected $fillable = [
        'surat_permohonan',
        'buku_kas_umum',
        'laporan_pertanggungjawaban',
        'sptbl',
        'rekap_pajak_sipkd',
        'kwitansi',
        'spp_n_faktu_pajak',
        'dokumentasi'
    ];
}
