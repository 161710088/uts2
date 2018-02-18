<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pulau extends Model
{
    protected $table = 'pulaus';
    protected $fillable = ['nama','koodinat','luas','kepulauan','puncak_tertinggi'];

    public $timestamps = true;
}
