<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'fecha_limite_pago', 'periodo_inicio', 'periodo_fin', 'estado_id'];

    //relacion inversa 1:1
    public function estado() {
        return $this->belongsTo(Estado::class);
    }

    //relacion inversa m::m
    public function clientes() {
        return $this->belongsToMany(Clientes::class);  //campos adicionales de la tabla intermedia
    }
       
    
}
