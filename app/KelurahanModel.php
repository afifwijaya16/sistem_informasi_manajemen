<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelurahanModel extends Model
{
    //
    protected $fillable = ['kode_kelurahan', 'kecamatan_id', 'nama_kelurahan'];
    protected $table = 'wil_kelurahan';
}
