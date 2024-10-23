<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    use HasFactory;
    protected $fillable = ['venta_id', 'cliente_id'];

    // Relación 1:1 con Venta
    public function venta() {
        return $this->belongsToMany(Venta::class, 'venta_id')
                    ->withPivot('fecha_cobro', 'hora_cobro');
    }

    public function clientes() {
        return $this->belongsToMany(Clientes::class, 'cliente_id')
                    ->withPivot('estado_id', 'monto_pago');  //campos adicionales de la tabla intermedia
    }
}
