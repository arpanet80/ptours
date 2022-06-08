@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Habitaciones</h1>
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
            <a class="btn btn-success" href="{{route('admin.habitacions.create')}}">Agregar Habitacione</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad Disp.</th>
                        <th>Estado</th>
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($habitacions as $habitacion)
                        <tr>
                            <td>{{ $habitacion->id }}</td>
                            <td>{{ $habitacion->description }}</td>
                            <td>{{ $habitacion->price }}</td>
                            <td>{{ $habitacion->quantity }}</td>
                            <td>{{ $habitacion->status }}</td>
                            <td width='8px'><a class="btn btn-primary btn-sm" href="{{route('admin.habitacions.show', $habitacion)}}">Ver</a></td>
                            <td width='10px'><a class="btn btn-primary btn-sm" href="{{route('admin.habitacions.edit', $habitacion)}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.habitacions.destroy', $habitacion)}}" method="POST">
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
