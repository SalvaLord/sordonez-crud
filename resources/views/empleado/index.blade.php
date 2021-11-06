Mostrar lista de empleados :)

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->foto }}</td>
            <td>{{ $empleado->primerNombre }}</td>
            <td>{{ $empleado->segundoNombre }}</td>
            <td>{{ $empleado->primerApellido }}</td>
            <td>{{ $empleado->segundoApellido }}</td>
            <td>{{ $empleado->correo }}</td>
            <td>
                <form action="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                    @csrf
                    <input type="submit" value="Editar">
                </form> | 
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{method_field("DELETE")}}
                    <input type="submit" value="Borrar" onclick="return confirm('Seguro chucha que quieres borrar?')">
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>

</table>