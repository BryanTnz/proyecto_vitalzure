<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Registro;
use App\Models\Calificacion;
use Faker\Generator;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = app(Generator::class);

		foreach(range(1, 10) as $index)
		{
			Calificacion::create([
                'registro_id'=>$faker->numberBetween($min = 1, $max = 10),
                'calificacion' =>$faker->numberBetween($min = 1, $max = 5),
			]);
		}
    }
}
