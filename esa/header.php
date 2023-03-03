<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     return view('welcome');
});

  // Route::get('post', function () {
      // return view('post',[
     	 // 'post'=>'<h1>LISA IS DOPE</h>'
      // ]);
// });
  // Route::get('posting', function () {
     // return view('posting',[
     	// 'posting' => '<h1> hello World </h1>'
     	//  'posting'=>file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html')
     	// ]);
// });
Route::get('posst/{post}', function ($slug) {
      
     	 $post=file_get_contents(__DIR__ . "/../resources/posts/{$slug}.html");
       return view('posst',['posst'=> $post
      ]);
});

 
 
