<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosDestino extends Model
{
    use HasFactory;

    protected $fillable = ['mensaje'];

    // relacion uno a muchos


    // Relacion uno a muichos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function destino(){
        return $this->belongsTo('App\Models\Destino');
    }
}
