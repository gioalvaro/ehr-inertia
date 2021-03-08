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
        DB::table('laboratories')->insert([
            'id' => 19,
            'current_value' => "7.9",
            'min' => "4.5",
            'max' => "11",
            'units' => "x10^3 mm^3",
            'encounter_id' => 18,
            'laboratory_type_id' => 118,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 20,
            'current_value' => "4.8",
            'min' => "3.5",
            'max' => "6",
            'units' => "x10^6 mm^3",
            'encounter_id' => 18,
            'laboratory_type_id' => 128,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 21,
            'current_value' => "16",
            'min' => "13.5",
            'max' => "17.5",
            'units' => "g/dL",
            'encounter_id' => 18,
            'laboratory_type_id' => 124,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 22,
            'current_value' => "45",
            'min' => "36",
            'max' => "53",
            'units' => "%",
            'encounter_id' => 18,
            'laboratory_type_id' => 125,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 23,
            'current_value' => "166",
            'min' => "150",
            'max' => "400",
            'units' => "x10^9/L",
            'encounter_id' => 18,
            'laboratory_type_id' => 121,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 24,
            'current_value' => "142",
            'min' => "136",
            'max' => "145",
            'units' => "mmol/L",
            'encounter_id' => 18,
            'laboratory_type_id' => 17,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 25,
            'current_value' => "3.8",
            'min' => "3.5",
            'max' => "5",
            'units' => "mmol/L",
            'encounter_id' => 18,
            'laboratory_type_id' => 18,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 26,
            'current_value' => "102",
            'min' => "95",
            'max' => "105",
            'units' => "mmol/L",
            'encounter_id' => 18,
            'laboratory_type_id' => 19,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 27,
            'current_value' => "24",
            'min' => "22",
            'max' => "28",
            'units' => "mmol/L",
            'encounter_id' => 18,
            'laboratory_type_id' => 20,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 28,
            'current_value' => "9",
            'min' => "7",
            'max' => "18",
            'units' => "meq/L",
            'encounter_id' => 18,
            'laboratory_type_id' => 126,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 29,
            'current_value' => "0.8",
            'min' => "0.6",
            'max' => "1.2",
            'units' => "mg/dL",
            'encounter_id' => 18,
            'laboratory_type_id' => 22,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 30,
            'current_value' => "199",
            'min' => "",
            'max' => "<200",
            'units' => "",
            'encounter_id' => 18,
            'laboratory_type_id' => 48,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 31,
            'current_value' => "62",
            'min' => ">62",
            'max' => "",
            'units' => "",
            'encounter_id' => 18,
            'laboratory_type_id' => 51,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 32,
            'current_value' => "128",
            'min' => "",
            'max' => "<130",
            'units' => "",
            'encounter_id' => 18,
            'laboratory_type_id' => 50,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 33,
            'current_value' => "145",
            'min' => "",
            'max' => "<150",
            'units' => "",
            'encounter_id' => 18,
            'laboratory_type_id' => 49,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 34,
            'current_value' => "105",
            'min' => "70",
            'max' => "110",
            'units' => "mg/dL",
            'encounter_id' => 18,
            'laboratory_type_id' => 23,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 35,
            'current_value' => "100",
            'min' => "60",
            'max' => "170",
            'units' => "mcg/dL",
            'encounter_id' => 18,
            'laboratory_type_id' => 144,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 36,
            'current_value' => "300",
            'min' => "250",
            'max' => "450",
            'units' => "mcg/dL",
            'encounter_id' => 18,
            'laboratory_type_id' => 139,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 37,
            'current_value' => "50",
            'min' => "20",
            'max' => "250",
            'units' => "ng/mL",
            'encounter_id' => 18,
            'laboratory_type_id' => 15,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 38,
            'current_value' => "300",
            'min' => "160",
            'max' => "950",
            'units' => "pg/mL",
            'encounter_id' => 18,
            'laboratory_type_id' => 140,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
        DB::table('laboratories')->insert([
            'id' => 39,
            'current_value' => "90",
            'min' => "80",
            'max' => "96",
            'units' => "fL",
            'encounter_id' => 18,
            'laboratory_type_id' => 130,
            'created_at' => new Carbon(new DateTime('2020-07-18 11:00'))
        ]);
    }
}
