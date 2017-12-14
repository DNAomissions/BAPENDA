<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GU extends Model
{
    //
    protected $table = 'gu';
    protected $primaryKey = 'id_gu';
    protected $fillable = [
        'kode_kegiatan','id_bpp',
        'surat_permohonan',
        'buku_kas_umum',
        'laporan_pertanggungjawaban',
        'sptbl',
        'rekap_pajak_sipkd',
        'kwitansi',
        'spp_n_faktu_pajak',
        'dokumentasi',
    ];
}
