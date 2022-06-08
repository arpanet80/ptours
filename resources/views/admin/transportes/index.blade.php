@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Transportes Registrados</h1>
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
            <a class="btn btn-success" href="{{route('admin.transportes.create')}}">Agregar Transporte</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Empresa_id</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($transportes as $transporte)
                        <tr>
                            <td>{{ $transporte->id }}</td>
                            <td>{{ $transporte->name }}</td>
                            <td>{{ $transporte->description }}</td>
                            <td>{{ $transporte->price }}</td>
                            <td>{{ $transporte->quantity }}</td>
                            <td>{{ $transporte->empresa_id }}</td>
                            <td>{{ $transporte->status }}</td>
                            <td width='10px'><a class="btn btn-primary btn-sm" href="{{route('admin.transportes.edit', $transporte)}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.transportes.destroy', $transporte)}}" method="POST">
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
