  <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
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
    protected $fillable = ['id', 'n_convenio', 'fecha', 'concepto', 'palabras_clave','tipo','practica','pasantia'];
}
