<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_layanan');
            $table->text('deskripsi');
            $table->string('icon');
            $table->string('slug');
            $table->string('persyaratan');
            $table->string('mekanisme_prosedur');
            $table->string('waktu_penyelesaian');
            $table->string('biaya_tarif');
            $table->string('produk_pelayanan');
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
        Schema::dropIfExists('layanan');
    }
}