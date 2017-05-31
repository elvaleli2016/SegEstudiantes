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
    return view($this->direccion."index",compact("docentes", "estudiantes", "empresas", "convenios", "pasantias", "practicas"));
  }

}
