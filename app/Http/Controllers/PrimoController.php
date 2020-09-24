<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimoController extends Controller
{
  public function index() {

    $txt = 'ciao mondo';
    return view('home', compact('txt'));
  }
  
}
