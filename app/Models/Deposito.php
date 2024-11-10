<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposito extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_creacion', 'hora_creacion', 'monto_deposito'];

    //relacion inversa m::m
    public function cortes() {
        return $this->belongsToMany(Corte::class); 
    }
}
