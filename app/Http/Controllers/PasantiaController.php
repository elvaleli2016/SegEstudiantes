<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pasantia;
use App\Periodo;
use App\Docente;
use App\Usuario;
use App\Estudiante;
use App\Convenios;
use App\Empresa;

class PasantiaController extends Controller
{
  public $direccion;

  function __construct(){
    $this->direccion="app.pasantia.";
  }
// LISTA
  public function index(){
    if(session('usuario')['tipo']=="docente"){
      $pasantias=Pasantia::join('usuarios','pasantias.tutor','=','usuarios.id')
                ->where('usuarios.identificacion','=',session('usuario')['identificacion'])->get();
    }else
      $pasantias=Pasantia::all();
    foreach ($pasantias as $p) {
      $convenio=Convenios::where('id',$p->convenio)->first();
      $est=Usuario::where('id',$p->estudiante)->first();
      $tut=Usuario::where('id',$p->tutor)->first();
      $p['estudiante']=$est->nombre." ".$est->apellido;
      $p['tutor']=$tut->nombre." ".$tut->apellido;
      $p['concepto']=$convenio->concepto;
    }

    return view($this->direccion."lista",compact("pasantias"));
  }

  public function getAgregar()
  {

    $empresas=Empresa::all();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'agregar',compact('estudiantes','docentes','empresas'));
  }



// [5:59, 18/4/2017] Eliam: git init
// [5:59, 18/4/2017] Eliam: git add -A
// [6:00, 18/4/2017] Eliam: git commit -m "lo que se hizo"
// [6:00, 18/4/2017] Eliam: git push
  public function postAgregar(Request $request){

    $e=$request->estudiante;
    foreach ($e as $estudiante) {
        Pasantia::insert(
          array('titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
                'estudiante' => $estudiante,
                'convenio' => $request->convenio,
                'tutor' => $request->tutor,
                'fecha_ini' => $request->fecha_ini,
                'fecha_fin' => $request->fecha_fin)
          );
    }

    $empresas=Empresa::all();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'agregar',["msj"=>"Se registro correctamente la pasantia ".$request['titulo']],compact('estudiantes','docentes','empresas'));
  }

  public function getEditar($id){
    $pasantia=Pasantia::findOrFail($id);
    $empresas=Empresa::all();
    $convenio=Convenios::findOrFail($pasantia->convenio);
    $pasantia['empresa']=$convenio->empresa;
    $convenios=Convenios::where('empresa',$convenio->empresa)->get();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'editar',compact('estudiantes','docentes','empresas','pasantia','convenios'));
  }

  public function postEditar(Request $request){
    $pasantia=Pasantia::findOrFail($request->id);
    $pasantia->titulo=$request->titulo;
    $pasantia->descripcion=$request->descripcion;
    $pasantia->convenio=$request->convenio;
    $pasantia->estudiante=$request->estudiante;
    $pasantia->tutor=$request->tutor;
    $pasantia->fecha_ini=$request->fecha_ini;
    $pasantia->fecha_fin=$request->fecha_fin;
    $pasantia->update();
    return redirect()->back()->withErrors('FUE ACTIALIZADO CON EXITO..');
  }

  public function getEliminar($id){

  }

  public function getEntrega($id){
    $pasantia=Pasantia::findOrFail($id);
    $empresas=Empresa::all();
    $convenio=Convenios::findOrFail($pasantia->convenio);
    $pasantia['empresa']=$convenio->empresa;
    $convenios=Convenios::where('empresa',$convenio->empresa)->get();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'entrega',compact('estudiantes','docentes','empresas','pasantia','convenio'));
  }

  public function postEntrega(Request $request){
    $fileName = time().'.'.$request->file->getClientOriginalExtension();
    $request->file->move(public_path('uploads'), $fileName);

    $request['archivo']=$fileName;
    $periodo = Periodo::create($request->all());
    $pasantia=Pasantia::findOrFail($request->pasantia);
    $empresas=Empresa::all();
    $convenio=Convenios::findOrFail($pasantia->convenio);
    $pasantia['empresa']=$convenio->empresa;
    $convenios=Convenios::where('empresa',$convenio->empresa)->get();
    $estudiantes=DB::table('usuarios')->join('estudiantes','usuarios.id','=','estudiantes.id')->get();
    $docentes=DB::table('usuarios')->join('docentes','usuarios.id','=','docentes.id')->get();
    return view($this->direccion.'entrega',["msj"=>"Se registro correctamente la entrega "],compact('estudiantes','docentes','empresas','pasantia','convenio','periodo'));
  }

}
