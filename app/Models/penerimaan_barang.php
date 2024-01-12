<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class penerimaan_barang extends Model
{
    protected $primaryKey = 'ID_Penerimaan';
    protected $table = 'penerimaan_barang';
    protected $fillable = [
        'ID_Penerimaan', 'ID_Barang', 'Jumlah_Diterima', 'Tanggal_Penerimaan'
    ];
    protected $hidden = [];
}