<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = ['fecha_cobro', 'hora_cobro'];

    //relacion inversa 1:N
    public function recibo() {
        return $this->belongsTo(Recibo::class); //campos adicionales de la tabla intermedia
    }
}
