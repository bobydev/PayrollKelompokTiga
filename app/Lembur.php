<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembur extends Model
{
    //

    protected $keyType = 'string';
    public $timestamps = false;

    protected $table = "lembur";
    protected $fillable = ['nik', 'jam_lembur', 'uang_lembur', 'tgl_lembur', 'total_gaji'];
}
