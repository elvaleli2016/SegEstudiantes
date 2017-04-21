<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Practica;
use App\Docente;
use App\Estudiante;
use App\Convenio;

class PracticaController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.practica.";
  }

  public function index(){
    $practicas=Practica::all();
    foreach ($practicas as $p) {
      $convenio=Convenio::where('pasantia',$p->id)->first();
      $est=Usuario::where('id',$p->estudiante)->first();
      $tut=Usuario::where('id',$p->tutor)->first();
      $p['estudiante']=$est->nombre." ".$est->apellido;
      $p['tutor']=$tut->nombre." ".$tut->apellido;
      $p['fecha']=$convenio->fecha;
      $p['concepto']=$convenio->concepto;
    }

    return view($this->direccion."lista",compact("practicas"));
  }

  public function getAgregar()
  { $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'agregar',compact('estudiantes','docentes'));
  }

  public function postAgregar(Request $request){
    dd($request->all());
    $pracicas=new Practica();
    $practica->titulo=$request['titulo'];
    $practica->descripcion=$request['descripcion'];
    $practica->estudiante=$request['estudiante'];
    $practica->tutor=$request['tutor'];
    $parctica->save();

    $convenio=new Convenio();
    $convenio->fecha=$request['fecha'];
    $convenio->n_conveio=$request['n_convenio'];
    $convenio->concepto=$requess['concepto'];
    $convenio->palabra_clave=$request['palabra_clave'];
    $convenio->tipo="practica";
    $convenio->practica=$practica->id;
    $convenio->save();

    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente la practica"]);
  }

  public function getEditar($id){

    //return view($this->direccion."editar",compact(''));
  }

  public function postEditar(Request $request){

  }

  public function getEliminar($id){

  }
}
