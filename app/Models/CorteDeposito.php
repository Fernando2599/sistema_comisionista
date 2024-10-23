<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorteDeposito extends Model
{
    use HasFactory;

    // Relación 1:1 con Corte
    public function cortes() {
        return $this->belongsTo(Corte::class, 'corte_id');
    }

    // Relación 1:1 con Deposito
    public function periodo() {
        return $this->belongsTo(Deposito::class, 'deposito_id');
    }
}
