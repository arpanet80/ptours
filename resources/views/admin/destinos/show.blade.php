@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Informacion de Habitacion</h1>
@stop

@section('content')

<div class="card-body">
    {!! Form::model($destino, ['route' => ['admin.destinos.update', $destino], 'method'=> 'put']) !!}
        <input name="user_id" type="hidden" value="{{auth()->user()->id}}">

        <div class="form-group">
            {!! Form::label('title', 'Titulo del Destino*') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}

            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('description_short', 'Descripcion corta del destino*') !!}
            {!! Form::text('description_short', null, ['class' => 'form-control']) !!}

            @error('description_short')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('description_large', 'Descripcion completa del Destino') !!}
            {!! Form::text('description_large', null, ['class' => 'form-control']) !!}

            @error('description_large')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Precio total del Destino*') !!}
            {!! Form::number('price', '25.00', ['class' => 'form-control']) !!}

            @error('price')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('duration', 'Duracion del recorrido del Destino en dias*') !!}
            {!! Form::number('duration', null, ['class' => 'form-control']) !!}

            @error('duration')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('languaje', 'Escriba en que lenguajes esta disponible el Destino*') !!}
            {!! Form::text('languaje', null, ['class' => 'form-control']) !!}

            @error('languaje')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('itinerary', 'Detalle el itinerario que se utilizara en la ejecucion del Destino*') !!}
            {!! Form::text('itinerary', null, ['class' => 'form-control']) !!}

            @error('itinerary')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('startplace', 'Lygar de inicio del recorrido*') !!}
            {!! Form::text('startplace', null, ['class' => 'form-control']) !!}

            @error('startplace')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('endplace', 'Lugar donde termina el recorrido*') !!}
            {!! Form::text('endplace', null, ['class' => 'form-control']) !!}

            @error('endplace')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('route', 'Detalle con precision la ruta que se tomara en el recorrido') !!}
            {!! Form::text('route', null, ['class' => 'form-control']) !!}

            @error('route')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('attractive', 'Describa lkos atractivos que se podra ver en el recorrido, puede separarlos por puntos') !!}
            {!! Form::text('attractive', null, ['class' => 'form-control']) !!}

            @error('attractive')
            <span class="text-danger">{{$message}}</span>
            @enderror
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
