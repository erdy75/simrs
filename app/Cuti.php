<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
	public $fillable = ['id_karyawan','cuti', 'hari', 'id_unit_kerja', 'keterangan'];

    public function karyawan()
    {
    	return $this->hasMany('App\Karyawan');
    }

    public function unitkerja()
    {
    	return $this->hasMany('App\UnitKerja');
    }
}
