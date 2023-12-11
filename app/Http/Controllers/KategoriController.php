<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{

    public function index5()
    {
        $kategori = DB::table('kategori')->get();
        return view('index5', ['kategori' => $kategori]);
    }

    public function hasil(Request $request)
    {
        $selectedKategoriId = $request->input('kategori');

        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('hasil', [
            'selectedKategoriId' => $selectedKategoriId,
        ]);
    }

}
