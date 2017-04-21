<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasantia;
use App\Docente;
use App\Estudiante;
use App\Convenio;

class PasantiaController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.pasantia.";
  }
// LISTA
  public function index(){
    $pasantias=Pasantia::all();
    foreach ($pasantias as $p) {
      $convenio=Convenio::where('pasantia',$p->id)->first();
      $est=Usuario::where('id',$p->estudiante)->first();
      $tut=Usuario::where('id',$p->tutor)->first();
      $p['estudiante']=$est->nombre." ".$est->apellido;
      $p['tutor']=$tut->nombre." ".$tut->apellido;
      $p['fecha']=$convenio->fecha;
      $p['concepto']=$convenio->concepto;
    }

    return view($this->direccion."lista",compact("pasantias"));
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){

    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente la empresa"]);
  }

  public function getEditar($id){

    //return view($this->direccion."editar",compact(''));
  }

  public function postEditar(Request $request){

  }

  public function getEliminar($id){

  }
}
