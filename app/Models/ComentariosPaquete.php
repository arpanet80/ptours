<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosPaquete extends Model
{
    use HasFactory;

    protected $fillable = ['mensaje'];

    // Relacion uno a muichos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function paquete(){
        return $this->belongsTo('App\Models\Paquete');
    }
}
