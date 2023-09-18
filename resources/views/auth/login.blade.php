
<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <label for="show" class="inline-flex items-center mt-4">
                <input id="show" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm
                   focus:ring-indigo-500"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Show password') }}</span>
            </label>
            <script>
                let show = document.getElementById("show");
                let password = document.getElementById("password");

                show.onclick = function() {
                    if(password.type == "password"){
                        password.type = "text";
                    } else {
                        password.type = "password";
                    }
                }
            </script>
        </div>

        <div class="flex justify-left mt-5" style="position: absolute;">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 "
            href="{{ route('register') }}">
            {{ __('Make account') }}
            </a>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
