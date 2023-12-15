<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Registro;
use App\Models\Publicacion;
use Faker\Generator;

class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = app(Generator::class);

		foreach(range(1, 10) as $index)
		{
			Registro::create([
                'user_id'=>$faker->numberBetween($min = 7, $max = 11),
                'publicacion_id' =>$faker->numberBetween($min = 1, $max = 10),
			]);
		}

        
    }
}
