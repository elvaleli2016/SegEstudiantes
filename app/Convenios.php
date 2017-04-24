<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenios extends Model
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
  protected $fillable = ['id', 'n_convenio','representante_emp','representante_uni', 'concepto','descripcion','costo','archivo', 'palabras_clave','fecha_ini','fecha_fin','empresa'];


}
