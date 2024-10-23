<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    //relacion 1:1
    public function clientePeriodos() {
        return $this->hasOne(ClientePeriodo::class);
    }
    //relacion  1:1
    public function corte() {
        return $this->hasOne(Corte::class);
    }
    //relacion  1:1
    public function periodos() {
        return $this->hasOne(Periodos::class);
    }
}
