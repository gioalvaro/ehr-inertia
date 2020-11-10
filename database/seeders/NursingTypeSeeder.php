<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NursingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('nursing_types')->insert([
            'id' => 1,
            'description' => 'Nursing Note',
            'code' => 1
        ]);
        DB::table('nursing_types')->insert([
            'id' => 2,
            'description' => 'Primary Care',
            'code' => 2
        ]);
        DB::table('nursing_types')->insert([
            'id' => 3,
            'description' => 'First Visit',
            'code' => 3
        ]);
        DB::table('nursing_types')->insert([
            'id' => 4,
            'description' => 'Triagem',
            'code' => 4
        ]);
        DB::table('nursing_types')->insert([
            'id' => 5,
            'description' => 'Follow up note',
            'code' => 5
        ]);
        DB::table('nursing_types')->insert([
            'id' => 6,
            'description' => 'L&D',
            'code' => 6
        ]);
        DB::table('nursing_types')->insert([
            'id' => 7,
            'description' => 'Post Natal Clinic',
            'code' => 7
        ]);
        DB::table('nursing_types')->insert([
            'id' => 8,
            'description' => 'Family Practice',
            'code' => 8
        ]);
    }
}
