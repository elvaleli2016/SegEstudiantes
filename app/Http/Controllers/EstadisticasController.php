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
        if($request->tipo_fecha==1)
<<<<<<< HEAD
        $res=Pasantia::select('pasantias.titulo','est.identificacion as est_identificacion','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as dir_nombre','doc.apellido as dir_apellido','tut.nombre as tut_nombre','tut.apellido as tut_apellido','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
        ->join('docentes as doc1','doc1.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
        ->join('tutors as tut1','tut1.id','=','pasantias.tutor_emp')->join('usuarios as tut','tut.id','=','tut1.id')
=======
        $res=Pasantia::select('pasantias.titulo','est.identificacion as est_identificacion','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as dir_nombre','doc.apellido as dir_apellido','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
        ->join('docentes as doc1','doc1.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
>>>>>>> 13aaa0c36e90a4dcc8714b137453c01e03ebc8ed
        ->join('estudiantes as est1','est1.id','=','pasantias.estudiante')->join('usuarios as est','est.id','=','est1.id')
        ->join('convenios','convenios.id','=','pasantias.convenio')
        ->join('empresas as emp','emp.id','=','convenios.empresa')
        ->where('convenios.n_convenio','=',$bus)->where('pasantias.fecha_ini','>=',$request->fecha_ini)->where('pasantias.fecha_fin','<=',$request->fecha_fin)
        ->orWhere('convenios.concepto','like',"%".$bus."%")->where('pasantias.fecha_ini','>=',$request->fecha_ini)->where('pasantias.fecha_fin','<=',$request->fecha_fin)
        ->orWhere('convenios.palabras_clave','like',"%".$bus."%")->where('pasantias.fecha_ini','>=',$request->fecha_ini)->where('pasantias.fecha_fin','<=',$request->fecha_fin)
        ->distinct()->get();
<<<<<<< HEAD
        else $res=Pasantia::select('pasantias.titulo','est.identificacion as est_identificacion','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as dir_nombre','doc.apellido as dir_apellido','tut.nombre as tut_nombre','tut.apellido as tut_apellido','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
              ->join('docentes as doc1','doc1.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
            ->join('tutors as tut1','tut1.id','=','pasantias.tutor_emp')->join('usuarios as tut','tut.id','=','tut1.id')
=======
        else $res=Pasantia::select('pasantias.titulo','est.identificacion as est_identificacion','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as dir_nombre','doc.apellido as dir_apellido','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
              ->join('docentes as doc1','doc1.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
>>>>>>> 13aaa0c36e90a4dcc8714b137453c01e03ebc8ed
              ->join('estudiantes as est1','est1.id','=','pasantias.estudiante')->join('usuarios as est','est.id','=','est1.id')
              ->join('convenios','convenios.id','=','pasantias.convenio')
              ->join('empresas as emp','emp.id','=','convenios.empresa')
              ->where('convenios.n_convenio','=',$bus)
              ->orWhere('convenios.concepto','like',"%".$bus."%")
              ->orWhere('convenios.palabras_clave','like',"%".$bus."%")
              ->distinct()->get();
        
      }
      if($tipo_bus=='empresa'){
        if($request->tipo_fecha==1)
<<<<<<< HEAD
        $res=Pasantia::select('pasantias.titulo','est.identificacion as est_identificacion','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as dir_nombre','doc.apellido as dir_apellido','tut.nombre as tut_nombre','tut.apellido as tut_apellido','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
        ->join('docentes as doc1','doc1.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
            ->join('tutors as tut1','tut1.id','=','pasantias.tutor_emp')->join('usuarios as tut','tut.id','=','tut1.id')
=======
        $res=Pasantia::select('pasantias.titulo','est.identificacion as est_identificacion','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as dir_nombre','doc.apellido as dir_apellido','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
        ->join('docentes as doc1','doc1.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
>>>>>>> 13aaa0c36e90a4dcc8714b137453c01e03ebc8ed
        ->join('estudiantes as est1','est1.id','=','pasantias.estudiante')->join('usuarios as est','est.id','=','est1.id')
        ->join('convenios','convenios.id','=','pasantias.convenio')
        ->join('empresas as emp','emp.id','=','convenios.empresa')
        ->where('emp.nombre','like',"%".$bus."%")->where('pasantias.fecha_ini','>=',$request->fecha_ini)->where('pasantias.fecha_fin','<=',$request->fecha_fin)
        ->orWhere('emp.nit','=',$bus)->where('pasantias.fecha_ini','>=',$request->fecha_ini)->where('pasantias.fecha_fin','<=',$request->fecha_fin)
        ->distinct()->get();
<<<<<<< HEAD
        else  $res=Pasantia::select('pasantias.titulo','est.identificacion as est_identificacion','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as dir_nombre','doc.apellido as dir_apellido','tut.nombre as tut_nombre','tut.apellido as tut_apellido','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
                ->join('docentes as doc1','doc1.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
            ->join('tutors as tut1','tut1.id','=','pasantias.tutor_emp')->join('usuarios as tut','tut.id','=','tut1.id')
=======
        else  $res=Pasantia::select('pasantias.titulo','est.identificacion as est_identificacion','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as dir_nombre','doc.apellido as dir_apellido','convenios.concepto','pasantias.fecha_ini','pasantias.fecha_fin','emp.nombre as empresa')
                ->join('docentes as doc1','doc1.id','=','pasantias.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
>>>>>>> 13aaa0c36e90a4dcc8714b137453c01e03ebc8ed
                ->join('estudiantes as est1','est1.id','=','pasantias.estudiante')->join('usuarios as est','est.id','=','est1.id')
                ->join('convenios','convenios.id','=','pasantias.convenio')
                ->join('empresas as emp','emp.id','=','convenios.empresa')
                ->where('emp.nombre','like',"%".$bus."%")
                ->orWhere('emp.nit','=',$bus)
                ->distinct()->get();
      }
    }
    else if($tipo=='practica'){
      if($tipo_bus=='convenio'){
        $res=Practica::select('practicas.titulo','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as tutor','convenios.concepto','practicas.ano','practicas.semestre','emp.nombre as empresa')
        ->join('docentes as doc1','doc1.id','=','practicas.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
<<<<<<< HEAD
        ->join('estudiantes as est1','est1.id','=','practicas.estudiante')->join('usuarios as est','est.id','=','est1.id')
=======
        ->join('estudiantes as est1','est1.id','=','pasantias.estudiante')->join('usuarios as est','est.id','=','est1.id')
>>>>>>> 13aaa0c36e90a4dcc8714b137453c01e03ebc8ed
        ->join('convenios','convenios.id','=','practicas.convenio')
        ->join('empresas as emp','emp.id','=','convenios.empresa')
        ->where('convenios.n_convenio','=',$bus)->orWhere('convenios.representante_emp','like',"%".$bus."%")->orWhere('convenios.representante_uni','like',"%".$bus."%")->orWhere('convenios.concepto','like',"%".$bus."%")->orWhere('convenios.descripcion','like',"%".$bus."%")->orWhere('convenios.palabras_clave','like',"%".$bus."%")
        ->distinct()->get();
      }
      if($tipo_bus=='empresa'){
        $res=Practica::select('practicas.titulo','est1.codigo as est_codigo','est.nombre as est_nombre','est.apellido as est_apellido','doc.nombre as tutor','convenios.concepto','practicas.ano','practicas.semestre','emp.nombre as empresa')
        ->join('docentes as doc1','doc1.id','=','practicas.tutor')->join('usuarios as doc','doc.id','=','doc1.id')
<<<<<<< HEAD
        ->join('estudiantes as est1','est1.id','=','practicas.estudiante')->join('usuarios as est','est.id','=','est1.id')
=======
        ->join('estudiantes as est1','est1.id','=','pasantias.estudiante')->join('usuarios as est','est.id','=','est1.id')
>>>>>>> 13aaa0c36e90a4dcc8714b137453c01e03ebc8ed
        ->join('convenios','convenios.id','=','practicas.convenio')
        ->join('empresas as emp','emp.id','=','convenios.empresa')
        ->where('emp.nombre','like',"%".$bus."%")->orWhere('emp.nit','=',$bus)
        ->distinct()->get();
      }
<<<<<<< HEAD
    }else if($tipo=='convenio'){
      if($tipo_bus=='convenio'){
        $res=Convenios::join("empresas",'convenios.empresa','=','empresas.id')->select('convenios.*','empresas.nombre as nom_empresa')->where('nombre','like',"%".$bus."%")->orWhere('n_convenio','=',$bus)->orWhere('descripcion','like',"%".$bus."%")->distinct()->get();
      }
=======
>>>>>>> 13aaa0c36e90a4dcc8714b137453c01e03ebc8ed
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
