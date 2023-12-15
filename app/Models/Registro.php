<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Publicacion;
use app\Models\User;

class Registro extends Model
{
    use HasFactory;
    // Relación de uno a muchos
    // Un usuario puede registrarse en muchas publicaciones
    public function publicaciones()
    {
        return $this->hasMany(Publicacion::class);
    }

    // Relación de uno a muchos
    // Un registro le pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
