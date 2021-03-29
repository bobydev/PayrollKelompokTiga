<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Karyawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('karyawan', function (Blueprint $table){
            $table->string('nik', 10)->primary();
            $table->text('nm_karyawan');
            $table->text('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->char('jns_kelamin', 1);
            $table->text('alamat');
            $table->date('tgl_masuk');
            $table->string('no_rekening');
            $table->integer('gapok');
            $table->text('jabatan');
            $table->string('pendidikan');
            $table->string('kd_jabatan');
            $table->string('kd_divisi', 5);

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
        Schema::dropIfExists('karyawan');
    }
}
