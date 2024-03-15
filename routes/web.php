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

//Route::get('/empleados',function(){
   // return view('empleados.index');
//});

//la ruta que se dirige el ng//la clase//               //lafuncion//
//Route::get ('empleado/create',[EmpleadoController::class,'create']);

Route::resource('empleado',EmpleadoController::class);