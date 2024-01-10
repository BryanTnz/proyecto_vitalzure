<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    // Relación de uno a muchos
    // Una publicacion le pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación de uno a muchos
    //  Una publicacion puede tener muchos favoritos
    public function favorite()
    {
        return $this->hasmany(Favorite::class);
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
