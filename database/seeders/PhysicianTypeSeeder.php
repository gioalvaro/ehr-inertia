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
            'id' => 1,
            'description' => 'Physician Note',
            'code' => 1
        ]);
        DB::table('physician_types')->insert([
            'id' => 2,
            'description' => 'Primary Care',
            'code' => 2
        ]);
        DB::table('physician_types')->insert([
            'id' => 3,
            'description' => 'Follow Up Note',
            'code' => 3
        ]);
        DB::table('physician_types')->insert([
            'id' => 4,
            'description' => 'Clinic Note',
            'code' => 4
        ]);
        DB::table('physician_types')->insert([
            'id' => 5,
            'description' => 'Operation Note',
            'code' => 5
        ]);
        DB::table('physician_types')->insert([
            'id' => 6,
            'description' => 'Discharge Note',
            'code' => 6
        ]);
        DB::table('physician_types')->insert([
            'id' => 7,
            'description' => 'Phone Encounter',
            'code' => 7
        ]);
        DB::table('physician_types')->insert([
            'id' => 8,
            'description' => 'Urologist Appointment',
            'code' => 8
        ]);
    }
}
