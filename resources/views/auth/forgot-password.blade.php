<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img class="logo_login" src="/storage/logo\CNU_Logo_English.png" width="300" />
        </x-slot>
        <x-slot name="header">
            Electronic Medical Record
        </x-slot>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
        <x-slot name="footer">
            <h1 class="font-black">HIPAA Warning</h1>
            <h2>Patient information is confidential and should be used only for medical reason</h2>
        </x-slot>
    </x-jet-authentication-card>
</x-guest-layout>
