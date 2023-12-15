<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Role;
use App\Models\Publicacion;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Relación de uno a muchos
    // Un usuario le pertenece un rol
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Relación de uno a muchos
    // Un usuario puede realizar muchos reportes
    public function publicacion()
    {
        return $this->hasMany(Publicacion::class);
    }


    // Obtener el nombre completo del usuario
    public function getFullName()
    {
        return "$this->name $this->lastname";
    }
    
    
    protected $fillable = [
        'id',
        'role_id',
        'name',
        'lastname',
        'dni',
        'password',
        'age',
        'gender',
        'fat',
        'state',
        'email',
        'phone',


    ];

   
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
