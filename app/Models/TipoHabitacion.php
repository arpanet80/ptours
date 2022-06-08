<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relacion uno a muchos
    public function habitacions(){
        return $this->hasMany('App\Models\Habitacion');
    }
}
