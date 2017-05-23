<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Practica;;
use App\Periodo;
use App\Docente;
use App\Usuario;
use App\Estudiante;
use App\Convenios;
use App\Empresa;

class PracticaController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.practica.";
  }

  public function index(){
    $practicas=Practica::all();
    foreach ($practicas as $p) {
      $convenio=Convenios::where('id',$p->convenio)->first();
      $est=Usuario::where('id',$p->estudiante)->first();
      $tut=Usuario::where('id',$p->tutor)->first();
      $p['estudiante']=$est->nombre." ".$est->apellido;
      $p['tutor']=$tut->nombre." ".$tut->apellido;
      $p['concepto']=$convenio->concepto;
    }

    return view($this->direccion."lista",compact("practicas"));
}

  public function getAgregar()
  {
    $empresas=Empresa::all();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'agregar',compact('estudiantes','docentes','empresas'));
  }

  public function postAgregar(Request $request){
    $e=$request->estudiante;
    foreach ($e as $estudiante) {
        Practica::insert(
          array('titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'estudiante' => $estudiante,
                'tutor' => $request->tutor,
                'convenio' => $request->convenio,
                'ano' => $request->ano,
                'semestre' => $request->semestre)
                //'fecha_ini' => $request->fecha_ini,
                //'fecha_fin' => $request->fecha_fin)
          );
    }

    $empresas=Empresa::all();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente la pasantia ".$request['titulo']],compact('estudiantes','docentes','empresas'));
}

  public function getEditar($id){
    $practica=Practica::findOrFail($id);
    $empresas=Empresa::all();
    $convenio=Convenios::findOrFail($practica->convenio);
    $ractica['empresa']=$convenio->empresa;
    $convenios=Convenios::where('empresa',$convenio->empresa)->get();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'editar',compact('estudiantes','docentes','empresas','practica','convenios'));
  }

  public function postEditar(Request $request){
    $practica=Practica::findOrFail($request->id);
    $practica->titulo=$request->titulo;
    $practica->descripcion=$request->descripcion;
    $practica->convenio=$request->convenio;
    $practica->estudiante=$request->estudiante;
    $practica->tutor=$request->tutor;
    $practica->ano=$request->ano;
    $practica->semestre=$request->semestre;
    $practica->update();
    return redirect()->back()->withErrors('FUE ACTIALIZADO CON EXITO..');
  }

  public function getEliminar($id){

  }

  public function getEntrega($id){
    $practica=Practica::findOrFail($id);
    $empresas=Empresa::all();
    $convenio=Convenios::findOrFail($practica->convenio);
    $practica['empresa']=$convenio->empresa;
    $convenios=Convenios::where('empresa',$convenio->empresa)->get();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'entrega',compact('estudiantes','docentes','empresas','practica','convenio'));
  }

  public function postEntrega(Request $request){
    $fileName = time().'.'.$request->file->getClientOriginalExtension();
    $request->file->move(public_path('uploads'), $fileName);

    $request['archivo']=$fileName;
    $periodo = Periodo::create($request->all());
    $practica=Practica::findOrFail($request->practica);
    $empresas=Empresa::all();
    $convenio=Convenios::findOrFail($practica->convenio);
    $practica['empresa']=$convenio->empresa;
    $convenios=Convenios::where('empresa',$convenio->empresa)->get();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'entrega',["msj"=>"Se registro correctamente la entrega "],compact('estudiantes','docentes','empresas','practica','convenio','periodo'));
  }

}
