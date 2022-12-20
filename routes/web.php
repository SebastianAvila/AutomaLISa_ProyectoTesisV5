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

if (View::exists('AutomatasFinitosRepaso.IntroduccionAFinitosView')) {
    Route::view('/IntroduccionAutomatasFinitos', 'AutomatasFinitosRepaso.IntroduccionAFinitosView');
} else {

    echo "La vista solicitada no exite introduccion a Automatas Finitos";
}
if (View::exists('AutomatasFinitosRepaso.AFinitosDView')) {
    Route::view('/AutomatasFinitosD', 'AutomatasFinitosRepaso.AFinitosDView');
} else {

    echo "La vista solicitada no exite Automatas Finitos";
}

if (View::exists('AutomatasFinitosRepaso.AFinitosNView')) {
    Route::view('/AutomatasFinitosN', 'AutomatasFinitosRepaso.AFinitosNView');
} else {

    echo "La vista solicitada no exite Automatas Finitos No determinista";
}

if (View::exists('AutomatasFinitosRepaso.AceptacionPalabrasView')) {
    Route::view('/AceptacionPalabras', 'AutomatasFinitosRepaso.AceptacionPalabrasView');
} else {

    echo "La vista solicitada no exite Automatas Finitos No determinista falla vista";
}





if (View::exists('PreguntasAutomatas.preguntasPrueba')) {
    Route::view('/PreguntasPrueba', 'PreguntasAutomatas.preguntasPrueba');
} else {

    echo "La vista solicitada no exite Preguntas Prueba ";
}

if (View::exists('PreguntasAutomatas.Question')) {
    Route::view('/Question', 'PreguntasAutomatas.Question');
} else {

    echo "La vista solicitada no exite Preguntas Prueba ";
}


// area de animaciones

// inicio enrutamiento index
// index 1 AFN|
if (View::exists('Ejercicios.diseno-AFN')) {
    Route::view('/diseno-AFN', 'Ejercicios.diseno-AFN');
} else {

    echo "La vista solicitada no exite diseno-AFN ";
}
// index AFD
if (View::exists('Ejercicios.diseno-AFD')) {
    Route::view('/diseno-AFD', 'Ejercicios.diseno-AFD');
} else {

    echo "La vista solicitada no exite diseno-AFD ";
}

// Enrutamiento ejemplos AFN 
// ejemplo 1 
if (View::exists('Ejercicios.ejemplosAFD.ejemplo1')) {
    Route::view('/ejemplo1', 'Ejercicios.ejemplosAFD.ejemplo1');
} else {

    echo "La vista solicitada no exite ejemplo1 ";
}

if (View::exists('Ejercicios.ejemplosAFD.ejemplo2')) {
    Route::view('/ejemplo2', 'Ejercicios.ejemplosAFD.ejemplo2');
} else {

    echo "La vista solicitada no exite ejemplo2 ";
}

if (View::exists('Ejercicios.ejemplosAFD.ejemplo3')) {
    Route::view('/ejemplo3', 'Ejercicios.ejemplosAFD.ejemplo3');
} else {

    echo "La vista solicitada no exite ejemplo3 ";
    
}

if (View::exists('Ejercicios.ejemplosAFD.ejemplo4')) {
    Route::view('/ejemplo4', 'Ejercicios.ejemplosAFD.ejemplo4');
} else {

    echo "La vista solicitada no exite ejemplo4 ";
}
// area de acerca de


if (View::exists('acercade.sobreAuto')) {
    Route::view('/sobreAuto', 'acercade.sobreAuto');
} else {

    echo "La vista solicitada no exite sobreAuto";
}
