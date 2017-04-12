<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function index(){
      return view("login");
    }

    public function validar(Request $request){
      dd($request->all());
    }
}
