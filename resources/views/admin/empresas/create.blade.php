@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Empresa</h1>
@stop

@section('content')
    <div class="card-body">
        {!! Form::open(['route' => 'admin.empresas.store']) !!}
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

            {!! Form::submit('Registrar Empresa', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}
    </div>
@stop
