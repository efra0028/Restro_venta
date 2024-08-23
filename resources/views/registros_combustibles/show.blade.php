@extends('adminlte::page')

@section('title', 'Mostrar Registro de Venta')

@section('content_header')
    <h1>Ver Más</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de Venta #{{ $registro->id }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre del Cliente:</strong> {{ $registro->nombre_cliente }}</p>
            <p><strong>Número de Matrícula:</strong> {{ $registro->numero_matricula }}</p>
            <p><strong>Tipo de Combustible:</strong> {{ $registro->tipo_combustible }}</p>
            <p><strong>Cantidad en Litros:</strong> {{ $registro->cantidad_litro }}</p>
            <p><strong>Precio por Litro:</strong> ${{ $registro->precio_litro }}</p>
            <p><strong>Fecha de Compra:</strong> {{ $registro->fecha_compra->format('d-m-Y') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('registros_combustibles.index') }}" class="btn btn-primary">Atrás</a>
            <a href="{{ route('registros_combustibles.edit', $registro) }}" class="btn btn-warning">Modificar</a>
            <form action="{{ route('registros_combustibles.destroy', $registro) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop
