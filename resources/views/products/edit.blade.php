@extends('adminlte::page')

@section('title','Modificar Producto')

@section('content_header')
    <h1>Modificar</h1>
@stop

@section('content')
    <form action="{{route('products.update',$product)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea  id="descripcion" name="descripcion" class="form-control" required>{{ $product->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" class="form-control" step="0.01" value="{{ $product->precio }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modificar </button>
    </form>
@stop