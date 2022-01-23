<?php

namespace App\Http\Controllers;

class PostController extends Controller 
{
    public function index()
    {
      $posts =[
          'mon super premier titre',
          'mon super deuxieme titre'  // variable stocker dans un tableau puis récupérer dans un foreach
      ];

      return view('articles')->with('posts', $posts); // 'posts' fait ref à la variable $posts dans le foreach dans articles.blade
       
    }
}