<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kesenian extends Model
{
    protected $table = 'kesenians';
    protected $fillable = ['nama','asal','fungsi','jenis_kesenian','sejarah'];

    public $timestamps = true;
}
