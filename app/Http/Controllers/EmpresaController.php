<?php

namespace App\Http\Controllers;
use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.empresa.";
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){
    dd($request->all());
  }
}
