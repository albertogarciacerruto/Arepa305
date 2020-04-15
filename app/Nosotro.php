<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nosotro extends Model
{
    protected $fillable = [
        'title', 'descripcion1', 'descripcion2', 'foto1', 'red1', 'red2',
    ];
}
