<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientePeriodo extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'periodo_id', 'estado_id', 'monto_pago'];

    // Relación 1:1 con Estados
    public function estado() {
        return $this->belongsTo(Estado::class);
    }

    // Relación 1:1 con Cliente
    public function clientes() {
        return $this->belongsTo(Clientes::class);
    }

    // Relación 1:1 con Periodo
    public function periodos() {
        return $this->belongsTo(Periodos::class);
    }
}
