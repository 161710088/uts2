<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kabupaten extends Model
{
    protected $table = 'kabupatens';
    protected $fillable = ['nama','nama_bupati','luas','kepadatan','populasi'];

    public $timestamps = true;
}
