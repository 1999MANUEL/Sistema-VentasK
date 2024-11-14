<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoResultadosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estado_resultados', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->decimal('total_ingresos', 15, 2);
            $table->decimal('total_gastos', 15, 2);
            $table->decimal('utilidad_neta', 15, 2);
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estado_resultados');
    }
}
