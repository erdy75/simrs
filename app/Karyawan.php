<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public $fillable = ['nama_karyawan','tmp_lahir', 'tgl_lahir', 'agama', 'status','no_hp', 'id_unit_kerja','alamat'];

    public function unitkerja()
    {
    	return $this->belongsTo('App\UnitKerja', 'id');
    }

    public function cuti()
    {
    	return $this->belongsTo('App\Cuti');
    }
}
