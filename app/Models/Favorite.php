<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    // Relación de uno a muchos
    // Un favorito le pertenece a una publicacion
    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    // Relación de uno a muchos
    // Un favorito puede tener muchas calificaciones
    public function qualification()
    {
        return $this->hasMany(Qualification::class);
    }

    // Una publicacion puede tener muchos favoritos y un favorito le pertenece a una publicacion

    // Relación de uno a muchos
    // Un favorito le pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
