<?php

namespace Database\Seeders;

use App\Models\LaboratoryType;
use App\Models\MedicationType;
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
            ProviderSeeder::class,
            DepartmentSeeder::class,
            EncounterSeeder::class,
            NursingTypeSeeder::class,
            PhysicianTypeSeeder::class,
            LaboratoryTypeSeeder::class,
            MedicationTypeSeeder::class,
            PhysicianNoteSeeder::class,
            NursingNoteSeeder::class,
            MedicationSeeder::class
        ]);
    }
}
