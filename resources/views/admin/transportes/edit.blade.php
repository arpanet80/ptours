@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Transporte</h1>
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
    {!! Form::model($transporte, ['route' => ['admin.transportes.update', $transporte], 'method'=> 'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre del servicio') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}

            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descripcion del servicio') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion']) !!}

            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Precio del servicio') !!}
            {!! Form::number('price', '25.00', ['class' => 'form-control']) !!}

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

        {!! Form::submit('Actualizar Transporte', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
