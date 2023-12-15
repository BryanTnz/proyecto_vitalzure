<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Se procede a definir la estructura de la respuesta de la petición
        // https://laravel.com/docs/9.x/eloquent-resources#introduction
        return [
            'full_name' => $this->getFullName(),
            'dni' => $this->dni,

            'email' => $this->email,

            'role' => $this->role->name,

           
            'phone' => $this->phone,

            'age' => $this->age,
            'gender' => $this->gender,
            'fat' => $this->fat,
            'id' => $this->id,
            
           
        ];
    }
}
