<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ap_pat', 'ap_mat', 'numero_servicio', 'direccion'];
    
    //relacion m::m
    public function periodos() {
        return $this->belongsToMany(Periodos::class);  //campos adicionales de la tabla intermedia
    }
    //relacion  1::m
    public function recibo() {
        return $this->belongsTo(Venta::class, 'recibos');
    }

}
