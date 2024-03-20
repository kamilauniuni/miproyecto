<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Primer Apellido</th> 
            <th>Segundo Apellido</th> 
            <th>Correo</th> 
            <th>Acción</th> 
        </tr>
    </thead>

    <tbody>
        @foreach ($empleados as $datos)
        <tr>
            <td>{{ $datos->id }}</td>
            <td>{{ $datos->Foto }}</td>
            <td>{{ $datos->Nombre }}</td>
            <td>{{ $datos->PrimerApel }}</td>
            <td>{{ $datos->SegundoApel }}</td>
            <td>{{ $datos->Correo }}</td>
            <td>
                <a href="{{ url('/empleados/'.$datos->id.'/edit') }}">
                    Editar
                </a>
                <form action="{{ url('/empleados/'.$datos->id) }}" method="POST">
                    @csrf 
                    @method('DELETE') 
                    <input type="submit" onclick="return confirm('¿Deseas Eliminar?')" value="Eliminar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

   