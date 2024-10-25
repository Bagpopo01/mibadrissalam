<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran')->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->date('tempat_tanggal_lahir');
            $table->string('alamat');
            $table->string('agama');
            $table->string('anak_ke');
            $table->integer('jumlah_saudara');
            $table->string('status_anak');
            $table->string('bahasa_sehari_hari');
            $table->string('golongan_darah');
            $table->string('kewarganegaraan');
            $table->string('nama_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('agama_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('alamat_ayah');
            $table->string('no_telepon_ayah');
            $table->string('nama_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('agama_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('alamat_ibu');
            $table->string('no_telepon_ibu');
            $table->string('foto_ijazah')->nullable();
            $table->string('foto_kk')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_piagam')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
};
