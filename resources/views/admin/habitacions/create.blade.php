@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Habitacion</h1>
@stop

@section('content')
    <div class="card-body">
        {!! Form::open(['route' => 'admin.habitacions.store']) !!}
            <div class="form-group">
                {!! Form::label('hotel_id', 'Elija el hotel que ofrece la habitacion') !!}
                <br/>
                {{ Form::select('hotel_id', $hotelOptions, null, ['class'=>'form-control']) }}

                @error('empresa_id')
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

            <div class="form-group">
                {!! Form::label('tipo_habitacion_id', 'Tipo de habitacion') !!}
                <br/>
                {{ Form::select('tipo_habitacion_id', $tipoHabOptions, null, ['class'=>'form-control']) }}

                @error('empresa_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Registrar habitacion', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}
    </div>
@stop
