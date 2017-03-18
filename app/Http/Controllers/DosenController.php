<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;
class DosenController extends Controller
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

	$dosen = new Dosen();
	$dosen->nama = 'dewinta';
	$dosen->nip = '1515015098';
	$dosen->alamat = 'jalan perjuangan';
	$dosen->pengguna_id= '2';
	$dosen-> save(); 
	return "data dengan dosen {$dosen->nama} telah disimpan";
}
}
