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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Kolom untuk judul berita
            $table->text('isi'); // Kolom untuk isi berita
            $table->string('gambar')->nullable(); // Kolom untuk menyimpan gambar (opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
