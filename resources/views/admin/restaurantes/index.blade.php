@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Restaurantes</h1>
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
            <a class="btn btn-success" href="{{route('admin.restaurantes.create')}}">Agregar Restaurante</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Direccion</th>
                        <th>Estado</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($restaurantes as $restaurante)
                        <tr>
                            <td>{{ $restaurante->id }}</td>
                            <td>{{ $restaurante->name }}</td>
                            <td>{{ $restaurante->description }}</td>
                            <td>{{ $restaurante->address }}</td>
                            <td>{{ $restaurante->status }}</td>
                            <td width='8px'><a class="btn btn-primary btn-sm" href="{{route('admin.restaurantes.show', $restaurante)}}">Ver</a></td>
                            <td width='10px'><a class="btn btn-primary btn-sm" href="{{route('admin.restaurantes.edit', $restaurante)}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.restaurantes.destroy', $restaurante)}}" method="POST">
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
