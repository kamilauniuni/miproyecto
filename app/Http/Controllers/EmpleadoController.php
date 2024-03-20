<?php

namespace App\Http\Controllers;

use App\Models\datosEmpleado;
use Illuminate\Http\Request;
use App\Models\empleado; 

class EmpleadoController extends Controller
{
    //public function index()
   // {
        // Método index para mostrar una lista de empleados
    //}

    public function create()
    {
        // Método create para mostrar el formulario de creación de empleados
        return view('empleados.create');
    }

    public function store(Request $request)
   {

       //$datosEmpleado = $request->all();
      
       $datosEmpleado = request()->except('_token');
       empleado::insert($datosEmpleado);
       return response()->json($datosEmpleado);
       if($request->hasFile('Foto')){
        $datosEmpleado ['Foto']=$request->file('Foto')->store('uploads','public');
       }

    }

    public function index()
    {
        $listado['empleados'] = empleado::paginate(5);
        return view('empleados.index',$listado); 
    }

    
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect('empleados');
    }

    public function edit(empleado $empleado)
{
    return view('empleados.update');
}
    
}
