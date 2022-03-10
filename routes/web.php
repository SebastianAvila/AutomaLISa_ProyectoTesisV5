<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\View;
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

// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/menu', function () {
//     return view('menu');
// });



if (View::exists('index')) {
    Route::get('/', function () {
        return view('index');
    });
} else {
    echo "La vista solicitada no exite Index"; 
}

if (View::exists('index')) {
    Route::view('/index', 'index');
} else {
    echo "La vista solicitada no exite Index"; 
}



if (View::exists('menu')) {
    Route::view('/MenuSeleccion', 'menu');
} else {

  echo "La vista solicitada no exite menu"; 
      
    
}

if (View::exists('AutomatasFinitosRepaso.AFinitosView')) {
    Route::view('/AutomatasFinitos', 'AutomatasFinitosRepaso.AFinitosView');
} else {

    echo "La vista solicitada no exite Automatas Finitos"; 
}


if (View::exists('AutomatasFinitosRepaso.AFinitosDeterministasView')) {
    Route::view('/AutomatasFinitosDeterministas', 'AutomatasFinitosRepaso.AFinitosDeterministasView');
} else {

    echo "La vista solicitada no exite Automatas Finitos"; 
}