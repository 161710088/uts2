<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    protected $table = 'kotas';
    protected $fillable = ['nama','nama_walkot','hari_jadi','julukan','sejarah'];

    public $timestamps = true;
}
