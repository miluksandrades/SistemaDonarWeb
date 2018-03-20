<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hemocentro extends Model
{
    

    protected $table = 'hemocentros';
    protected $fillable = [
        'name',
        'email',
        'password', 
        'phone',
        'address',
        'estate', 
        'city',
        'user',
    ];

     //public $timestamps = false;
}
