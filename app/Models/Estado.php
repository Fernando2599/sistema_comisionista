<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_estado'];

    //relacion 1:1
    public function clientePeriodo() {
        return $this->hasMany(ClientePeriodo::class);
    }
    //relacion  1:1
    public function corte() {
        return $this->hasMany(Corte::class);
    }
    //relacion  1:1
    public function periodos() {
        return $this->hasMany(Periodos::class);
    }
}
