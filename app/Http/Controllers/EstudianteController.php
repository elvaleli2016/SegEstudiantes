<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Usuario;

class EstudianteController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.estudiante.";
  }
// LISTA
  public function index(){
    $estudiantes=Estudiante::all();
    foreach ($estudiantes as $d) {
      $usuario=Usuario::where('id',$d->id)->first();
      $d['nombre']=$usuario->nombre;
      $d['apellido']=$usuario->apellido;
    }

    return view($this->direccion."lista",compact("estudiantes"));
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){
    $usuario = Usuario::create($request->all());
    $request['id'] = $usuario->id;
    $estudiante = Estudiante::create($request->all());
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente el estudiante"]);
  }

  public function getEditar($id){

    //return view($this->direccion."editar",compact(''));
  }

  public function postEditar(Request $request){

  }

  public function getEliminar($id){

  }
}
