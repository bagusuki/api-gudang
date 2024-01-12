<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class pemasok extends Model
{
    protected $primaryKey = 'ID_Pemasok';
    protected $table = 'pemasok';
    protected $fillable = [
        'ID_Pemasok', 'Nama_Pemasok', 'Alamat', 'Nomor_Telepon'
    ];
    protected $hidden = [];
}