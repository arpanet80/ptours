@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Empresa</h1>
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
    {!! Form::model($empresa, ['route' => ['admin.empresas.update', $empresa], 'method'=> 'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la empresa']) !!}

            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('address', 'Direccion') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la direccion']) !!}

            @error('address')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('fono', 'Telefono') !!}
            {!! Form::number('fono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono']) !!}
            {{-- {!! Form::number('credit_amount', '0.00', ['min' => '0.01', 'max' => $creditBalance, 'class' => 'text-center form-control']) !!} --}}

            @error('fono')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('propietary_name', 'Nombre dle propietario') !!}
            {!! Form::text('propietary_name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre del propietario']) !!}

            @error('propietary_name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        {!! Form::submit('Actualizar Empresa', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
