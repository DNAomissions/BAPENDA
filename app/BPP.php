<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BPP extends Model
{
    //
    protected $table = 'bpp';
    protected $primaryKey = 'id_bpp';
    protected $fillable = ['nama_bpp','unit_kerja','alamat','no_telepon'];
    public $timestamps = false;
}
