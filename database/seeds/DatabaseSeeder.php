<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            // UsersTableSeeder::class,
            AgamaSeed::class,
            PekerjaanSeed::class,
            ProvinsiSeed::class,
            KabupatenSeed::class,
            KecamatanSeed::class,
            KelurahanSeed::class,
        ]);
    }
}
