<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrimoModel;

class PrimoController extends Controller
{
  public function index() {

    $paganti = PrimoModel::all();
    return view('home', compact('paganti'));
  }

}
