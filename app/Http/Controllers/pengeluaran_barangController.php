<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran_barang;
use Illuminate\Http\Request;

class pengeluaran_barangController extends Controller
{
    public function index()
    {
        $pengeluaran_barang = pengeluaran_barang::all ();
        return response() ->json($pengeluaran_barang);
    }

    public function show($id)
    {
        $pengeluaran_barang = pengeluaran_barang::find ($id);
        return response() ->json($pengeluaran_barang);
    }

    public function store(Request $request)
    {
        pengeluaran_barang::create($request->all());
        return response() ->json("Pengeluaran_Barang Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $pengeluaran_barang = pengeluaran_barang::find ($id);
        $pengeluaran_barang->update($request->all());
        return response() ->json("Pengeluaran_Barang Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $pengeluaran_barang = pengeluaran_barang::find ($id);
        $pengeluaran_barang->delete();
        return response() ->json("Pengeluaran_Barang Berhasil Dihapus");
    }

}