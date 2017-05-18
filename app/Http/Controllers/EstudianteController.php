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
    foreach ($estudiantes as $d => $row) {
      $usuario=Usuario::where('id',$row->id)->where('estado','=',0)->first();
      if(count($usuario)>0){
	      $row['nombre']=$usuario->nombre;
	      $row['apellido']=$usuario->apellido;
	  }else{
        unset($estudiantes[$d]);
      }
    }

    return view($this->direccion."lista",compact("estudiantes"));
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){
    $request['estado'] = 0;
    $usuario = Usuario::create($request->all());
    $request['id'] = $usuario->id;
    $estudiante = Estudiante::create($request->all());
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente el estudiante"]);
  }

  public function getEditar($id){
    $estudiante=Estudiante::join('usuarios', 'estudiantes.id', '=', 'usuarios.id')->where('estudiantes.id',$id)->select('estudiantes.*', 'usuarios.*')->first();
    return view($this->direccion."editar",compact('estudiante'));
  }

  public function postEditar(Request $request){
    $usuario=Usuario::findOrFail($request->id);
    $usuario->fill($request->all());
    $usuario->save();
    $estudiante=Estudiante::findOrFail($request->id);
    $estudiante->fill($request->all());
    $estudiante->save();
    $estudiante = $request;
    return view($this->direccion.'editar',["msj"=>"Se modificado correctamente el estudiante ".$request['nombre'] ],compact('estudiante'));
  }

  public function postEliminar(Request $request){
    $usuario=Usuario::findOrFail($request->id);
    $usuario->estado = 1;
    $usuario->save();
  }
}
