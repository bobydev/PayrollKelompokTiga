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
            $table->text('stts_kawin');
            $table->integer('jml_anak');
            $table->text('alamat');
            $table->text('no_tlp');
            $table->string('pendidikan');
            $table->string('kd_jabatan');
            $table->string('kd_divisi', 5);
            $table->date('tgl_pkwtt');
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
