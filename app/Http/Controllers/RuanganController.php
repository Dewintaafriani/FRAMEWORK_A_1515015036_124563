<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
    public function awal()

    {
 return "SELAMAT DATANG";
    }
    public function tambah()
    {
    	return $this->simpan();
}
public function simpan()
{
	$ruangan = new ruangan();
	$ruangan->tittle = '406';
	$ruangan->save();
	return "data dengan ruangan {$ruangan->tittle} telah disimpan";
}
}
