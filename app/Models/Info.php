<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'Info';
    
    protected $fillable = [
        'titulo', 'texto'
    ];
}
