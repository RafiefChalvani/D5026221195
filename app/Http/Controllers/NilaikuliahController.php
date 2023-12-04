<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaikuliahController extends Controller
{
	public function index()
	{
    	// mengambil data dari table nilaikuliah
		// $nilaikuliah = DB::table('nilaikuliah')->get();

        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);

    	// mengirim data nilaikuliah ke view index2
		return view('index2',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah nilaikuliah
	public function tambah2()
	{

		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table nilaikuliah
	public function store(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'nrp' => $request->nrp,
			'nilai_angka' => $request->nilai_angka,
			'sks' => $request->sks
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');

	}

	// method untuk edit data nilaikuliah
	public function edit($id)
	{
		// mengambil data nilaikuliah berdasarkan id yang dipilih
		$nilaikuliah = DB::table('nilaikuliah')->where('id',$id)->get();
		// passing data nilaikuliah yang didapat ke view edit.blade.php
		return view('edit',['nilaikuliah' => $nilaikuliah]);

	}

	// update data nilaikuliah
	public function update(Request $request)
	{
		// update data nilaikuliah
		DB::table('nilaikuliah')->where('id',$request->id)->update([
			'id' => $request->id,
			'nrp' => $request->nrp,
			'nilai_angka' => $request->nilaiangka,
			'sks' => $request->sks
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');
	}

	// method untuk hapus data nilaikuliah
	public function hapus($id)
	{
		// menghapus data nilaikuliah berdasarkan id yang dipilih
		DB::table('nilaikuliah')->where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table nilaikuliah sesuai pencarian data
		$nilaikuliah = DB::table('niliakuliah')
		->where('nrp','like',"%".$cari."%")
		->paginate();

    		// mengirim data nilaikuliah ke view index1
		return view('index1',['nilaikuliah' => $nilaikuliah]);

	}
    public function view($id)
    {
        // mengambil data nilaikuliah berdasarkan id yang dipilih
        $nilaikuliah = DB::table('nilaikuliah')->where('id',$id)->get();
        // passing data nilaikuliah yang didapat ke view view.blade.php
        return view('view',['nilaikuliah' => $nilaikuliah]);
    }

}
