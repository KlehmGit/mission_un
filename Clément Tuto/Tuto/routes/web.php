<?php

use App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('articles',[PostController::class, 'index'] );


// Route::get('articles', function (){

//     return view('articles');
// });


// Route::get('posts', function (){

//     return response () -> json ([
//         'title' => 'mon premier super titre',
//         'description' => 'ma premiere super description'
//     ]);
   
// });