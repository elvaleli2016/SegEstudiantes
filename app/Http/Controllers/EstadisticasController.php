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

}
