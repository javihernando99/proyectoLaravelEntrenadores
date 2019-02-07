<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $fillable=['name','avatar','slug','descripcion'];
}
