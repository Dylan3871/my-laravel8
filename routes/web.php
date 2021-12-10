<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\SalonesController;

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
//rutas de estudiantes
/*Route::get('/estudiantes', function () {
    return view('estudiantes.index');
});
Route::get('estudiantes/create',[EstudiantesController::class,'create']);*/

//con esta funcion remplazamos por mas rutas y accedemos a todo
Route::resource('estudiantes', EstudiantesController::class);



//rutas para menu principal
Route::get('/views', function () {
    return view('index');
});



//rutas para salones
/*Route::get('/salones', function () {
    return view('salones.index');
});
Route::get('salones/create',[SalonesController::class,'create']);*/

Route::resource('salones', SalonesController::class);




//rutas para materias
/*Route::get('/materias', function () {
    return view('materias.index');
});
Route::get('materias/create',[MateriaController::class,'create']);*/
Route::resource('materias', MateriaController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
