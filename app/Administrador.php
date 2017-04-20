<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'administradors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'usuario', 'password'];
}
