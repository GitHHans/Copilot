<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <img src="/assets/images/plane_icon.png" alt="Airplane Icon" id="plane-icon" class="airplane-icon" />

    <div id="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Title -->
            <div class="text-center custom-font flex items-center justify-center">
                <i class="bi bi-geo-alt-fill pplink-icon" id="pinpoint-link"></i>
                <div class="fade-out-container">
                    <x-login-signup-label for="title" :value="__('WELCOME BACK!')" class="fade-out-text" />
                </div>
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
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Remember Me -->
            <div class="flex justify-between mt-4">
                <label for="show_password" class="inline-flex items-center">
                    <input id="show_password" type="checkbox" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Show Password') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="underline text-xs text-gray-600 dark:text-gray-400 hover:text-gray-900" href="{{ route('password.request') }}">
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
                <a href="#" id="signup-link" class="underline text-xs">SIGN UP</a>
            </div>
        </form>
    </div>

    <div id="register-form" style="display: none;">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Title -->
            <div class="text-center custom-font">
                <x-login-signup-label for="title" :value="__('SIGN UP TO COPILOT')" />
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
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-2">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
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
                <a href="#" id="login-link" class="underline text-xs">Login</a>
            </div>
        </form>
    </div>
</x-guest-layout>
