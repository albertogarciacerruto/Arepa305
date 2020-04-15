<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'title', 'phone','email','address', 'fondo', 'horario1', 'horario2', 'horario3',
    ];
}
