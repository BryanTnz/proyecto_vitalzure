<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $rol_admin = Role::where('name', 'administrador')->first();
        User::factory()->for($rol_admin)->count(1)->create();

        $rol_admin = Role::where('name', 'organizador')->first();
        //dd($user_admin);

        // 5 usuarios que le pertenecen al rol admin
        // https://laravel.com/docs/9.x/database-testing#belongs-to-relationships
        User::factory()->for($rol_admin)->count(5)->create();

        $rol_director = Role::where('name', 'estudiante')->first();
        // 5 usuarios que le pertenecen al rol director
        // https://laravel.com/docs/9.x/database-testing#belongs-to-relationships
        User::factory()->for($rol_director)->count(5)->create();
    }
}
