<?php

namespace App\Actions\Fortify;

use App\Models\Provider;
use App\Models\Encounter;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Log;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'username' => $input['username'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $provider = $this->createProvider($user);
                $encounter = $this->createEncounters($provider);
                $this->createMedications($encounter);
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));
    }

    /**
     * Create a personal provider for the user.
     *
     * @param  \App\Models\User  $user
     * @return \App\Models\Provider
     */
    protected function createProvider(User $user)
    {
        $user->provider()->save(Provider::forceCreate([
            'user_id' => $user->id,
            'lastname' => count(explode(' ', $user->name, 2)) > 1 ? explode(' ', $user->name, 2)[1] : explode(' ', $user->name, 2)[0],
            'firstname' => explode(' ', $user->name, 2)[0],
            'title' => 'Dr.',
        ]));
        return Provider::where('user_id', '=', $user->id)->first();
    }

    /**
     * Create a personal encounter for the user.
     *
     * @param  \App\Models\Provider $provider
     * @return \App\Models\Encounter $encounter
     */
    protected function createEncounters(Provider $provider)
    {

        $faker = \Faker\Factory::create();
        DB::table('encounters')->insertGetId([
            'provider_id' => $provider->id,
            'patient_id' => 1,
            'department_id' => 1,
            'reason' => 'Abdominal Pain',
            'scheduled_time' => new Carbon(new DateTime('2020-10-06 9:00')),
            'arrival_time' => new Carbon(new DateTime('2020-10-06 8:55')),
            'check' => false,
            'temperature' => 102,
            'temperature_type' => 'oral',
            'bmi' => 29,
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'bp' => '120/60',
            'hr' => 110,
            'rr' => 18,
            'height' => 70,
            'weight' => 200,
            'osat' => 98,
            'test' => false,
            'open' => false
        ]);
        DB::table('encounters')->insertGetId([
            'provider_id' => $provider->id,
            'patient_id' => 2,
            'department_id' => 1,
            'reason' => 'Difficulty in breast feeding',
            'scheduled_time' => new Carbon(new DateTime('2020-11-10 9:30')),
            'arrival_time' => new Carbon(new DateTime('2020-11-10 9:25')),
            'check' => false,
            'temperature' => 98.2,
            'temperature_type' => 'oral',
            'bmi' => 18.8,
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            // 'ga' => $faker->randomNumber(2),
            // 'edd' => $faker->randomNumber(2),
            // 'gptal' => $faker->randomNumber(2),
            // 'lmp' => $faker->randomNumber(2),
            'bp' => '90/70',
            'hr' => 92,
            'rr' => 12,
            'osat' => 98,
            'test' => false,
            'open' => false
        ]);
        DB::table('encounters')->insertGetId([
            'provider_id' => $provider->id,
            'patient_id' => 3,
            'department_id' => 1,
            'reason' => 'Missing Period',
            'scheduled_time' => new Carbon(new DateTime('2020-10-06 10:00')),
            'arrival_time' => new Carbon(new DateTime('2020-10-06 9:55')),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'ga' => $faker->randomNumber(2),
            'edd' => $faker->randomNumber(2),
            'gptal' => $faker->randomNumber(2),
            'lmp' => $faker->randomNumber(2),
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => false,
            'open' => false
        ]);
        DB::table('encounters')->insertGetId([
            'provider_id' => $provider->id,
            'patient_id' => 4,
            'department_id' => 1,
            'reason' => 'Falling',
            'scheduled_time' => new Carbon(new DateTime('2020-10-06 10:30')),
            'arrival_time' => new Carbon(new DateTime('2020-10-06 10:20')),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => $faker->randomNumber(2),
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 120/60; HR: 100; RR: 25; O2sat: 98%(RA)',
            'ga' => $faker->randomNumber(2),
            'edd' => $faker->randomNumber(2),
            'gptal' => $faker->randomNumber(2),
            'lmp' => $faker->randomNumber(2),
            'bp' => '120/60',
            'hr' => 100,
            'rr' => 25,
            'osat' => 98,
            'test' => false,
            'open' => false
        ]);
        $encounter = DB::table('encounters')->insertGetId([
            'provider_id' => $provider->id,
            'patient_id' => 5,
            'department_id' => 1,
            'reason' => 'Falling',
            'scheduled_time' => new Carbon(new DateTime('2020-03-02 11:00')),
            'arrival_time' => new Carbon(new DateTime('2020-03-02 10:50')),
            'check' => false,
            'temperature' => 36,
            'temperature_type' => 'oral',
            'bmi' => 18.5,
            'allergies' => 'None',
            'allergies_check' => false,
            'current_vitals' => 'BP: 135/75; HR: 88; RR: 12; O2sat: 98%(RA)',
            'bp' => '135/78',
            'hr' => 88,
            'rr' => 12,
            'osat' => 98,
            'test' => false,
            'open' => true
        ]);

        return $encounter;
    }

    /**
     * Create a medication verification to false.
     * 
     * @param \App\Models\Encounter $encounter
     * @return void
     */
    protected function createMedications($encounter)
    {
        /*DB::table('medication_verifications')->insert([
            'encounter_id' => $encounter,
            'medication_id' => 1,
            'discontinued' => false,
            'verified' => false
        ]);
        DB::table('medication_verifications')->insert([
            'encounter_id' => $encounter,
            'medication_id' => 2,
            'discontinued' => false,
            'verified' => false
        ]);
        DB::table('medication_verifications')->insert([
            'encounter_id' => $encounter,
            'medication_id' => 3,
            'discontinued' => false,
            'verified' => false
        ]);
        DB::table('medication_verifications')->insert([
            'encounter_id' => $encounter,
            'medication_id' => 4,
            'discontinued' => false,
            'verified' => false
        ]);
        DB::table('medication_verifications')->insert([
            'encounter_id' => $encounter,
            'medication_id' => 5,
            'discontinued' => false,
            'verified' => false
        ]);*/
        DB::table('medication_verifications')->insert([
            'encounter_id' => $encounter,
            'medication_id' => 6,
            'discontinued' => false,
            'verified' => false
        ]);
        DB::table('medication_verifications')->insert([
            'encounter_id' => $encounter,
            'medication_id' => 7,
            'discontinued' => false,
            'verified' => false
        ]);
        DB::table('medication_verifications')->insert([
            'encounter_id' => $encounter,
            'medication_id' => 8,
            'discontinued' => false,
            'verified' => false
        ]);
    }
}
