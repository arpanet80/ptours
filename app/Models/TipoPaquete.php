<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPaquete extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relacion uno a muchos
    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');
    }
}
