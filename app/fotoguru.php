<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotoguru extends Model
{
    //
    protected $table = 'fotogurus';
    protected $fillable = ['id','nama','fotourl'];
}
