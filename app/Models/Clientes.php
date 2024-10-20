<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ap_pat', 'ap_mat', 'numero_servicio', 'direccion'];
    
    public function periodos() {
        return $this->hasMany(Periodos::class);
    }

}
