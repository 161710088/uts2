<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    protected $table = 'provinsis';
    protected $fillable = ['nama','nama_gubernur','luas','kepadatan','populasi'];

    public $timestamps = true;
}
