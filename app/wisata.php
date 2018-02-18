<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
     protected $table = 'wisatas';
    protected $fillable = ['nama','lokasi','jenis_wisata','keunggulan','sejarah'];

    public $timestamps = true;
}
