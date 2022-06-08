<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description_short', 'description_large', 'cover_img_url', 'price', 'rating', 'status'];

    // Relacion uno a muchos
    public function comentariosPaquetes(){
        return $this->hasMany('App\Models\ComentariosPaquete');
    }

    public function medias(){
        return $this->hasMany('App\Models\Media');
    }

    // Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function tipoPaquete(){
        return $this->belongsTo('App\Models\TipoPaquete');
    }

    public function transporte(){
        return $this->belongsTo('App\Models\Transporte');
    }

    // relaciones muchos a muchos
    public function destinos(){
        return $this->belongsToMany('App\Models\Destino');
    }

    public function restaurants(){
        return $this->belongsToMany('App\Models\Restaurant');
    }

    public function hoteles(){
        return $this->belongsToMany('App\Models\Hotel');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    // relacion uno a muchos polimorfica
    public function media(){
        return $this->morphMany('App\Models\Media', 'mediable');
    }
}
