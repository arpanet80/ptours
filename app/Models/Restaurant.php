<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'address', 'coordinates', 'rating', 'status'];

    // Relacion uno a muchos
    public function restaurantMenus(){
        return $this->hasMany('App\Models\RestaurantMenu');
    }

    public function imageRestaurant(){
        return $this->hasMany('App\Models\ImageRestaurant');
    }

    public function restaurantMenu(){
        return $this->hasMany('App\Models\RestaurantMenu');
    }

    // relaciones muchos a muchos
    public function paquetes(){
        return $this->belongsToMany('App\Models\Paquete');
    }
}
