@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Informacion de Habitacion</h1>
@stop

@section('content')

<div class="card-body">
    {!! Form::model($habitacion, ['route' => ['admin.habitacions.update', $habitacion], 'method'=> 'put']) !!}
        <div class="form-group">
            {!! Form::label('description', 'Descripcion') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción']) !!}

            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Precio/Noche de la habitacion') !!}
            {!! Form::number('price', '25.00', ['class' => 'form-control']) !!}
            {{-- {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio']) !!} --}}

            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('quantity', 'Cantidad disponible') !!}
            {!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad']) !!}

            @error('quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <a href="{{ url()->previous() }}" class="btn btn-success">Volver</a>

    {!! Form::close() !!}
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
