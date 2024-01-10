<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Qualification;
use Faker\Generator;

class QualificationSeeder extends Seeder
{
   
    public function run()
    {
        $faker = app(Generator::class);

		foreach(range(1, 10) as $index)
		{
			Qualification::create([
                'registro_id'=>$faker->numberBetween($min = 1, $max = 10),
                'calificacion' =>$faker->numberBetween($min = 1, $max = 5),
			]);
		}
    }
}
