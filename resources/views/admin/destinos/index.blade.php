@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Destinos</h1>
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
    <div class="card">
    <div class="card-header">
        <a class="btn btn-success" href="{{route('admin.destinos.create')}}">Agregar Destino</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripcion corta</th>
                    <th>Precio</th>
                    <th>Duracion.</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Estado</th>
                    <th colspan="3"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($destinos as $destino)
                    <tr>
                        <td>{{ $destino->id }}</td>
                        <td>{{ $destino->title }}</td>
                        <td>{{ $destino->description_short }}</td>
                        <td>{{ $destino->price }}</td>
                        <td>{{ $destino->duration }}</td>
                        <td>{{ $destino->startplace }}</td>
                        <td>{{ $destino->endplace }}</td>
                        <td>{{ $destino->status }}</td>
                        <td width='8px'><a class="btn btn-primary btn-sm" href="{{route('admin.destinos.show', $destino)}}">Ver</a></td>
                        <td width='10px'><a class="btn btn-primary btn-sm" href="{{route('admin.destinos.edit', $destino)}}">Editar</a></td>
                        <td width='10px'>
                            <form action="{{route('admin.destinos.destroy', $destino)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@stop
