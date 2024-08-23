<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('registro_combustible', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->string('numero_matricula', 30);
            $table->enum('tipo_combustible',['gasolina','diesel']);
            $table->decimal('cantidad_litro',8,2);
            $table->decimal('precio_litro',8,2);
            $table->date('fecha_compra');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registro_combustible');
    }
};
