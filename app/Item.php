<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $fillable = ['nama','harga','satuan', 'stok','description'];
}
