<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class senjata extends Model
{
    protected $table = 'senjatas';
    protected $fillable = ['nama','asal','material','fungsi','sejarah'];

    public $timestamps = true;
}
