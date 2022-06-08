@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Transporte</h1>
@stop

@section('content')
    <div class="card-body">
        {!! Form::open(['route' => 'admin.transportes.store']) !!}
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
                {{-- {!! Form::number('price', '25.00', ['min' => '0.01', 'max' => '999999', 'class' => 'form-control']) !!} --}}

                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('quantity', 'Cantidad disponible') !!}
                {!! Form::number('quantity', '1', ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad']) !!}

                @error('quantity')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('empresa_id', 'Empresa que ofrece el servicio') !!}
                <br/>
                {{ Form::select('empresa_id', $empresasOptions, null, ['class'=>'form-control']) }}

                @error('empresa_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Registrar Transporte', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}
    </div>
@stop
