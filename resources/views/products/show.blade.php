@extends('adminlte::page')

@section('title','Mostrar')

@section('content_header')
    <h1>Ver mas</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$product->name}}</h3>
        </div>
        <div class="card header">
            <p ><strong>Descripcion</strong>{{$product->descripcion}}</p>
            <p ><strong>Precio</strong>{{$product->precio}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('products.index')}}" class="btn btn-primary">Atras</a>
            <a href="{{route('products.edit',$product)}}" class="btn btn-warning">Modificar</a>
            <form action="{{route('products.destroy',$product)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop