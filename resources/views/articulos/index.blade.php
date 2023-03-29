@extends('adminlte::page')

@section('title', 'CRUD con Laravel 10')

@section('content_header')
    <h1>Listado de articulos</h1>
@stop

@section('content')

    <a href="articulos/create" class="btn btn-primary" style="margin-bottom: 20px">Crear</a>

    <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Codigo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td> {{ $articulo->id }}</td>
                    <td> {{ $articulo->codigo }}</td>
                    <td> {{ $articulo->descripcion }}</td>
                    <td> {{ $articulo->cantidad }}</td>
                    <td> {{ $articulo->precio }}</td>
                    <td>
                        <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST">
                            <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js" rel="stylesheet">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#articulos').DataTable({
                responsive: true,
                autoWidth: false,
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@stop
