<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class matakuliahController extends Controller
{
  public function awal()  {

  return "jadwal matakuliah";
  }
  public function tambah()
{
return $this->simpan();

}
public function simpan()
{

	$matakuliah = new Matakuliah();
	$matakuliah->tittle = 'framework';
	$matakuliah->keterangan = 'selamat kamu berhasil';
	$matakuliah->save();
	return "data dengan matakuliah {$matakuliah->tittle} dengan keterangan {$matakuliah->keterangan}telah disimpan";
}
}
