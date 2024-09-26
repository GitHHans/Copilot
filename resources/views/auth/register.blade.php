<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf


         <!-- Title -->
         <div class="text-center custom-font">
            <x-login-signup-label for="title" :value="__('SIGN UP TO COPILOT')"/>
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Log in Button -->
        <div class="flex flex-col items-center text-center mt-4">
            <x-primary-button class="center-text ms-3 px-6 py-3 w-3/4">
                {{ __('Sign up') }}
            </x-primary-button>
        </div>

        <!-- Link to Registration -->
        <div class="items-center mt-4 text-center">  
            <label for="registered-user" class="inline-flex items-center">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Already Registered?') }}</span>
            </label>
            <a href="{{ route('login') }}" class="underline text-xs">Login</a>
        </div>
    </form>
</x-guest-layout>
