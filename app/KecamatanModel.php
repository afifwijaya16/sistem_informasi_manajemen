<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KecamatanModel extends Model
{
    //
    protected $fillable = ['kode_kec', 'kabupaten_id', 'nama_kecamatan'];
    protected $table = 'wil_kecamatan';
}
