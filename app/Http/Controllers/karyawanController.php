<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index()
    {
        $karyawan = karyawan::all ();
        return response() ->json($karyawan);
    }

    public function show($id)
    {
        $karyawan = karyawan::find ($id);
        return response() ->json($karyawan);
    }

    public function store(Request $request)
    {
        karyawan::create($request->all());
        return response() ->json("Karyawan Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $karyawan = karyawan::find ($id);
        $karyawan->update($request->all());
        return response() ->json("Karyawan Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $karyawan = karyawan::find ($id);
        $karyawan->delete();
        return response() ->json("Karyawan Berhasil Dihapus");
    }

}