<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'coordinates', 'description', 'rating', 'status'];

    // Relacion uno a muchos
    public function habitacions(){
        return $this->hasMany('App\Models\Habitacion');
    }

    // Relacion uno a muchos inversa
    // public function tipoCuartos(){
    //     return $this->belongsTo('App\Models\Tipo_cuarto');
    // }

    // relaciones muchos a muchos
    public function paquetes(){
        return $this->belongsToMany('App\Models\Paquete');
    }
}
