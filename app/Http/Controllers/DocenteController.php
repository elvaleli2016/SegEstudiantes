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
    foreach ($docentes as $d => $row) {
      $usuario=Usuario::where('id',$row->id)->where('estado','=',0)->first();
      if(count($usuario)>0){
          $row['nombre']=$usuario->nombre;
          $row['apellido']=$usuario->apellido;
      }else{
        unset($docentes[$d]);
      }
    }

    return view($this->direccion."lista",compact("docentes"));
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){
    $request['estado'] = 0;
    $usuario = Usuario::create($request->all());
    $request['id'] = $usuario->id;
    $docente = Docente::create($request->all());
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente el docente"]);
  }

  public function getEditar($id){
    $docente=Docente::join('usuarios', 'docentes.id', '=', 'usuarios.id')->where('docentes.id',$id)->select('docentes.*', 'usuarios.*')->first();
    return view($this->direccion."editar",compact('docente'));
  }

  public function postEditar(Request $request){
    $usuario=Usuario::findOrFail($request->id);
    $usuario->fill($request->all());
    $usuario->save();
    $docente=Docente::findOrFail($request->id);
    $docente->fill($request->all());
    $docente->save();
    $docente = $request;
    return view($this->direccion.'editar',["msj"=>"Se modificado correctamente el docente ".$request['nombre'] ],compact('docente'));
  }

  public function postEliminar(Request $request){
    $usuario=Usuario::findOrFail($request->id);
    $usuario->estado = 1;
    $usuario->save();
  }
}
