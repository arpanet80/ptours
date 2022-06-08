@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de imagenes de Menu Restaurant</h1>
@stop

@section('content')

    {{-- @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Exito!!!  </strong> {{ session('info') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.menus.create')}}">Agregar Nuevo Platillo</a>
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
                        <th>Estado</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->description }}</td>
                            <td>{{ $menu->price }}</td>
                            <td>{{ $menu->quantity }}</td>
                            <td>{{ $menu->status }}</td>
                            <td width='10px'><a class="btn btn-success btn-sm" href="{{route('admin.menus.show', $menu)}}">Ver</a></td>
                            <td width='10px'><a class="btn btn-primary btn-sm" href="{{route('admin.menus.edit', $menu)}}">Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('admin.menus.destroy', $menu)}}" method="POST">
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
    </div> --}}
@stop
