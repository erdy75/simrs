<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    public $fillable = ['nama', 'no_hp', 'tanggal', 'alamat', 'kritik_saran'];
}
