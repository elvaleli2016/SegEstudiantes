<?php

namespace App\Http\Controllers;

use App\Convenio;
use App\Empresa;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.convenio.";
  }
  public function index(){
    $convenios=Convenio::all();
    //$convenios=Empresa::all();
    return view($this->direccion."lista",compact("convenios"));
  }

  public function getAgregar(){

  }

  public function postAgregar(Request $request){

    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente el convenio"]);
  }

  public function getEditar($id){

    //return view($this->direccion."editar",compact(''));
  }

  public function postEditar(Request $request){

  }

  public function getEliminar($id){

  }
}
