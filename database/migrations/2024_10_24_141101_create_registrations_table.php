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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->enum('gender', ['Male', 'Female']);
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->string('religion');
            $table->integer('siblings_count')->nullable();
            $table->string('status')->nullable();
            $table->string('language_at_home')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('physical_condition')->nullable();
            $table->string('father_name');
            $table->string('father_birth_place');
            $table->date('father_birth_date');
            $table->string('father_religion');
            $table->string('father_education');
            $table->string('father_job');
            $table->string('father_nationality');
            $table->string('father_address');
            $table->string('father_phone');
            $table->string('mother_name');
            $table->string('mother_birth_place');
            $table->date('mother_birth_date');
            $table->string('mother_religion');
            $table->string('mother_education');
            $table->string('mother_job');
            $table->string('mother_nationality');
            $table->string('mother_address');
            $table->string('mother_phone');
            $table->string('kode_pendaftaran');
            $table->string('nomer_pendaftaran');
            $table->string('gambar');
            $table->string('kk');
            $table->string('ktp');
            $table->string('berkaslain')->nullable();
            $table->timestamps();
    
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('custom_users')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
    
};
