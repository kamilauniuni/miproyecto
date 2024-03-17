<?php

namespace App\Http\Controllers;

use App\Models\datosEmpleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        // Método index para mostrar una lista de empleados
    }

    public function create()
    {
        // Método create para mostrar el formulario de creación de empleados
        return view('empleados.create');
    }

    public function store(Request $request)
   {

        $datosEmpleado = $request()->all();
       return response()->json($datosEmpleado);

    }

}
