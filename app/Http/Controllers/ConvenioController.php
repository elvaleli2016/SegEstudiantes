<?php

namespace App\Http\Controllers;

use App\Convenios;
use App\Empresa;
use Illuminate\Http\Request;

class ConvenioController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.convenio.";
  }
  public function index(){
    $convenios=Convenios::orderBy('empresa')->get();
    foreach($convenios as $d){
      $empresa=Empresa::where('id',$d->empresa)->first();
      $d['empresa']=$empresa->nombre;
    }
    //$convenios=Empresa::all();
    return view($this->direccion."lista",compact("convenios"));
  }

  public function getAgregar(){
    $empresas=Empresa::all();
    return view($this->direccion.'agregar',compact('empresas'));
  }

  public function postAgregar(Request $request){
  	

    $fileName = time().'.'.$request->file->getClientOriginalExtension();
    $request->file->move(public_path('uploads'), $fileName);

    $request['archivo']=$fileName;
    Convenios::create($request->all());

    $empresas=Empresa::all();
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente el convenio"],compact('empresas'));
  }


  public function listaEmpresa(Request $request){
    $id=$request['id'];
    $convenios=Convenios::where('empresa',$id)->get();
    return response()->json([
        "msg"=>"Success",
        "convenio"=>$convenios
    ],200);
  }
  public function getEditar($id){

    //return view($this->direccion."editar",compact(''));
  }

  public function postEditar(Request $request){

  }

  public function getEliminar($id){

  }
}
