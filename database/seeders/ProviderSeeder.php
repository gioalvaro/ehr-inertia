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
            'lastname' => 'Puglisi',
            'firstname' => 'Jose',
            'title' => 'Dr.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'lastname' => 'Fraga',
            'firstname' => 'Alvaro',
            'title' => 'Dr.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'lastname' => 'Di Sivio',
            'firstname' => 'Guy',
            'title' => 'Dr.',
            'user_id' => $user_id['id']
        ]);
        DB::table('providers')->insert([
            'lastname' => 'Ross',
            'firstname' => 'Michelle',
            'title' => 'Dr.',
            'user_id' => $user_id['id']
        ]);

    }
}
