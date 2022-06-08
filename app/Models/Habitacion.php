<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'price', 'quantity', 'rating', 'status', 'tipo_habitacion_id', 'hotel_id'];

    // Relacion uno a muchos
    public function imageHotels(){
        return $this->hasMany('App\Models\Image_Hotel');
    }

    // Relacion uno a muichos inversa
    public function tipoCuarto(){
        return $this->belongsTo('App\Models\Tipo_cuarto');
    }

    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
}
