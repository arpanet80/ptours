<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'status'];

    //protected $guarded = [];

    // Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function TipoMedia(){
        return $this->belongsTo('App\Models\Tipo_media');
    }

    // relacion uno a uno polimorfica
    public function mediable(){
        return $this->morphTo();
    }
}
