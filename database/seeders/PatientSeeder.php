<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Patient::factory(10)->create();
        $faker = \Faker\Factory::create();
        DB::table('patients')->insert([
            'id' => 1,
            'mrn' => 67834,
            'lastname' => 'Coronel',
            'firstname' => 'Jose',
            'day_of_birth' => $faker->date(),
            'age' => 51,
            'sex' => 'male',            
            'photo_url' => '/storage/patient-photos/Patient_1.png'
        ]);
        DB::table('patients')->insert([
            'id' => 2,
            'mrn' => 67835,
            'lastname' => 'Peters',
            'firstname' => 'Susan',
            'day_of_birth' => $faker->date(),
            'age' => 30,
            'sex' => 'female',           
            'photo_url' => '/storage/patient-photos/Patient_2.png'
        ]);
        DB::table('patients')->insert([
            'id' => 3,
            'mrn' => 67836,
            'lastname' => 'Jones',
            'firstname' => 'Paula',
            'day_of_birth' => $faker->date(),
            'age' => 31,
            'sex' => 'female',            
            'photo_url' => '/storage/patient-photos/Patient_3.png'
        ]);
        DB::table('patients')->insert([
            'id' => 4,
            'mrn' => 67837,
            'lastname' => 'Kelly',            
            'firstname' => 'Santiago',
            'day_of_birth' => $faker->date(),
            'age' => 78,
            'sex' => 'male',            
            'photo_url' => '/storage/patient-photos/Patient_4.png'
        ]);
        DB::table('patients')->insert([
            'id' => 5,
            'mrn' => 67838,
            'lastname' => 'Ramon',
            'firstname' => 'Molina',
            'day_of_birth' => $faker->date(),
            'age' => 79,
            'sex' => 'male',            
            'photo_url' => '/storage/patient-photos/Patient_5.png'
        ]);
    }
}
