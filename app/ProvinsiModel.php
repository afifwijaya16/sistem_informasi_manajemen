<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProvinsiModel extends Model
{
    //wil_provinsi
    protected $fillable = ['kode_wilayah', 'nama_provinsi'];
    protected $table = 'wil_provinsi';
}
