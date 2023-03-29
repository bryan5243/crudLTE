@extends('adminlte::page')
@section('title', 'CRUD con Laravel 10')

@section('content_header')
<h2>CREAR REGISTROS</h2>
@stop

@section('content')
<form action="/articulos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control"
            tabindex="4">
    </div>

    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js" rel="stylesheet">
@stop

@section('js')

@stop
