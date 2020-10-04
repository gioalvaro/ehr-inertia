<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PhysicianTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('physician_types')->insert([
            'description' => 'Physician Note',
            'code' => 1
        ]);
        DB::table('physician_types')->insert([
            'description' => 'Primary Care',
            'code' => 2
        ]);
        DB::table('physician_types')->insert([
            'description' => 'Follow Up Note',
            'code' => 3
        ]);
        DB::table('physician_types')->insert([
            'description' => 'Clinic Note',
            'code' => 4
        ]);
        DB::table('physician_types')->insert([
            'description' => 'Operation Note',
            'code' => 5
        ]);
        DB::table('physician_types')->insert([
            'description' => 'Discharge Note',
            'code' => 6
        ]);
        DB::table('physician_types')->insert([
            'description' => 'Phone Encounter',
            'code' => 7
        ]);
        DB::table('physician_types')->insert([
            'description' => 'Urologist Appointment',
            'code' => 8
        ]);
    }
}
