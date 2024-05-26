<?php
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',function(){
//     return view('welcome');
// });

// Route::post('/post',function(){
//     echo "post testing";
// });

// Route::patch('/',function(){
//  echo "patch method";
// });

/// pass data and through route
// Route::get('/post/{name?}/',function($name=null){
//     $data = compact('name');
//     return view('testing')->with($data);
// });

// Route::get('query/{name}',function(){
//     return view('testing');
// });
// Route::get('query/{required}',function($required){
//     $required = compact('required');
//     return view('testing')->with($required);
// });
// Route::get('basic-to-pass-value/{optional?}',function($optional = null){
//     $demo = "<h1>Deocde data</h1>";
//     $optional = compact('optional', 'demo');
//     return view('basic-to-pass-value')->with($optional);
// });



// Blade Templating
// Route:: get('/',function(){
//     return view('home');
// });
// Route:: get('/about',function(){
//     return view('about');
// });

//


// Controller
// Route:: get('/',[BasicController::class,'index']); //first way
// Route:: get('/','@BasicController@index'); //second way error


//singleAction controller

// Route:: get('about',SingleActionController::class);


