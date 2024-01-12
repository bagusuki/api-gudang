<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class karyawan extends Model
{
    protected $primaryKey = 'ID_Karyawan';
    protected $table = 'karyawan';
    protected $fillable = [
        'ID_Karyawan', 'Nama_Karyawan', 'Jabatan', 'Nomor_Telepon','Alamat'
    ];
    protected $hidden = [];
}