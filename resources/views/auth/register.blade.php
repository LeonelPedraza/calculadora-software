<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="grid items-center grid-cols-1 gap-4 md:grid-cols-2">

                <div>
                    <x-label for="name" value="{{ __('Nombre*') }}" />
                    <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div>
                    <x-label for="last_name" value="{{ __('Apellidos*') }}" />
                    <x-input id="last_name" class="block w-full mt-1" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                </div>

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                        autocomplete="username" />
                </div>

                <div>
                    <x-label for="country" value="{{ __('País*') }}" />
                    <x-input id="country" class="block w-full mt-1" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
                </div>

                <div>
                    <x-label for="movile_phone" value="{{ __('Teléfono móvil*') }}" />
                    <x-input id="movile_phone" class="block w-full mt-1" type="text" name="movile_phone" :value="old('movile_phone')" required autofocus autocomplete="movile_phone" />
                </div>

                <div>
                    <x-label for="home_phone" value="{{ __('Teléfono casa') }}" />
                    <x-input id="home_phone" class="block w-full mt-1" type="text" name="home_phone" :value="old('home_phone')" autofocus autocomplete="home_phone" />
                </div>

                <div class="">
                    <x-label for="role" value="{{ __('Soy*') }}" />
                    <x-input id="role" class="block w-full mt-1" type="text" name="role" :value="old('role')" autofocus autocomplete="role" />
                </div>

                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div>
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('Estoy de acuerdo con los :terms_of_service y :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Términos de uso').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Políticas de privacidad').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end w-full mt-4">
                <x-button class="flex items-center justify-center w-full text-lg text-center bg-pink-500 focus:bg-pink-600 focus:outline-none focus:border-none">
                    {{ __('Registrarme') }}
                </x-button>
            </div>
            <div class="flex items-center justify-center w-full mt-4">
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none" href="{{ route('login') }}">
                    {{ __('¿Ya registrado? Entra aquí') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
