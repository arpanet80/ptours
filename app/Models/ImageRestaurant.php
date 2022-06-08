<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageRestaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'url'];

    // Relacion uno a muchos inversa
    public function restaurant(){
        return $this->belongsTo('App\Models\Restaurant');
    }
}
