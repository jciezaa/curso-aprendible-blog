<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('saludos/{nombre?}', function ($nombre = 'Invitado') {
    // return view('saludos', ['nombre' => $nombre]);
    // return view('saludos')->with(['nombre' => $nombre]);

    $html = "<h2>Contenido HTML</h2>";
    $script = "<script>alert('Hola Mundo')</script>";

    $consolas = [
        // 'Play Station 4',
        // 'Xbox One',
        // 'Wii U'
    ];

    return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
})->where('nombre', "[a-zA-Z]+")->name('saludos');

// Route::get('contactenos', ['as' => 'contacto', function () {
//     return '<h2>Sección de Contactos</h2>';
// }]);

Route::get('contactame', function () {
    return view('contactos');
})->name('contactos');
