<?php

namespace App\Actions\Fortify;

use App\Models\Provider;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
                $this->createProvider($user);
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
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }

    /**
     * Create a personal provider for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createProvider(User $user)
    {
        $user->provider()->save(Provider::forceCreate([
            'user_id' => $user->id,
            'lastname' => explode(' ', $user->name, 2)[1] != null ? explode(' ', $user->name, 2)[1] : explode(' ', $user->name, 2)[0],
            'firstname' => explode(' ', $user->name, 2)[0],
            'title' => 'Dr.',
        ]));
    }
}
