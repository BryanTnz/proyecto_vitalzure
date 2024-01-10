<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    // Relación de uno a muchos
    // Una calificacion le pertenece a un favorito
    public function favorite()
    {
        return $this->belongsTo(Favorite::class);
    }
}
