@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Imagenes para Menur de Restaurant</h1>
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
    @if (session('id'))
        {{-- <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.imagemenus.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="id" type="hidden" value={{ session('id') }}>
                    <div class="form-group">
                        <input type="file" name="file" id="" accept="image/*">
                        @error('file')
                        <br>
                        <small class="text-danger">{{ $message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Subir imagenes</button>
                </form>
            </div>
        </div> --}}



        <form action="{{route('admin.imagemenus.store')}}"
            method="POST"
            class="dropzone"
            id="my-dropzone">
        </form>
    @else
        <div class="card">
            <div class="card-body">
                Error al cargar la peticion
            </div>
        </div>
    @endif
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    {{-- <link rel="stylesheet" href="{{ url('assets/css/dropzone.min.css') }}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
    {{-- <script src="{{ url('assets/js/dropzone.min.js') }}"></script> --}}
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.myDropzone = {
            headers:{
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
            dictDefaultMessage: "Arrastre una imagen al recuadro para subirlo",
            acceptedFiles: "image/*",
            maxFilesize: 3,
            maxFiles: 5,
        };
    </script>
@stop
