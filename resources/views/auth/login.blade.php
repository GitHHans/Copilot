<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <img src="/assets/images/plane_icon.png" alt="Airplane Icon" id="plane-icon" class="airplane-icon" />

    <form method="POST" action="{{ route('login') }}" >
        @csrf

        <!-- Title -->
        <div class="text-center custom-font">
            <x-login-signup-label for="title" :value="__('WELCOME BACK!')"/>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between mt-4">
            <label for="show_password" class="inline-flex items-center">
                <input id="show_password" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Show Password') }}</span>
            </label>
            @if (Route::has('password.request'))
                <a class="flex items-start justify-center underline text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 mt-2" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

       

        <!-- Log in Button -->
        <div class="flex flex-col items-center text-center mt-4">
            <x-primary-button id="login-button" class="center-text ms-3 px-6 py-3 w-3/4 mt-4">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Link to Registration -->
        <div class="items-center mt-6 text-center">  
            <label for="new-register" class="inline-flex items-center">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('NEW TO COPILOT?') }}</span>
            </label>
            <a href="{{ route('register') }}" id="signup-link" class="underline text-xs">SIGN UP</a>
        </div>
    </form>
</x-guest-layout>
