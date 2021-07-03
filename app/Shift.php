<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = "shift";
    protected $fillable = ['kategori', 'jam_masuk', 'jam_keluar'];
}