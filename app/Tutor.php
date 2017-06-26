<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tutors';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id']; 
}
