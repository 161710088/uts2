<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pahlawan extends Model
{
    protected $table = 'pahlawans';
    protected $fillable = ['nama','tempat','tanggal_lahir','wafat','tempat_tinggal','kota_asal'];

    public $timestamps = true;
}
