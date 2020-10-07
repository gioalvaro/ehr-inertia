<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img class="logo_login" src="http://www.cnsu.edu/images/CNU_Logo_English.png" width="300" />
        </x-slot>
        <x-slot name="header">
            Electronic Medical Record
        </x-slot>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label value="{{ __('Username') }}" />
                <x-jet-input class="block mt-1 w-full" type="username" name="username" :value="old('username', $request->username)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
        <x-slot name="footer">
            <h1 class="font-black">HIPAA Warning</h1>
            <h2>Patient information is confidential and should be used only for medical reason</h2>
        </x-slot>
    </x-jet-authentication-card>
</x-guest-layout>
