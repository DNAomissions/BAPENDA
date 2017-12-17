<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifikasiLS extends Model
{
    //
    protected $table = "verif_ls";
    protected $primaryKey = 'id_verif';
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
}
