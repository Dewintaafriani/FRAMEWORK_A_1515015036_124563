<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{

	protected $table = 'pengguna';
	protected $fillable = ['username','password'];

    public function mahasiswa()
    {
    	return $this->hasone(Mahasiswa::class);
    }
    public funcion dosen(){
    	return $this->hasOne(Dosen::class);
    }
}
