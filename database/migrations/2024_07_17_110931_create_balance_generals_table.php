<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balance_generals', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->decimal('total_activos', 15, 2);
            $table->decimal('total_pasivos', 15, 2);
            $table->decimal('total_patrimonio', 15, 2);
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balance_generals');
    }
}
