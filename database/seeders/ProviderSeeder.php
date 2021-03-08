<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
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
        $user_id = User::factory()->create();
        $faker = \Faker\Factory::create();
        DB::table('providers')->insert([
            'id' => 1,
            'lastname' => 'Ross',
            'firstname' => 'Michelle',
            'title' => 'Dr.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 2,
            'lastname' => 'Pelagatti',
            'firstname' => 'Andrea',
            'title' => 'Dr.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 3,
            'lastname' => 'Johnson',
            'firstname' => 'Ross',
            'title' => 'Dr.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 4,
            'lastname' => 'Portales',
            'firstname' => 'Rachel',
            'title' => 'Mrs.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 5,
            'lastname' => 'Kim',
            'firstname' => 'Sue',
            'title' => 'Mrs.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 6,
            'lastname' => 'Nadal',
            'firstname' => 'Florence',
            'title' => 'Mrs.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 7,
            'lastname' => 'Hanssen',
            'firstname' => 'Hilda',
            'title' => 'Mrs.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 8,
            'lastname' => 'Murphy',
            'firstname' => 'Pastor',
            'title' => 'Mr.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 9,
            'lastname' => 'OTC',
            'firstname' => '',
            'title' => ''
        ]);
        DB::table('providers')->insert([
            'id' => 10,
            'lastname' => 'Macri',
            'firstname' => 'Mary',
            'title' => 'Dr.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 11,
            'lastname' => 'Awada',
            'firstname' => 'Michelle',
            'title' => 'Mrs.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 12,
            'lastname' => 'Chang',
            'firstname' => 'Mei',
            'title' => 'Mrs.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'id' => 13,
            'lastname' => 'Vidal',
            'firstname' => 'Eugene',
            'title' => 'Mrs.',
            'user_id' => $user_id['id']
        ]);
    }
}
