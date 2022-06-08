<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMedia extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // relacion uno a muchos
    public function medias(){
        return $this->hasMany('App\Models\Media');
    }
}
