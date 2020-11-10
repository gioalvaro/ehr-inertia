<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
use DateTime;

class LaboratorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laboratories')->insert([
            'id' => 1,
            'current_value' => "12",
            'min' => "13.5",
            'max' => "17.5",
            'units' => "d/dL",
            'encounter_id' => 10,
            'laboratory_type_id' => 124,
            'created_at' => new Carbon(new DateTime('2020-09-24 12:15'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 2,
            'current_value' => "Negative",
            'min' => "Negative",
            'max' => "",
            'units' => "",
            'encounter_id' => 10,
            'laboratory_type_id' => 104,
            'created_at' => new Carbon(new DateTime('2020-09-24 12:15'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 3,
            'current_value' => "Negative",
            'min' => "Negative",
            'max' => "",
            'units' => "",
            'encounter_id' => 10,
            'laboratory_type_id' => 112,
            'created_at' => new Carbon(new DateTime('2020-09-24 12:15'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 4,
            'current_value' => "Positive",
            'min' => "Positive",
            'max' => "",
            'units' => "",
            'encounter_id' => 10,
            'laboratory_type_id' => 55,
            'created_at' => new Carbon(new DateTime('2020-09-24 12:15'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 5,
            'current_value' => "6.5",
            'min' => "13.5",
            'max' => "17.5",
            'units' => "d/dL",
            'encounter_id' => 10,
            'laboratory_type_id' => 124,
            'created_at' => new Carbon(new DateTime('2020-09-24 18:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 6,
            'current_value' => "Normal",
            'min' => "Normal Range",
            'max' => "",
            'units' => "",
            'encounter_id' => 10,
            'laboratory_type_id' => 119,
            'created_at' => new Carbon(new DateTime('2020-09-24 18:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 7,
            'current_value' => "9",
            'min' => "13.5",
            'max' => "17.5",
            'units' => "d/dL",
            'encounter_id' => 10,
            'laboratory_type_id' => 124,
            'created_at' => new Carbon(new DateTime('2020-09-25 1:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 8,
            'current_value' => "35%",
            'min' => "37%",
            'max' => "48%",
            'units' => "normocytic normochromic red cells",
            'encounter_id' => 10,
            'laboratory_type_id' => 125,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 9,
            'current_value' => "7800",
            'min' => "4000",
            'max' => "11000",
            'units' => "1/uL",
            'encounter_id' => 10,
            'laboratory_type_id' => 118,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 10,
            'current_value' => "180000",
            'min' => "150000",
            'max' => "450000",
            'units' => "1/uL",
            'encounter_id' => 10,
            'laboratory_type_id' => 121,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 11,
            'current_value' => "51",
            'min' => "79",
            'max' => "160",
            'units' => "mg/dL",
            'encounter_id' => 10,
            'laboratory_type_id' => 23,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 12,
            'current_value' => "129",
            'min' => "135",
            'max' => "145",
            'units' => "mEq/L",
            'encounter_id' => 10,
            'laboratory_type_id' => 17,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 13,
            'current_value' => "4.3",
            'min' => "3.5",
            'max' => "5",
            'units' => "mEq/L",
            'encounter_id' => 10,
            'laboratory_type_id' => 18,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 14,
            'current_value' => "8",
            'min' => "7",
            'max' => "20",
            'units' => "mg/dL",
            'encounter_id' => 10,
            'laboratory_type_id' => 126,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 15,
            'current_value' => "1.0",
            'min' => "0.5",
            'max' => "1.1",
            'units' => "mg/dL",
            'encounter_id' => 10,
            'laboratory_type_id' => 22,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 16,
            'current_value' => "129",
            'min' => "98",
            'max' => "106",
            'units' => "mEq/L",
            'encounter_id' => 10,
            'laboratory_type_id' => 19,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 17,
            'current_value' => "1015",
            'min' => "1005",
            'max' => "10030",
            'units' => "",
            'encounter_id' => 10,
            'laboratory_type_id' => 127,
            'created_at' => new Carbon(new DateTime('2020-09-25 11:00'))   
        ]);
        DB::table('laboratories')->insert([
            'id' => 18,
            'current_value' => "10.8",
            'min' => "13.5",
            'max' => "17.5",
            'units' => "d/dL",
            'encounter_id' => 10,
            'laboratory_type_id' => 124,
            'created_at' => new Carbon(new DateTime('2020-09-26 11:00'))   
        ]);
    }
}
