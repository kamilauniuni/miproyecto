
Formulario para crear empleados

<form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('empleados.form')



</form>


  

