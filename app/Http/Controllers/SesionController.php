<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use App\Docente;
use App\Usuario;
use App\Empresa;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SesionController extends Controller
{
    public function index(){
      return view("login");
    }

    public function validar(Request $request){
      $user=null;
      if($request['tipo_cuenta']=="administrador"){
        $admin=Administrador::where('usuario',$request['usuario'])->where('contrasena',$request['contrasena']);
        if($admin->count()!=0){
          $user=$admin->first();
        }else{
        return redirect("/")->with("status","Usuario o contraseña incorrectos");
        }

      }else if($request['tipo_cuenta']=="docente"){
          $docente=Docente::where('usuario',$request['usuario'])->where('contrasena',$request['contrasena']);
          if($docente->count()!=0){
            $user=$docente->first();
          }else{
          return redirect("/")->with("status","Usuario o contraseña incorrectos");
          }
      }else{
        return redirect("/")->with("status","Error en los datos");
      }

      $usuario=Usuario::where('id',$user->id)->first();
      $user['nombre']=$usuario->nombre;
      $user['identificacion']=$usuario->identificacion;
      $user['telefono']=$usuario->telefono;
      $user['tipo']=$request['tipo_cuenta'];
      Session::put('usuario',$user->toArray());
      $empresas=Empresa::all();
      return view("app/empresa/lista",compact("empresas"));
    }
}
