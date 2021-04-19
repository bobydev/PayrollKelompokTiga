<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    //
    protected $table = "absensi";
    protected $fillable = ['nik', 'tgl_masuk', 'jam_masuk', 'jam_keluar'];
}
