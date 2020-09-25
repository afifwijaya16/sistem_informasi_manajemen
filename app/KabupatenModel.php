<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KabupatenModel extends Model
{
    protected $fillable = ['kode_kec', 'kabupaten_id', 'nama_kabkot'];
    protected $table = 'wil_kabupaten';
    
}
