<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'periodos';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'fecha_dia', 'tipo_periodo'];
}
