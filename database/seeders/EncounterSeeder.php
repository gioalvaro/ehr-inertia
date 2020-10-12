<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use \App\Models\Provider;
use DB;

class EncounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $faker = \Faker\Factory::create();
        DB::table('encounters')->insert([
            'id' => 1,
            'patient_id' => 1,
            'provider_id' => 1,
            'department_id' => 1,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'id' => 2,
            'patient_id' => 1,
            'provider_id' => 2,
            'department_id' => 2,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'id' => 3,
            'patient_id' => 1,
            'provider_id' => 4,
            'department_id' => 1,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'id' => 4,
            'patient_id' => 1,
            'provider_id' => 5,
            'department_id' => 1,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'id' => 5,
            'patient_id' => 1,
            'provider_id' => 5,
            'department_id' => 1,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'id' => 6,
            'patient_id' => 1,
            'provider_id' => 6,
            'department_id' => 6,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'id' => 7,
            'patient_id' => 1,
            'provider_id' => 7,
            'department_id' => 3,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'id' => 8,
            'patient_id' => 1,
            'provider_id' => 8,
            'department_id' => 3,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => Str::random(20),
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'id' => 9,
            'patient_id' => 1,
            'department_id' => 7,
            'provider_id' => 9,
            'test' => true,
            'open' => false

        ]);
        DB::table('encounters')->insert([
            'patient_id' => 2,
            // 'provider_id' => Provider::factory()->create()['id'],
            // 'department_id' => Department::inRandomOrder()->first()['id'],
            'reason' => 'Difficulty in breast feeding',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
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
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'patient_id' => 3,
            // 'provider_id' => Provider::factory()->create()['id'],
            // 'department_id' => Department::inRandomOrder()->first()['id'],
            'reason' => 'Missing Period',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
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
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'patient_id' => 4,
            // 'provider_id' => Provider::factory()->create()['id'],
            // 'department_id' => Department::inRandomOrder()->first()['id'],
            'reason' => 'Falling',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false
        ]);
        DB::table('encounters')->insert([
            'patient_id' => 5,
            // 'provider_id' => Provider::factory()->create()['id'],
            // 'department_id' => Department::inRandomOrder()->first()['id'],
            'reason' => 'Falling',
            'scheduled_time' => $faker->dateTime(),
            'arrival_time' => $faker->dateTime(),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => true,
            'open' => false        
        ]);
    }
}
