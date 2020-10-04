<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('providers')->insert([
            'lastname' => 'Puglisi',
            'firstname' => 'Jose',
            'title' => 'Dr.',
        ]);
        DB::table('providers')->insert([
            'lastname' => 'Fraga',
            'firstname' => 'Alvaro',
            'title' => 'Dr.',
        ]);
        DB::table('providers')->insert([
            'lastname' => 'Di Sivio',
            'firstname' => 'Guy',
            'title' => 'Dr.',
        ]);
        DB::table('providers')->insert([
            'lastname' => 'Ross',
            'firstname' => 'Michelle',
            'title' => 'Dr.',
        ]);

    }
}
