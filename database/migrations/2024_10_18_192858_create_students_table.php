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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->enum('gender', ['Male', 'Female']);
        $table->date('date_of_birth');
        $table->string('place_of_birth');
        $table->string('address');
        $table->string('phone')->nullable();
        $table->string('religion');
        $table->integer('siblings_count')->nullable();
        $table->string('status')->nullable(); // Yatim/piatu
        $table->string('language_at_home')->nullable();
        $table->string('blood_type')->nullable();
        $table->string('physical_condition')->nullable();
        
        // Data Orang Tua/Wali
        $table->string('father_name')->nullable();
        $table->string('father_birth_place')->nullable();
        $table->string('father_birth_date')->nullable();
        $table->string('father_religion')->nullable();
        $table->string('father_education')->nullable();
        $table->string('father_job')->nullable();
        $table->string('father_nationality')->nullable();
        $table->string('father_address')->nullable();
        $table->string('father_phone')->nullable();
        
        $table->string('mother_name')->nullable();
        $table->string('mother_birth_place')->nullable();
        $table->string('mother_birth_date')->nullable();
        $table->string('mother_religion')->nullable();
        $table->string('mother_education')->nullable();
        $table->string('mother_job')->nullable();
        $table->string('mother_nationality')->nullable();
        $table->string('mother_address')->nullable();
        $table->string('mother_phone')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
