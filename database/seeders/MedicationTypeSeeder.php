<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MedicationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('medication_types')->insert([
            'id' => 1,
            'description' => 'Sunitinib',
            'code' => 1
        ]);
        DB::table('medication_types')->insert([
            'id' => 2,
            'description' => 'Pamidronate',
            'code' => 2
        ]);
        DB::table('medication_types')->insert([
            'id' => 3,
            'description' => 'Tamsulosin',
            'code' => 3
        ]);
        DB::table('medication_types')->insert([
            'id' => 4,
            'description' => 'Nivolumab',
            'code' => 4
        ]);
        DB::table('medication_types')->insert([
            'id' => 5,
            'description' => 'Dilaudid',
            'code' => 5
        ]);
        DB::table('medication_types')->insert([
            'id' => 6,
            'description' => 'Zofran',
            'code' => 6
        ]);
        DB::table('medication_types')->insert([
            'id' => 7,
            'description' => 'NS',
            'code' => 7
        ]);
        DB::table('medication_types')->insert([
            'id' => 8,
            'description' => 'Iron Tablets',
            'code' => 8
        ]);
        DB::table('medication_types')->insert([
            'id' => 9,
            'description' => 'Pre Natal Vitamins',
            'code' => 9
        ]);
        DB::table('medication_types')->insert([
            'id' => 10,
            'description' => 'Atorvastin',
            'code' => 10
        ]);
        DB::table('medication_types')->insert([
            'id' => 11,
            'description' => 'Hydrochlorthiazide',
            'code' => 11
        ]);
        DB::table('medication_types')->insert([
            'id' => 12,
            'description' => 'Afluria',
            'code' => 12
        ]);
    }
}
