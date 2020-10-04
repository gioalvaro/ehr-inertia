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
            'description' => 'Nursing Note',
            'code' => 1
        ]);
        DB::table('nursing_types')->insert([
            'description' => 'Primary Care',
            'code' => 2
        ]);
        DB::table('nursing_types')->insert([
            'description' => 'First Visit',
            'code' => 3
        ]);
        DB::table('nursing_types')->insert([
            'description' => 'Triagem',
            'code' => 4
        ]);
        DB::table('nursing_types')->insert([
            'description' => 'Follow up note',
            'code' => 5
        ]);
    }
}
