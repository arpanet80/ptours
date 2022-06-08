<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantMenu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ingredients', 'description', 'status', 'price', 'quantity', 'rating', 'status', 'restaurant_id'];

    // Relacion uno a muchos
    public function imageMenuRestraurants(){
        return $this->hasMany('App\Models\ImageMenuRestaurant');
    }

    // Relacion uno a muchos inversa
    public function restaurant(){
        return $this->belongsTo('App\Models\Restaurant');
    }
}
