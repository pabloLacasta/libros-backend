<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    // protected $fillable = ['nombre', 'precio', 'categoria'];

    public function editorial(){
        return $this->hasOne(Editorial::class);
    }
}
