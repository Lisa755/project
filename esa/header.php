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
<?php
$dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'dev_oretnom','password'=>'5da283a2d990e8d8512cf967df5bc0d0','last_login'=>'','date_updated'=>'','date_added'=>'');
if(!defined('base_url')) define('base_url','http://localhost/expense_budget/');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
if(!defined('dev_data')) define('dev_data',$dev_data);
if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
if(!defined('DB_NAME')) define('DB_NAME',"expense_budget_db");
?>

 
 
