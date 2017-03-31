<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    public function pengguna(){
    return $this->belongsTo(Prngguna::class);
}
	public function dosen_matakuliah()
	{
		return $this->hasMany(DosenMatakuliah::class);

	}
}

