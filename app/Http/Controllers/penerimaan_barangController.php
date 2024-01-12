<?php

namespace App\Http\Controllers;

use App\Models\penerimaan_barang;
use Illuminate\Http\Request;

class penerimaan_barangController extends Controller
{
    public function index()
    {
        $penerimaan_barang = penerimaan_barang::all ();
        return response() ->json($penerimaan_barang);
    }

    public function show($id)
    {
        $penerimaan_barang = penerimaan_barang::find ($id);
        return response() ->json($penerimaan_barang);
    }

    public function store(Request $request)
    {
        penerimaan_barang::create($request->all());
        return response() ->json("Penerimaan_Barang Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $penerimaan_barang = penerimaan_barang::find ($id);
        $penerimaan_barang->update($request->all());
        return response() ->json("Penerimaan_Barang Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $penerimaan_barang = penerimaan_barang::find ($id);
        $penerimaan_barang->delete();
        return response() ->json("Penerimaan_Barang Berhasil Dihapus");
    }

}