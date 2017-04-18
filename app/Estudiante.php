<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estudiantes';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'codigo']; 	
}
