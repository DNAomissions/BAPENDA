<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    //
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';
    protected $fillable = ['kode_kegiatan','program_kegiatan'];
    public $timestamps = false;
}
