<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'age' => $this->faker->randomNumber(2),
            'sex' => 'male',
            'reason' => Str::random(20),
            'scheduled_time' => $this->faker->dateTime(),
            'arrival_time' => $this->faker->dateTime(),
            'day_of_birth' => $this->faker->date(),
            'checkout' => false,
            'temperature' => $this->faker->randomNumber(2),
            'temperature_type' => 'oral',
            'bmi' => $this->faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => Str::random(20),
            'ga' => $this->faker->randomNumber(2),
            'edd' => $this->faker->randomNumber(2),
            'gptal' => $this->faker->randomNumber(2),
            'lmp' => $this->faker->randomNumber(2)
        ];
    }
}
