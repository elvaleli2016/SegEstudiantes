<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'convenios';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'codigo', 'usuario', 'password'];
}
