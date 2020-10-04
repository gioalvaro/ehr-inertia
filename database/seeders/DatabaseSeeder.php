<?php

namespace Database\Seeders;

use App\Models\LaboratoryType;
use App\Models\NursingType;
use App\Models\PhysicianType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PatientSeeder::class,
            //ProviderSeeder::class,
            DepartmentSeeder::class,
            NursingTypeSeeder::class,
            PhysicianTypeSeeder::class,
            LaboratoryTypeSeeder::class,
            MedicationTypeSeeder::class
        ]);
    }
}
