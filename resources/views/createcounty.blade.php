@extends('template')

@section('titulo')
crear nuevo departamento
@endsection
@section('contenido')

{!! Form::open(array('url' => '/departamentos')) !!}
    <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Digite nombre de ciudad</label>
    {!! Form::text('name',null)!!}

    </div>
    <div>
    {!!Form::submit('guardar')!!}
    </div>

{!! Form::close() !!}
@endsection