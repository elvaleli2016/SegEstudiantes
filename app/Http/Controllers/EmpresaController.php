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

  public function index(){
    $empresas=Empresa::all();
    return view($this->direccion."lista",compact("empresas"));
  }

  public function getAgregar()
  {
    return view($this->direccion.'agregar');
  }

  public function postAgregar(Request $request){
    Empresa::create($request->all());
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente la empresa"]);
  }

  public function getEditar($id){
    $empresa=Empresa::where('id',$id)->first();
    return view($this->direccion."editar",compact('empresa'));
  }

  public function postEditar(Request $request){
    $empresa=Empresa::findOrFail($request->id);
    $empresa->fill($request->all());
    $empresa->save();
    return view($this->direccion.'editar',["msj"=>"Se modificado correctamente la empresa ".$request['nombre'] ],compact('empresa'));
  }


}
