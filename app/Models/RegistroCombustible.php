<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class RegistroCombustible extends Model
{
    protected $table = 'registro_combustible'; 
    protected $dates = ['fecha_compra'];    
    
    protected $fillable = [
        'nombre_cliente',
        'numero_matricula', 
        'tipo_combustible',
        'cantidad_litro', 
        'precio_litro',
        'fecha_compra',
    ];
}
