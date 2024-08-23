@extends('adminlte::page')

@section('title', 'Nuevo Registro de Venta')

@section('content_header')
    <h1>Nuevo Registro de Venta</h1>
@stop

@section('content')
    <form action="{{ route('registros_combustibles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_cliente">Nombre del Cliente</label>
            <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" value="{{ old('nombre_cliente') }}" required>
        </div>
        <div class="form-group">
            <label for="numero_matricula">Número de Matrícula</label>
            <input type="text" name="numero_matricula" id="numero_matricula" class="form-control" value="{{ old('numero_matricula') }}" required>
        </div>
        <div class="form-group">
            <label for="tipo_combustible">Tipo de Combustible</label>
            <select name="tipo_combustible" id="tipo_combustible" class="form-control" required>
                <option value="">Seleccionar</option>
                <option value="Gasolina" {{ old('tipo_combustible') == 'Gasolina' ? 'selected' : '' }}>Gasolina</option>
                <option value="Diésel" {{ old('tipo_combustible') == 'Diésel' ? 'selected' : '' }}>Diésel</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad_litro">Cantidad en Litros</label>
            <input type="number" name="cantidad_litro" id="cantidad_litro" class="form-control" step="0.01" value="{{ old('cantidad_litro') }}" required>
        </div>
        <div class="form-group">
            <label for="precio_litro">Precio por Litro</label>
            <input type="number" name="precio_litro" id="precio_litro" class="form-control" step="0.01" value="{{ old('precio_litro') }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_compra">Fecha de Compra</label>
            <input type="date" name="fecha_compra" id="fecha_compra" class="form-control" value="{{ old('fecha_compra') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
