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
    Empresa::create($request->all());
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente un la empresa"]);
  }

  public function getEditar($id){
    $empresa=Empresa::where('id',$id)->first();
    return view($this->direccion."editar",compact('empresa'));
  }
}
