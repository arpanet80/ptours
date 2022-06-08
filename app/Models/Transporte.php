<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'quantity', 'empresa_id'];

    // relacion uno a muchos
    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');
    }

    // Relacion uno a muchos inversa
    public function empresa(){
        return $this->belongsTo('App\Models\Empresa');
    }
}
