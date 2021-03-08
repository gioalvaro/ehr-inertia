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
        DB::table('medications')->insert([
            'id' => 4,
            'medication_type_id' => 8,
            'encounter_id' => 10,
            'dose' => '0',
            'units' => '',
            'route' => 'oral',
            'frequency' => '1 tablet/day',
            'start_date' => new Carbon(new DateTime('2020-09-02')),
            'end_date' => new Carbon(new DateTime('2020-09-02'))
        ]);
        DB::table('medications')->insert([
            'id' => 5,
            'medication_type_id' => 9,
            'encounter_id' => 10,
            'dose' => '0',
            'units' => '',
            'route' => 'oral',
            'frequency' => '1 tablet/day',
            'start_date' => new Carbon(new DateTime('2020-09-02')),
            'end_date' => new Carbon(new DateTime('2020-09-02'))
        ]);
        DB::table('medications')->insert([
            'id' => 6,
            'medication_type_id' => 3,
            'encounter_id' => 18,
            'dose' => '0.4 mg',
            'units' => 'mg',
            'route' => 'oral',
            'frequency' => '1 tablet/day',
            'start_date' => new Carbon(new DateTime('2020-07-18')),
            'end_date' => new Carbon(new DateTime('2021-04-02'))
        ]);
        DB::table('medications')->insert([
            'id' => 7,
            'medication_type_id' => 10,
            'encounter_id' => 18,
            'dose' => '20 mg',
            'units' => 'mg',
            'route' => 'oral',
            'frequency' => '1 tablet/day',
            'start_date' => new Carbon(new DateTime('2020-07-18')),
            'end_date' => new Carbon(new DateTime('2021-04-02'))
        ]);
        DB::table('medications')->insert([
            'id' => 8,
            'medication_type_id' => 11,
            'encounter_id' => 18,
            'dose' => '25 mg',
            'units' => 'mg',
            'route' => 'oral',
            'frequency' => '1 tablet/day',
            'start_date' => new Carbon(new DateTime('2020-07-18')),
            'end_date' => new Carbon(new DateTime('2021-04-02'))
        ]);
        DB::table('medications')->insert([
            'id' => 9,
            'medication_type_id' => 12,
            'encounter_id' => 18,
            'dose' => '0.5 mL IM',
            'units' => 'mL',
            'route' => 'IM',
            'frequency' => '1 per year',
            'start_date' => new Carbon(new DateTime('2020-07-18')),
            'end_date' => new Carbon(new DateTime('2021-04-02'))
        ]);
    }
}
