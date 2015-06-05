@extends('template')

@section('titulo','listado de departamentos')
@stop

@section('contenido')

<table class="table">
    <thead>
        <tr>
        <th>CODIGO</th>
        <th>NOMBRE DE LA CIUDAD</th>
        <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ciudades as $ciudad)
        <tr>
        <td>{!!$ciudad->id!!}</td>
        <td>{!!$ciudad->name!!}</td>
        <td><a href="">editar</a></td>

        </tr>
        @endforeach
    </tbody>

</table>
@stop