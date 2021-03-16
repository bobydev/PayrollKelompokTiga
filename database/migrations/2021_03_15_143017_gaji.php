<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gaji', function (Blueprint $table){
            $table->string('nik', 10);
            $table->date('tgl_gaji');
            $table->float('gapok');
            $table->float('uang_lembur');
            $table->float('jamsostek');
            $table->float('pot_lain');
            $table->string('nm_jabatan', 11);
            $table->string('nm_divisi', 20);
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
        Schema::dropIfExists('gaji');
    }
}
