<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Favorite;
use Faker\Generator;

class FavoriteSeeder extends Seeder
{
   
    public function run()
    {
        $faker = app(Generator::class);

		foreach(range(1, 10) as $index)
		{
			Favorite::create([
                'user_id'=>$faker->numberBetween($min = 7, $max = 11),
                'publicacion_id' =>$faker->numberBetween($min = 1, $max = 10),
			]);
		}
    }
}
