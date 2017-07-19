<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cuenta;


class logeo extends Controller
{
public function index()
  {
  	 $usuario = cuenta::get();
    return view('login.index')->with('usuario', $usuario);
  }

  public function show()
  {
    return 'hola';
  }
}
