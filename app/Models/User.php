<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    ///////////// AdminLTE ////////////////////

    public function adminlte_image()
    {
        //return auth()->user()->rofile_photo_url;
        return 'https://picsum.photos/300/300';
    }

    public function adminlte_desc()
    {
        return $user = auth()->user()->roles->pluck('name')[0] ?? '';
        //return 'Administrador';
    }

    public function adminlte_profile_url()
    {
        //http://ptours.test/user/profile
        return '/user/profile';
    }


    ///////////// ELACIONES ////////////////////
    // relacion uno a muchos
    public function destinos(){
        return $this->hasMany('App\Models\Destino');
    }

    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');
    }

    public function comendariosDestinos(){
        return $this->hasMany('App\Models\Comendarios_Destino');
    }

    public function comendariosPaquetes(){
        return $this->hasMany('App\Models\Comendarios_Paquete');
    }

    public function medias(){
        return $this->hasMany('App\Models\Media');
    }
}
