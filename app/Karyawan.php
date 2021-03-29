<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $primaryKey = 'nik'; 
    public $incrementing = false; 
    
    protected $keyType = 'string';
    public $timestamps = false; 
    
    protected $table = "karyawan"; 
    protected $fillable=['nik','nm_karyawan','tmpt_lahir','tgl_lahir','jns_kelamin','alamat','tgl_masuk','no_rekening','gapok','jabatan','pendidikan','kd_jabatan','kd_divisi'];
}
