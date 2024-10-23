<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corte extends Model
{
    use HasFactory;
    protected $fillable = ['corte_caja', 'talonarios', 'faltante', 'corte_fecha', 'corte_hora','estado_id'];

    //relacion inversa 1:1
    public function estado() {
        return $this->belongsTo(Estado::class);
    }

    //relacion inversa m::m
    public function depositos() {
        return $this->belongsToMany(Deposito::class, 'corte_depositos');  //campos adicionales de la tabla intermedia
    }
}
