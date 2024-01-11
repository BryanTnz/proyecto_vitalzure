<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    protected $fillable = [
        'email', 'username', 'first_name', 'last_name', 'personal_phone', 'home_phone',
        'address', 'password', 'birthdate',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relación de uno a muchos
    // Un usuario le pertenece un rol
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Relación de uno a muchos
    // Un usuario organizador puede realizar muchos reportes
    public function publication()
    {
        return $this->hasMany(Publication::class);
    }

    // Relación de uno a muchos
    // Un usuario puede tener muchos favoritos
    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }
    


    // Obtener el nombre completo del usuario
    public function getFullName()
    {
        return "$this->first_name $this->last_name";
    }


}
