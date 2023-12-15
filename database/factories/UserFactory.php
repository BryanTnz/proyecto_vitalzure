<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            //'role_id'=>$this->faker->randomElement([1,2,3,4]),
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'dni' => '09' . $this->faker->randomNumber(5),
            'phone' => '09' . $this->faker->randomNumber(2),
            'age' => $this->faker->randomNumber(2),
            'gender' => $this->faker->randomNumber(2),
            'fat' => $this->faker->randomNumber(2),
          
        
            'password' => Hash::make('secret'),
            'email' => $this->faker->unique()->safeEmail(),
         
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
