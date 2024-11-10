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
        return $this->hasMany(Venta::class);
    }
    //Relacion 1:1 con clientes
    public function clientes() {
        return $this->hasOne(Clientes::class);  //campos adicionales de la tabla intermedia
    }
}
