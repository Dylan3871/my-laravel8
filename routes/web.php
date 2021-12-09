<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//tutas de estudiantes
Route::get('/estudiantes', function () {
    return view('estudiantes.index');
});
//rutas para menu principal
Route::get('/views', function () {
    return view('index');
});

//rutas para salones
Route::get('/salones', function () {
    return view('salones.index');
});

//rutas para materias
Route::get('/materias', function () {
    return view('materias.index');
});



