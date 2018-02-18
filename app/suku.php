<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suku extends Model
{
    protected $table = 'sukus';
    protected $fillable = ['nama','wilayah','populasi','agama','bahasa'];

    public $timestamps = true;
}
