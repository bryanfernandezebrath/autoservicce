@extends('template')

@section('titulo','listado de departamentos')
@stop

@section('contenido')

<table class="table">
    <thead>
        <tr>
        <th>CODIGO</th>
        <th>NOMBRE DEL DEPARTAMENTO</th>
        <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departamentos as $departamento)
        <tr>
        <td>{!!$departamento->id!!}</td>
        <td>{!!$departamento->name!!}</td>
        <td><a href="">editar</a></td>

        </tr>
        @endforeach
    </tbody>

</table>
@stop