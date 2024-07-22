<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex justify-between mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="text-sm text-gray-600 ms-2">{{ __('Recuérdame') }}</span>
                </label>
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md ms-2 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste la contraseña?') }}
                </a>
                @endif
            </div>

            <div class="w-full mt-4">
                <x-button class="flex items-center justify-center w-full text-lg text-center bg-pink-500">
                    {{ __('Iniciar sesión') }}
                </x-button>
            </div>

            <div class="flex justify-center w-full mt-4">
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none"
                    href="{{ route('register') }}">
                    {{ __('¿No tienes una cuenta? Regístrate aquí') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
