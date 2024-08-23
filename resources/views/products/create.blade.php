@extends('adminlte::page')
@section('title','Nuevo Producto')
@section('content_header')
    <h1>Crear Poductos</h1>
@stop

@section('content')
    <form action="{{ route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="name">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="name">Costo del producto</label>
            <input type="number" id="precio" name="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop