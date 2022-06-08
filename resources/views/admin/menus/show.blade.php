@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Informacion de Restaurante</h1>
@stop

@section('content')

<div class="card-body">
    {!! Form::model($menu, ['route' => ['admin.restaurantes.update', $menu], 'method'=> 'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'readonly',  'placeholder' => 'Ingrese la direccion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Descripcion: ') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'readonly',  'placeholder' => 'Ingrese la direccion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('ingredients', 'Ingredientes: ') !!}
            {!! Form::text('ingredients', null, ['class' => 'form-control', 'readonly',  'placeholder' => 'Ingrese la direccion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Precio: ') !!}
            {!! Form::text('price', null, ['class' => 'form-control', 'readonly',  'placeholder' => 'Ingrese la direccion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('quantity', 'Cantidad: ') !!}
            {!! Form::text('quantity', null, ['class' => 'form-control', 'readonly',  'placeholder' => 'Ingrese la direccion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('rating', 'Rating: ') !!}
            {!! Form::text('rating', null, ['class' => 'form-control', 'readonly',  'placeholder' => 'Ingrese la direccion']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status', 'Estado: ') !!}
            {!! Form::text('status', null, ['class' => 'form-control', 'readonly',  'placeholder' => 'Ingrese la direccion']) !!}
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
