<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageHabitacionHotel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'url'];

    // Relacion uno a muichos inversa
    public function habitacions(){
        return $this->hasMany('App\Models\Habitacion');
    }
}
