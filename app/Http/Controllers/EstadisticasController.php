<?php

namespace App\Http\Controllers;
use App\Estudiante;
use App\Empresa;
use App\Docente;
use App\Convenios;
use App\Pasantia;
use App\Practica;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.estadisticas.";
  }
/**
*
**/
  public function index(){
    $docentes=Docente::count();
    $estudiantes=Estudiante::count();
    $empresas=Empresa::count();
    $convenios=Convenios::count();
    $pasantias=Pasantia::count();
    $practicas=Practica::count();

    $anio = date("Y");
    $mes = date("m");
    if($mes < 7)
      $semestre=1;
    else
      $semestre=2;

    $anio2=$anio;
    $semestre2=$semestre;
    if($semestre == 1){
      $anio2=$anio-1;
      $semestre2++;
    }

    $listapracticas=Practica::where("ano", "=", $anio)->where("semestre", "=", $semestre)->count();
    $listapracticas2=Practica::where("ano", "=", $anio2)->where("semestre", "=", $semestre2)->count();


//dd($listapracticas2."--".$listapracticas);

    return view($this->direccion."index",compact("docentes", "estudiantes", "empresas", "convenios", "pasantias", "practicas", "anio", "semestre", "listapracticas", "listapracticas2", "anio2", "semestre2"));
  }

  public function getInforme(){
    return view($this->direccion."informe");
  }

  public function postInforme(Request $request){
    $tipo_bus=$request->tipo_busqueda;
    $tipo=$request->tipo;
    $bus=$request->buscar;
    $res=null;
    if($tipo=='empresa'){
      if($tipo_bus=='empresa'){
        $res=Empresa::where('nombre','like',"%".$bus."%")->orWhere('nit','=',$bus)->orWhere('representante','like',"%".$bus."%")->distinct()->get();
      }
      if($tipo_bus=="convenio"){
        $res=Empresa::join("convenios",'convenios.empresa','=','empresas.id')->select('empresas.*')
        ->where('convenios.n_convenio','=',$bus)->orWhere('convenios.representante_emp','like',"%".$bus."%")->orWhere('convenios.representante_uni','like',"%".$bus."%")->orWhere('convenios.concepto','like',"%".$bus."%")->orWhere('convenios.descripcion','like',"%".$bus."%")->orWhere('convenios.palabras_clave','like',"%".$bus."%")
        ->distinct()->get();
        
      }
    }
    if($tipo=='pasantia'){
      if($tipo_bus=='convenio'){
        $res=Pasantia::select('pasantias.*')->join('convenios','convenios.id','=','pasantias.convenio')
        ->where('convenios.n_convenio','=',$bus)->orWhere('convenios.representante_emp','like',"%".$bus."%")->orWhere('convenios.representante_uni','like',"%".$bus."%")->orWhere('convenios.concepto','like',"%".$bus."%")->orWhere('convenios.descripcion','like',"%".$bus."%")->orWhere('convenios.palabras_clave','like',"%".$bus."%")
        ->distinct()->get();
      }
    }
    if($res!=null)
      return response()->json([
          $res->toArray()
      ],200);
    return response()->json([
        $res
    ],200);
  }

}
