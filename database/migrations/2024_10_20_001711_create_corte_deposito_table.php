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
        Schema::create('corte_deposito', function (Blueprint $table) {
            $table->id();
            $table->foreignId('corte_id')
                ->constrained('cortes')
                ->onDelete('cascade');
            $table->foreignId('deposito_id')
                ->constrained('depositos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corte_deposito');
    }
};
