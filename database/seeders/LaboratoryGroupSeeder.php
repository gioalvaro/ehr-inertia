<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LaboratoryGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laboratory_groups')->insert([
            'id' => 1,
            'description' => 'Hematologic',
            'code' => 1
        ]);
        DB::table('laboratory_groups')->insert([
            'id' => 2,
            'description' => 'Blood Plasma Serum',
            'code' => 2
        ]);
        DB::table('laboratory_groups')->insert([
            'id' => 3,
            'description' => 'Lipids',
            'code' => 3
        ]);
        DB::table('laboratory_groups')->insert([
            'id' => 4,
            'description' => 'Genetics',
            'code' => 4
        ]);
        DB::table('laboratory_groups')->insert([
            'id' => 5,
            'description' => 'Endo',
            'code' => 5
        ]);
        DB::table('laboratory_groups')->insert([
            'id' => 6,
            'description' => 'Urine',
            'code' => 6
        ]);
        DB::table('laboratory_groups')->insert([
            'id' => 7,
            'description' => 'Cerebrospinal Fluid',
            'code' => 7
        ]);
        DB::table('laboratory_groups')->insert([
            'id' => 8,
            'description' => 'Infectious Disease',
            'code' => 8
        ]);
        DB::table('laboratory_groups')->insert([
            'id' => 9,
            'description' => 'Others',
            'code' => 9
        ]);
    }
}
