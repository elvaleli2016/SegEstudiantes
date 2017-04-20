<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;

class DocenteController extends Controller
{
    //



    public function getAgregar()
    {
    	return view('app.docente.agregar');
/*        if (Session::has('users')) {
            $id = Session::get('users.id');
            $user = User::where('id', $id)->first();
            $paso1 = Paso1persona::where('user_id', $id)->first();
            $laboral = Laboral::where('user_id', $id)->first();
            $empresa = Empresa::where('user_id', $id)->first();
            if ($user['tipo'] == 'usuario') return view('app.user.settings-account', compact('user', 'laboral', 'paso1'));
            else return view('app.user.settings-account', compact('user', 'laboral', 'paso1', 'empresa'));
        } else {
            return Redirect::route('app.home.index');
        }*/
    }
}
