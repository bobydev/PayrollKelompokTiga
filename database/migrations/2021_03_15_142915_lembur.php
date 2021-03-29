<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lembur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lembur', function (Blueprint $table){
            $table->string('nik', 10);
            $table->integer('jam_lembur');
            $table->float('uang_lembur');
            $table->date('tgl_lembur');
            $table->float('total_gaji');
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
        Schema::dropIfExists('lembur');
    }
}
