<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'practicas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','titulo','descripcion','estudiante','tutor'];
}
