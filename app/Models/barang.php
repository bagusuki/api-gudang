<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class barang extends Model
{
    protected $primaryKey = 'ID_Barang';
    protected $table = 'barang';
    protected $fillable = [
        'ID_Barang', 'Nama_Barang', 'Kategori', 'Jumlah_Stok','Harga_Per_Unit'
    ];
    protected $hidden = [];
}