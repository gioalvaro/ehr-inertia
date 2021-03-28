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
            'id' => 1,
            'description' => 'ER',
            'code' => 1
        ]);
        DB::table('departments')->insert([
            'id' => 2,
            'description' => 'Primary Care',
            'code' => 2
        ]);
        DB::table('departments')->insert([
            'id' => 3,
            'description' => 'Internal Medicine',
            'code' => 3
        ]);
        DB::table('departments')->insert([
            'id' => 4,
            'description' => 'Urology',
            'code' => 4
        ]);
        DB::table('departments')->insert([
            'id' => 5,
            'description' => 'General Medicine',
            'code' => 5
        ]);
        DB::table('departments')->insert([
            'id' => 6,
            'description' => 'Surgery',
            'code' => 6
        ]);
        DB::table('departments')->insert([
            'id' => 7,
            'description' => 'Not Aplicable',
            'code' => 7
        ]);
        DB::table('departments')->insert([
            'id' => 8,
            'description' => 'OBGYN',
            'code' => 8
        ]);
        DB::table('departments')->insert([
            'id' => 9,
            'description' => 'Family Practice',
            'code' => 9
        ]);
        DB::table('departments')->insert([
            'id' => 10,
            'description' => 'Family Medicine',
            'code' => 10
        ]);
    }
}
