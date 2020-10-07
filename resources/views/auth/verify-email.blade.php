<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img class="logo_login" src="http://www.cnsu.edu/images/CNU_Logo_English.png" width="300" />
        </x-slot>
        <x-slot name="header">
            Electronic Medical Record
        </x-slot>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
        <x-slot name="footer">
            <h1 class="font-black">HIPAA Warning</h1>
            <h2>Patient information is confidential and should be used only for medical reason</h2>
        </x-slot>
    </x-jet-authentication-card>
</x-guest-layout>
