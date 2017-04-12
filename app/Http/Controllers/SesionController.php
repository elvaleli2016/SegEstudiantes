<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use App\Docente;
use App\Usuario;
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
        $docente=Administrador::where('usuario',$request['usuario'])->where('contrasena',$request['contrasena']);
        if($docente->count()!=0){
          $user=$docente->first();
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
      Session::put('users',$user->toArray());
      dd($request->all());
    }
}
