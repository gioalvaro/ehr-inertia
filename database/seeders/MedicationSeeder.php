<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Seeder;
use DB;

class MedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('medications')->insert([
            'id' => 1,
            'medication_type_id' => 5,
            'encounter_id' => 9,
            'dose' => '1mg IV',
            'units' => 'mg',
            'route' => 'oral',
            'frequency' => '3/day',
            'start_date' => new Carbon(new DateTime('2019-10-08')),
            'end_date' => new Carbon(new DateTime('2019-10-08'))
        ]);
        DB::table('medications')->insert([
            'id' => 2,
            'medication_type_id' => 6,
            'encounter_id' => 1,
            'dose' => '4mg IV',
            'units' => 'mg',
            'route' => 'oral',
            'frequency' => '5/day',
            'start_date' => new Carbon(new DateTime('2019-10-08')),
            'end_date' => new Carbon(new DateTime('2019-10-08'))
        ]);
        DB::table('medications')->insert([
            'id' => 3,
            'medication_type_id' => 7,
            'encounter_id' => 1,
            'dose' => '1L IV',
            'units' => 'L',
            'route' => 'Bolus',
            'frequency' => '0',
            'start_date' => new Carbon(new DateTime('2019-10-08')),
            'end_date' => new Carbon(new DateTime('2019-10-08'))
        ]);
    }
}
