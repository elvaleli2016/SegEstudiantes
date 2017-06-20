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
    else if($tipo=='pasantia'){
      if($tipo_bus=='convenio'){
        $res=Pasantia::select('pasantias.titulo','est.nombre as estudiante','doc.nombre as tutor','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
        ->join('docentes','docentes.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','docentes.id')
        ->join('estudiantes','estudiantes.id','=','pasantias.estudiante')->join('usuarios as est','est.id','=','estudiantes.id')
        ->join('convenios','convenios.id','=','pasantias.convenio')
        ->join('empresas as emp','emp.id','=','convenios.empresa')
        ->where('convenios.n_convenio','=',$bus)->orWhere('convenios.representante_emp','like',"%".$bus."%")->orWhere('convenios.representante_uni','like',"%".$bus."%")->orWhere('convenios.concepto','like',"%".$bus."%")->orWhere('convenios.descripcion','like',"%".$bus."%")->orWhere('convenios.palabras_clave','like',"%".$bus."%")
        ->distinct()->get();
      }
      if($tipo_bus=='empresa'){
        $res=Pasantia::select('pasantias.titulo','est.nombre as estudiante','doc.nombre as tutor','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
        ->join('docentes','docentes.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','docentes.id')
        ->join('estudiantes','estudiantes.id','=','pasantias.estudiante')->join('usuarios as est','est.id','=','estudiantes.id')
        ->join('convenios','convenios.id','=','pasantias.convenio')
        ->join('empresas as emp','emp.id','=','convenios.empresa')
        ->where('emp.nombre','like',"%".$bus."%")->orWhere('emp.nit','=',$bus)
        ->distinct()->get();
      }
    }
    else if($tipo=='practica'){
      if($tipo_bus=='convenio'){
        $res=Practica::select('practicas.titulo','est.nombre as estudiante','doc.nombre as tutor','convenios.concepto','practicas.ano','practicas.semestre','emp.nombre as empresa')
        ->join('docentes','docentes.id','=','practicas.tutor')->join('usuarios as doc','doc.id','=','docentes.id')
        ->join('estudiantes','estudiantes.id','=','practicas.estudiante')->join('usuarios as est','est.id','=','estudiantes.id')
        ->join('convenios','convenios.id','=','practicas.convenio')
        ->join('empresas as emp','emp.id','=','convenios.empresa')
        ->where('convenios.n_convenio','=',$bus)->orWhere('convenios.representante_emp','like',"%".$bus."%")->orWhere('convenios.representante_uni','like',"%".$bus."%")->orWhere('convenios.concepto','like',"%".$bus."%")->orWhere('convenios.descripcion','like',"%".$bus."%")->orWhere('convenios.palabras_clave','like',"%".$bus."%")
        ->distinct()->get();
      }
      if($tipo_bus=='empresa'){
        $res=Practica::select('practicas.titulo','est.nombre as estudiante','doc.nombre as tutor','convenios.concepto','practicas.ano','practicas.semestre','emp.nombre as empresa')
        ->join('docentes','docentes.id','=','practicas.tutor')->join('usuarios as doc','doc.id','=','docentes.id')
        ->join('estudiantes','estudiantes.id','=','practicas.estudiante')->join('usuarios as est','est.id','=','estudiantes.id')
        ->join('convenios','convenios.id','=','practicas.convenio')
        ->join('empresas as emp','emp.id','=','convenios.empresa')
        ->where('emp.nombre','like',"%".$bus."%")->orWhere('emp.nit','=',$bus)
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
