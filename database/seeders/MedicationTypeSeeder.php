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
            'description' => 'Sunitinib',
            'code' => 1
        ]);
        DB::table('medication_types')->insert([
            'description' => 'Pamidronate',
            'code' => 2
        ]);
        DB::table('medication_types')->insert([
            'description' => 'Tamsulosin',
            'code' => 3
        ]);
        DB::table('medication_types')->insert([
            'description' => 'Nivolumab',
            'code' => 4
        ]);        
    }
    
}
