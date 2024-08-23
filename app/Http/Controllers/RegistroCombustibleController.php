<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroCombustible;

class RegistroCombustibleController extends Controller
{
    public function index()
    {
        $registros = RegistroCombustible::all();
        return view('registros_combustibles.index', compact('registros'));
    }

    public function create()
    {
        return view('registros_combustibles.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre_cliente' => 'required|string|max:50',
            'numero_matricula' => 'required|string|max:30',
            'tipo_combustible' => 'required|in:Gasolina,Diésel',
            'cantidad_litro' => 'required|numeric|min:0',
            'precio_litro' => 'required|numeric|min:0',
            'fecha_compra' => 'required|date',
        ]);
    
        RegistroCombustible::create($request->all());
    
        return redirect()->route('registros_combustibles.index')
            ->with('success', 'La venta fue realizada correctamente.');
    }
    
    
    
    

    public function show(RegistroCombustible $registroCombustible)
    {
        return view('registros_combustibles.show', compact('registroCombustible'));
    }

    public function edit(RegistroCombustible $registroCombustible)
    {
        return view('registros_combustibles.edit', compact('registroCombustible'));
    }

    public function update(Request $request, RegistroCombustible $registroCombustible)
    {
        $request->validate([
            'nombre_cliente' => 'required|string|max:50',
            'numero_matricula' => 'required|string|max:30',
            'tipo_combustible' => 'required|in:Gasolina,Diésel',
            'cantidad_litro' => 'required|numeric|min:0',
            'precio_litro' => 'required|numeric|min:0',
            'fecha_compra' => 'required|date', 
        ]);
    
        $fecha_compra = \Carbon\Carbon::createFromFormat('d/m/Y', $request->input('fecha_compra'))->format('Y-m-d');
    
        $registroCombustible->update($request->merge(['fecha_compra' => $fecha_compra])->all());
    
        return redirect()->route('registros_combustibles.index')
            ->with('success', 'La venta fue modificada correctamente.');
    }
    
    
    
    

    public function destroy(RegistroCombustible $registroCombustible)
    {
        $registroCombustible->delete();

        return redirect()->route('registros_combustibles.index')
            ->with('success', 'La venta fue eliminada correctamente.');
    }
}
