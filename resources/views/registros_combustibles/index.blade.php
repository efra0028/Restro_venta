@extends('adminlte::page')

@section('title', 'Registros de Venta')

@section('content_header')
    <h1>Registros de Venta</h1>
@stop

@section('content')
    <a href="{{ route('registros_combustibles.create') }}" class="btn btn-primary">Nuevo Registro de Venta</a>
    <table class="table table-bordered mt-12">
        <thead>
            <tr>
                <td width="30px">Nº</td>
                <th>Nombre del Cliente</th>
                <th>Número de Matrícula</th>
                <th>Tipo de Combustible</th>
                <th>Cantidad en Litros</th>
                <th>Precio por Litro</th>
                <th>Fecha de Compra</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->nombre_cliente }}</td>
                    <td>{{ $registro->numero_matricula }}</td>
                    <td>{{ $registro->tipo_combustible }}</td>
                    <td>{{ $registro->cantidad_litro }}</td>
                    <td>${{ $registro->precio_litro }}</td>
                    <td>{{ $registro->fecha_compra }}</td>

                    <td>
                        <a href="{{ route('registros_combustibles.edit', $registro) }}" class="btn btn-dark btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('registros_combustibles.destroy', $registro) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
