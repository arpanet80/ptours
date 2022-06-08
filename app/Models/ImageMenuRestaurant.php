<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageMenuRestaurant extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'restaurant_menu_id'];

    // Relacion uno a muchos inversa
    public function restaurantMenu(){
        return $this->belongsTo('App\Models\Restaurant_menu');
    }
}
