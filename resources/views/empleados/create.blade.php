
Formulario para crear empleados

<form action="{{ url('/empleados') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="Nombres" id="Nombres" placeholder="Introduzca nombres"><br>
    <input type="text" name="PrimerApel" id="PrimerApel" placeholder="Introduzca primer apellido"><br>
    <input type="text" name="SegundoApel" id="SegundoApel" placeholder="Introduzca segundo apellido"><br>
    <input type="text" name="Correo" id="Correo" placeholder="Introduzca correo electrónico"><br>
    <input type="file" name="Foto" id="Foto"><br>
<input type="submit" value="Guardar">

</form>
