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
        Schema::table('students', function (Blueprint $table) {
            $table->string('registration_number')->after('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('registration_number');
        });
    }
    
};