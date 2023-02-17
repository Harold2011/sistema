<table class="table table-ligth">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <th>{{ $empleado->id }}</th>
            <th>{{ $empleado->Nombre }}</th>
            <th>{{ $empleado->Apellido }}</th>
            <th>
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">

            editar
            </a>    
          
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Borrar" onclick="return confirm('deseas borra')">
                </form>




            </th>
        </tr>
        @endforeach
    </tbody>
</table>