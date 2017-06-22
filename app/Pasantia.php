<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasantia extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pasantias';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','titulo','descripcion','estudiante','tutor','convenio','fecha_ini','fecha_fin','tutor_emp'];
}
