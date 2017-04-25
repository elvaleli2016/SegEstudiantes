<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Practica;
use App\Docente;
use App\Estudiante;
use App\Convenios;
use App\Empresa;

class PracticaController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.practica.";
  }

  public function index(){
    $practicas=Practica::all();
    foreach ($practicas as $p) {
      $convenio=Convenios::where('id',$p->convenio)->first();
      $est=Usuario::where('id',$p->estudiante)->first();
      $tut=Usuario::where('id',$p->tutor)->first();
      $p['estudiante']=$est->nombre." ".$est->apellido;
      $p['tutor']=$tut->nombre." ".$tut->apellido;
      $p['concepto']=$convenio->concepto;
    }

    return view($this->direccion."lista",compact("practicas"));
}

  public function getAgregar()
  {
    $empresas=Empresa::all();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'agregar',compact('estudiantes','docentes','empresas'));
  }

  public function postAgregar(Request $request){
    Practica::create($request->all());

    $empresas=Empresa::all();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente la pasantia ".$request['titulo']],compact('estudiantes','docentes','empresas'));
}

  public function getEditar($id){

    //return view($this->direccion."editar",compact(''));
  }

  public function postEditar(Request $request){

  }

  public function getEliminar($id){

  }
}
