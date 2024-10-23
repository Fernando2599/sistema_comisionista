<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cliente_periodos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id');
            $table->foreignId('periodo_id');
            $table->foreignId('estado_id');
            $table->integer('monto_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_periodos');
    }
};
