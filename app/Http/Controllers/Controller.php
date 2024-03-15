<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EmpleadoController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function create()
    {
       //accedr a create.blade.php de al vista de crear los empleados
        return view('empleados.create');
    }
}
