
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $modo }} Empleado</h1>
    <div class="form-grop">
    <label for="">Cedula</label>
    <input type="text" name="cc" value="{{isset( $empleado->cc)  ?$empleado->cc:''}}" id="cc">
    <br>
    <label for="">Nombre</label>
    <input type="text" name="Nombre" value="{{isset( $empleado->Nombre)  ?$empleado->Nombre:''}}"id="Nombre">
    <br>
    <label for="">Apellido</label>
    <input type="text" name="Apellido" value="{{isset( $empleado->Apellido) ?$empleado->Apellido:'' }}" id="Apellido">
    <br>
    <label for="">Hora de entrada</label>
    <input type="text" name="horaIngreso" value="{{isset( $empleado->horaIngreso ) ?$empleado->horaIngreso :'' }}" id="horaIngreso">
    <br>
    <label for="">Hora de salida</label>
    <input type="text" name="horaSalida" value="{{isset( $empleado-> horaSalida ) ?$empleado-> horaSalida :'' }}" id="horaSalida">
    <br>
    <input type="submit" value="{{$modo}}">
    <br>
    <a href="{{ url('empleado/')}}">Regresar</a>
    </div>
    </div>
@endsection


