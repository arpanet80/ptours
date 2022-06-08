@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Platillo de Restaurante</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Exito!!!  </strong> {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
@endif

<div class="card-body">
    {!! Form::model($menu, ['route' => ['admin.menus.update', $menu], 'method'=> 'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del platillo']) !!}

            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descripcion') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del platillo']) !!}
            {{-- {!! Form::number('credit_amount', '0.00', ['min' => '0.01', 'max' => $creditBalance, 'class' => 'text-center form-control']) !!} --}}

            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('ingredients', 'Ingredientes') !!}
            {!! Form::text('ingredients', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los ingredientes']) !!}

            @error('ingredients')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>


        <div class="form-group">
            {!! Form::label('price', 'Precio del platillo') !!}
            {!! Form::number('price', null, ['class' => 'form-control']) !!}
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

        {!! Form::submit('Actualizar Platillo', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
