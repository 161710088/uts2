<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    protected $table = 'makanans';
    protected $fillable = ['nama','asal','harga','bahan_pokok','jenis_makanan'];

    public $timestamps = true;
}
