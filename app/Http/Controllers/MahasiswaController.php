<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
     public function awal() {

  return "ciwiwi";
  }
  public function tambah()
{
return $this->simpan();

}
public function simpan()
{

	$mahasiswa = new Mahasiswa();
	$mahasiswa->nama = 'dewinta';
	$mahasiswa->nip = '1515015098';
	$mahasiswa->alamat = 'jalan perjuangan';
	$mahasiswa->pengguna_id = '2';
	$mahasiswa->save();
	return "data dengan mahasiswa {$mahasiswa->nama} telah disimpan";
}
}


