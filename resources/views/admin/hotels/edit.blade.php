@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Hotel</h1>
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
    {!! Form::model($hotel, ['route' => ['admin.hotels.update', $hotel], 'method'=> 'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del hotel']) !!}

            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descripcion') !!}
            {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción']) !!}

            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('address', 'Direccion') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la direccion']) !!}
            {{-- {!! Form::number('credit_amount', '0.00', ['min' => '0.01', 'max' => $creditBalance, 'class' => 'text-center form-control']) !!} --}}

            @error('address')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Estado') !!}
            {!! Form::checkbox('status', 'status', ['class' => 'form-control', 'size' => '100px']) !!}

            @error('status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Actualizar hotel', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
