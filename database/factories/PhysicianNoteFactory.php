<?php

namespace Database\Factories;

use App\Models\PhysicianNote;
use App\Models\Patient;
use App\Models\Department;
use App\Models\PhysicianType;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhysicianNoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhysicianNote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'note' => $this->faker->text(),
            'patient_id' => Patient::factory(),
            'department_id' => Department::factory(),
            'physician_type_id' => PhysiscianType::factory(),
            'provider_id' => Provider::factory()
        ];
    }
}
