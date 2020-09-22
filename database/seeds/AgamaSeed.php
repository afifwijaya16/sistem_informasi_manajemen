<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgamaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_agama')->insert(
            [
                [   'agama' => 'Islam',],
                [   'agama' => 'Kristen',],
                [   'agama' => 'Katolik',],
                [   'agama' => 'Budha', ],
                [   'agama' => 'Hindu',]
            ]
            
        );
    }
}
