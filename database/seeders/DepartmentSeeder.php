<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('departments')->insert([
            'description' => 'ER',
            'code' => 1
        ]);
        DB::table('departments')->insert([
            'description' => 'Primary Care',
            'code' => 2
        ]);
        DB::table('departments')->insert([
            'description' => 'Internal Medicine',
            'code' => 3
        ]);   
        DB::table('departments')->insert([
            'description' => 'Urology',
            'code' => 4
        ]);   
        DB::table('departments')->insert([
            'description' => 'General Medicine',
            'code' => 5
        ]);       
    }
}
