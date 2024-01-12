<?php

namespace App\Http\Controllers;

use App\Models\pemasok;
use Illuminate\Http\Request;

class pemasokController extends Controller
{
    public function index()
    {
        $pemasok = pemasok::all ();
        return response() ->json($pemasok);
    }

    public function show($id)
    {
        $pemasok = pemasok::find ($id);
        return response() ->json($pemasok);
    }

    public function store(Request $request)
    {
        pemasok::create($request->all());
        return response() ->json("Pemasok Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $pemasok = pemasok::find ($id);
        $pemasok->update($request->all());
        return response() ->json("Pemasok Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $pemasok = pemasok::find ($id);
        $pemasok->delete();
        return response() ->json("Pemasok Berhasil Dihapus");
    }

}