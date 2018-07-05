<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\musique;


class song extends Controller
{
  public function create()
 {
     return view('create');

 }
public function store(Request $request){

  $musique = new Musique();
  $musique->nameSong = $request->get('nameSong');
  $musique->author = $request->get('author');
  $musique->language = $request->get('language');
  $musique->genre = $request->get('genre');
  $musique->save();

}
}
