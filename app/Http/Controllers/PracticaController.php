<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Practica;

class PracticaController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.practica.";
  }

  public function index(){
    $practicas=Practica::all();
    return view($this->direccion."lista",compact("empresas"));
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){

    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente la empresa"]);
  }

  public function getEditar($id){

    //return view($this->direccion."editar",compact(''));
  }

  public function postEditar(Request $request){

  }

  public function getEliminar($id){

  }
}
