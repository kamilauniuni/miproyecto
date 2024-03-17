<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados', function () {
    return view('empleados.index');
});

//Ruta para mostrar el formulario de creación de empleados
Route::get('empleados/create', [EmpleadoController::class, 'create']);

// Ruta para manejar la solicitud POST del formulario de creación de empleados
Route::resource('empleado', EmpleadoController::class);
