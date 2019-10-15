<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    public function libro(){
        return $this->hasMany(Libro::class);
    }
}
