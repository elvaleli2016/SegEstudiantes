<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;
use App\Usuario;

class DocenteController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.docente.";
  }
// LISTA
  public function index(){
    $docentes=Docente::all();
    foreach ($docentes as $d) {
      $usuario=Usuario::where('id',$d->id)->first();
      $d['nombre']=$usuario->nombre;
      $d['apellido']=$usuario->apellido;
    }

    return view($this->direccion."lista",compact("docentes"));
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){
    $usuario = Usuario::create($request->all());
    $request['id'] = $usuario->id;
    $docente = Docente::create($request->all());
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente el docente"]);
  }

  public function getEditar($id){

    //return view($this->direccion."editar",compact(''));
  }

  public function postEditar(Request $request){

  }

  public function getEliminar($id){

  }
}
