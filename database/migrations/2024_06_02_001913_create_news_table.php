<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('thumbnail')->nullable(); // Thumbnail (varchar)
            $table->string('judul')->nullable(); // Title (varchar)
            $table->string('keterangan')->nullable(); // Description (varchar)
            $table->string('link')->nullable(); // Link (varchar)
            $table->string('filter'); // Category (varchar)
            $table->text('vidio')->nullable();
            $table->timestamps(); // Created at & updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
