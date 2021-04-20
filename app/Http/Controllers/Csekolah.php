<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Csekolah extends Controller
{
   	
   	public function inputaan()
   	{
		return view('inputan');
	}
	public function add(Request $request)
	{
		DB::table('tb_beranda')->insert([
		'nama' => $request->nama,
 		'gambar' => $request->gambar,
 		'Deskripsi' => $request->script,
 		]);
 		return redirect('/beranda');
 	}
 	public function add(Request $request){
 		
 	}
 	//public function beranda(){
 		//return view('beranda');
 	//}
 	public function beranda()
    {
    	// mengambil data dari table pegawai
    	$input = DB::table('tb_beranda')->get();
 
    	// mengirim data pegawai ke view index
    	return view('beranda',['tb_beranda' => $input]);
 
    }

  public function daftar(Request $request){
    $daftar = new siswa;
    $daftar->nama = $request->nama;
    $daftar->jurusan = $request->jurusan;
    $daftar->alamat = $request->alamat;
    $daftar->save();
  }
  
}
