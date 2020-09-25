<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKabupaten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wil_kabupaten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kabkot');
            $table->string('provinsi_id');
            $table->string('nama_kabkot');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wil_kabupaten');
    }
}
