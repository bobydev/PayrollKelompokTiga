<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jabatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('jabatan', function (Blueprint $table){
            $table->string('kd_jabatan', 5)->primary();
            $table->string('nm_jabatan', 11);
            $table->string('level');
            $table->float('gapok');
            $table->float('uang_transport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('jabatan');
    }
}
