<?php

use Illuminate\Database\Seeder;

class ProvinsiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('wil_provinsi')->insert(
            [
                [ 'kode_wilayah' => '11',  'nama_provinsi' => 'ACEH' ],
                [ 'kode_wilayah' => '12',  'nama_provinsi' => 'SUMATERA UTARA' ],
                [ 'kode_wilayah' => '13',  'nama_provinsi' => 'SUMATERA BARAT' ],
                [ 'kode_wilayah' => '14',  'nama_provinsi' => 'RIAU' ],
                [ 'kode_wilayah' => '15',  'nama_provinsi' => 'JAMBI' ],
                [ 'kode_wilayah' => '16',  'nama_provinsi' => 'SUMATERA SELATAN' ],
                [ 'kode_wilayah' => '17',  'nama_provinsi' => 'BENGKULU' ],
                [ 'kode_wilayah' => '18',  'nama_provinsi' => 'LAMPUNG' ],
                [ 'kode_wilayah' => '19',  'nama_provinsi' => 'KEPULAUAN BANGKA BELITUNG' ],
                [ 'kode_wilayah' =>  '21', 'nama_provinsi' =>  'KEPULAUAN RIAU' ],
                [ 'kode_wilayah' =>  '31', 'nama_provinsi' =>  'DKI JAKARTA' ],
                [ 'kode_wilayah' =>  '32', 'nama_provinsi' =>  'JAWA BARAT' ],
                [ 'kode_wilayah' =>  '33', 'nama_provinsi' =>  'JAWA TENGAH' ],
                [ 'kode_wilayah' =>  '34', 'nama_provinsi' =>  'DI YOGYAKARTA' ],
                [ 'kode_wilayah' =>  '35', 'nama_provinsi' =>  'JAWA TIMUR' ],
                [ 'kode_wilayah' =>  '36', 'nama_provinsi' =>  'BANTEN' ],
                [ 'kode_wilayah' =>  '51', 'nama_provinsi' =>  'BALI' ],
                [ 'kode_wilayah' =>  '52', 'nama_provinsi' =>  'NUSA TENGGARA BARAT' ],
                [ 'kode_wilayah' =>  '53', 'nama_provinsi' =>  'NUSA TENGGARA TIMUR' ],
                [ 'kode_wilayah' =>  '61', 'nama_provinsi' =>  'KALIMANTAN BARAT' ],
                [ 'kode_wilayah' =>  '62', 'nama_provinsi' =>  'KALIMANTAN TENGAH' ],
                [ 'kode_wilayah' =>  '63', 'nama_provinsi' =>  'KALIMANTAN SELATAN' ],
                [ 'kode_wilayah' =>  '64', 'nama_provinsi' =>  'KALIMANTAN TIMUR' ],
                [ 'kode_wilayah' =>  '65', 'nama_provinsi' =>  'KALIMANTAN UTARA' ],
                [ 'kode_wilayah' =>  '71', 'nama_provinsi' =>  'SULAWESI UTARA' ],
                [ 'kode_wilayah' =>  '72', 'nama_provinsi' =>  'SULAWESI TENGAH' ],
                [ 'kode_wilayah' =>  '73', 'nama_provinsi' =>  'SULAWESI SELATAN' ],
                [ 'kode_wilayah' =>  '74', 'nama_provinsi' =>  'SULAWESI TENGGARA' ],
                [ 'kode_wilayah' =>  '75', 'nama_provinsi' =>  'GORONTALO' ],
                [ 'kode_wilayah' =>  '76', 'nama_provinsi' =>  'SULAWESI BARAT' ],
                [ 'kode_wilayah' =>  '81', 'nama_provinsi' =>  'MALUKU' ],
                [ 'kode_wilayah' =>  '82', 'nama_provinsi' =>  'MALUKU UTARA' ],
                [ 'kode_wilayah' =>  '91', 'nama_provinsi' =>  'PAPUA BARAT' ],
                [ 'kode_wilayah' =>  '94', 'nama_provinsi' =>  'PAPUA' ],
            ]
            
        );
        
    }
}
