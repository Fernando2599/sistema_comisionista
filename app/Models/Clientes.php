<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ap_pat', 'ap_mat', 'numero_servicio', 'direccion'];
    
    //relacion m::m
    public function clientesPer() {
        return $this->belongsToMany(ClientePeriodo::class, 'cliente_periodos')
                    ->withPivot('estado_id', 'monto_pago');  //campos adicionales de la tabla intermedia
    }
    //relacion  m::m
    public function recibo() {
        return $this->belongsTo(Venta::class, 'recibos');
    }

}
