<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = ['nombre', 'precio', 'categoria'];
}
