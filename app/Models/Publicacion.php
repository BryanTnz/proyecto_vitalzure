<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Publicacion extends Model
{
    use HasFactory;

    // Relación de uno a muchos
    // Un reporte le pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'user_id',
        'id',
        'titulo',
        'descripcion',
        'beneficios',
        'Procedimiento',
        
    ];
}
