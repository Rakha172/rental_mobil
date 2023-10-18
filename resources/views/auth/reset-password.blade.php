<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

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
            let password_confirmation = document.getElementById("password_confirmation");

            show.onclick = function() {
                if (password.type && password_confirmation.type == "password") {
                    password.type = "text";
                    password_confirmation.type = "text";
                } else {
                    password.type = "password";
                    password_confirmation.type = "password";
                }
            }
        </script>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
