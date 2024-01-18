<x-guest-layout>
    <style>
        body {
            background-color: #fff;
            overflow: hidden;
        }

        .pizza-form {
            background-color: #fff;
            padding: 3px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pizza-title {
            font-size: 24px;
            font-weight: bold;
            color: #ff4500;
            text-align: center;
            margin-bottom: 20px;
        }

        .pizza-form input {
            color: #fff; 
            background-color: #333;
            border: 1px solid #fff; 
            padding: 8px;
        }

        .pizza-form label {
            color: #333; 
        }
</style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Pizza-themed form -->
    <div class="absolute w-screen h-screen z-10 top-0">
    <div class="pizza-form h-screen w-screen left-0">
        <div class="pizza-title">{{ __('🍕 Welcome to Stonks Pizza\'s ') }}</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('🍕 Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('📧 Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('🔒 Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('🔒 Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Login link and Register button -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    </div>
</x-guest-layout>
