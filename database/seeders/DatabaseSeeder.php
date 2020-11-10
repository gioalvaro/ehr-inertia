<?php

namespace Database\Seeders;


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
            LaboratoryGroupSeeder::class,
            PhysicianTypeSeeder::class,
            LaboratoryTypeSeeder::class,
            MedicationTypeSeeder::class,
            PhysicianNoteSeeder::class,
            NursingNoteSeeder::class,
            MedicationSeeder::class,
            ImagingSeeder::class,
            ProblemSeeder::class,
            LaboratorySeeder::class
        ]);
    }
}
