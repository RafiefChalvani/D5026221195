<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LampuController extends Controller
{
	public function index3()
	{
    	// mengambil data dari table lampu
		// $lampu = DB::table('lampu')->get();

        $lampu = DB::table('lampu')->paginate(10);

    	// mengirim data lampu ke view index2
		return view('index3',['lampu' => $lampu]);

	}

	// method untuk menampilkan view form tambah lampu
	public function tambah3()
	{

		// memanggil view tambah
		return view('tambah3');

	}

	// method untuk insert data ke table lampu
	public function store(Request $request)
	{
		// insert data ke table lampu
		DB::table('lampu')->insert([
			'merklampu' => $request->merklampu,
			'stocklampu' => $request->stocklampu,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman lampu
		return redirect('/lampu');

	}

	// method untuk edit data lampu
	public function edit($kodelampu)
	{
		// mengambil data lampu berdasarkan id yang dipilih
		$lampu = DB::table('lampu')->where('kodelampu',$kodelampu)->get();
		// passing data lampu yang didapat ke view edit.blade.php
		return view('edit',['lampu' => $lampu]);

	}

	// update data lampu
	public function update(Request $request)
	{
		// update data lampu
		DB::table('lampu')->where('kodelampu',$request->kodelampu)->update([
            'kodelampu' => $request->kodelampu,
			'merklampu' => $request->merklampu,
			'stocklampu' => $request->stocklampu,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman lampu
		return redirect('/lampu');
	}

	// method untuk hapus data lampu
	public function hapus($kodelampu)
	{
		// menghapus data lampu berdasarkan id yang dipilih
		DB::table('lampu')->where('kodelampu',$kodelampu)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/lampu');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table lampu sesuai pencarian data
		$lampu = DB::table('lampu')
		->where('merklampu','like',"%".$cari."%")
		->paginate();

    		// mengirim data lampu ke view index1
		return view('index3',['lampu' => $lampu]);

	}
    public function view($id)
    {
        // mengambil data lampu berdasarkan id yang dipilih
        $lampu = DB::table('lampu')->where('kodelampu',$kodelampu)->get();
        // passing data lampu yang didapat ke view view.blade.php
        return view('view',['lampu' => $lampu]);
    }

}
