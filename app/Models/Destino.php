<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description_short', 'description_large', 'price', 'rating', 'status', 'duration', 'languaje', 'itinerary', 'startplace', 'endplace', 'route', 'attractive','user_id'];

    // Relacion uno a muchos
    public function comentariosDestinos(){
        return $this->hasMany('App\Models\ComentariosDestino');
    }

    // Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    // relaciones muchos a muchos
    public function paquetes(){
        return $this->belongsToMany('App\Models\Paquete');
    }

    // relacion uno a uno polimorfica
    public function medias(){
        return $this->morphMany('App\Models\Media', 'mediable');
    }
}
