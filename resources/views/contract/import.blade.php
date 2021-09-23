@extends('layout.app')

@section('content')
    <div class="container">
        <h2 class="text-center m-4">Importar rutas</h2>
        <form action="{{ route('contract.store') }}" method='POST' enctype="multipart/form-data">
            @csrf
            <!--Nombre-->
            <div class="mb-5">
                <label for="nombre" class="form-label">Nombre</label>
                <input class="form-control" type="text" placeholder="Ingrese su nombre" name="nombre"/>
                @error('nombre')<p class="alert-danger" id="nombre">{{$message}}</p>@enderror
            </div>

            <!--Fecha-->
            <div class="mb-5">
                <label for="fecha" class="form-label">Fecha</label>
                <input class="form-control" type="date" placeholder="fecha" name="fecha"/>
                @error('fecha')<p class="alert-danger" id="fecha">{{$message}}</p>@enderror
            </div>

            <!--File-->
            <div class="mb-5">
                <label for="file" class="form-label">Archivo</label>
                <input class="form-control" name="file" type="file" accept=".xls,.xlsx"/>
                @error('file')<p class="alert-danger" id="files">{{$message}}</p>@enderror
            </div>
                <div class="d-grid gap-2">
                <input class="btn btn-outline-primary" type="submit" value="Guardar"/>
                </div>
    </form>
    </div>
@endsection
