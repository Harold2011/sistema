@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif
<a href="{{ url('empleado/create')}}" class="btn btn-success" >Registrar Nuevo Empleado</a>
<br>
<br>
<table class="table table-ligth">
    <thead class="thead-light">
        <tr>
            <th>id</th>
            <th>CC</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Hora de ingreso</th>
            <th>Hora de salida</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <th>{{ $empleado->id }}</th>
            <th>{{ $empleado->cc }}</th>
            <th>{{ $empleado->Nombre }}</th>
            <th>{{ $empleado->Apellido }}</th>
            <th>{{ $empleado->horaIngreso }}</th>
            <th>{{ $empleado->horaSalida }}</th>
            <th>
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">

            editar
            </a>    
          
                <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" value="Borrar" onclick="return confirm('deseas borra')">
                </form>




            </th>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection