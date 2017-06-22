<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutor;
use App\Usuario;

class TutorController extends Controller
{
    public $direccion;

  function __construct(){
    $this->direccion="app.tutor.";
  }
// LISTA
  public function index(){
    $tutors=Tutor::all();
    foreach ($tutors as $d => $row) {
      $usuario=Usuario::where('id',$row->id)->where('estado','=',0)->first();
      if(count($usuario)>0){
	      $row['nombre']=$usuario->nombre;
	      $row['apellido']=$usuario->apellido;
          $row['identificacion']=$usuario->identificacion;
	  }else{
        unset($tutors[$d]);
      }
    }

    return view($this->direccion."lista",compact("tutors"));
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){
    $request['estado'] = 0;
    $usuario = Usuario::create($request->all());
    $request['id'] = $usuario->id;
    $tutor = Tutor::create($request->all());
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente el tutor"]);
  }

  public function getEditar($id){
    $tutor=Tutor::join('usuarios', 'tutors.id', '=', 'usuarios.id')->where('tutors.id',$id)->select('tutors.*', 'usuarios.*')->first();
    return view($this->direccion."editar",compact('tutor'));
  }

  public function postEditar(Request $request){
    $usuario=Usuario::findOrFail($request->id);
    $usuario->fill($request->all());
    $usuario->save();
    $tutor = $request;
    return view($this->direccion.'editar',["msj"=>"Se modificado correctamente el tutor ".$request['nombre'] ],compact('tutor'));
  }

  public function postEliminar(Request $request){
    $usuario=Usuario::findOrFail($request->id);
    $usuario->estado = 1;
    $usuario->save();
  }
}
