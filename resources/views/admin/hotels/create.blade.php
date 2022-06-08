@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Hotel</h1>
@stop

@section('content')
    <div class="card-body">
        {!! Form::open(['route' => 'admin.hotels.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre delhotel']) !!}

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

        {{-- <div class="form-group">
            {!! Form::label('status', 'Estado') !!}
            {!! Form::checkbox('status', 'status', ['class' => 'form-control', 'size' => '100px']) !!}

            @error('status')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> --}}

            {!! Form::submit('Registrar hotel', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}
    </div>
@stop
