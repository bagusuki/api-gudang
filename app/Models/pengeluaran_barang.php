<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class pengeluaran_barang extends Model
{
    protected $primaryKey = 'ID_Pengeluaran';
    protected $table = 'pengeluaran_barang';
    protected $fillable = [
        'ID_Pengeluaran', 'ID_Barang', 'Jumlah_Pengeluaran', 'Tanggal_Pengeluaran'
    ];
    protected $hidden = [];
}