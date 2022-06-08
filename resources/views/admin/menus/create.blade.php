@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Menu de Restaurant</h1>
@stop

@section('content')
    <div class="card-body">
        {!! Form::open(['route' => 'admin.menus.store']) !!}
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
                {!! Form::label('restaurant_id', 'Restaurant del platillo') !!}
                <br/>
                {{ Form::select('restaurant_id', $menusOptions, null, ['class'=>'form-control']) }}

                @error('restaurant_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Registrar Platillo', ['class' => 'btn btn-primary']) !!}


        {!! Form::close() !!}
    </div>
@stop
