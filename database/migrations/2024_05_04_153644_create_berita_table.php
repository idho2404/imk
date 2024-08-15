<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->char('id', 5)->primary();
            $table->string('judul');
            $table->char('kategori_berita_id', 4)->constrained('kategori_berita')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal_berita');
            $table->string('tumbnail_berita');
            $table->text('narasi_berita');
            $table->string('author');
            $table->integer('klik')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
};
