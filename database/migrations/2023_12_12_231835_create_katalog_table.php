<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('katalog', function (Blueprint $table) {
            //$table->id();
            $table->timestamps();
            $table->integer('id_katalog');
            $table->string('gambar');
            $table->string('jenis');
            $table->string('harga');
            $table->unique(array('id_katalog'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalog');
    }
};
