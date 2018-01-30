<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
     public $fillable = ['unit_kerja', 'keterangan'];

     public function karyawan()
     {
     	return $this->hasMany('App\Karyawan');
     }

     public function cuti()
     {
     	return $this->belongsToMany('App\Cuti');
     }
}
