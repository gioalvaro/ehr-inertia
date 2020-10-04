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
            'mrn' => 67834,
            'lastname' => 'Coronel',
            'firstname' => 'Jose',
            'age' => 51,
            'sex' => 'male',
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'day_of_birth' => $faker->date(),
            'checkout' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'photo_url' => '/storage/patient-photos/Patient_1.png'
        ]);
        DB::table('patients')->insert([
            'mrn' => 67835,
            'lastname' => 'Peters',
            'firstname' => 'Susan',
            'age' => 30,
            'sex' => 'female',
            'reason' => 'Difficulty in breast feeding',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'day_of_birth' => $faker->date(),
            'checkout' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'ga' => $faker->randomNumber(2),
            'edd' => $faker->randomNumber(2),
            'gptal' => $faker->randomNumber(2),
            'lmp' => $faker->randomNumber(2),
            'photo_url' => '/storage/patient-photos/Patient_2.png'
        ]);
        DB::table('patients')->insert([
            'mrn' => 67836,
            'lastname' => 'Jones',
            'firstname' => 'Paula',
            'age' => 31,
            'sex' => 'female',
            'reason' => 'Missing Period',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'day_of_birth' => $faker->date(),
            'checkout' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'ga' => $faker->randomNumber(2),
            'edd' => $faker->randomNumber(2),
            'gptal' => $faker->randomNumber(2),
            'lmp' => $faker->randomNumber(2),
            'photo_url' => '/storage/patient-photos/Patient_3.png'
        ]);
        DB::table('patients')->insert([
            'mrn' => 67837,
            'lastname' => 'Kelly',
            'firstname' => 'Santiago',
            'age' => 78,
            'sex' => 'male',
            'reason' => 'Falling',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'day_of_birth' => $faker->date(),
            'checkout' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'photo_url' => '/storage/patient-photos/Patient_4.png'
        ]);
        DB::table('patients')->insert([
            'mrn' => 67838,
            'lastname' => 'Ramon',
            'firstname' => 'Molina',
            'age' => 79,
            'sex' => 'male',
            'reason' => 'Falling',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'day_of_birth' => $faker->date(),
            'checkout' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'photo_url' => '/storage/patient-photos/Patient_5.png'
        ]);
    }
}
