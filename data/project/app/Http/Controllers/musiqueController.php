<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class musiqueController extends Controller
{
  public function musiques()
  {
      return view('musiques');
  }
};
