<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">
            <input id="show" type="checkbox"
                class="rounded border-gray-300 text-indigo-600 shadow-sm
            focus:ring-indigo-500"
                name="show" id="show">
            <span class="ml-2 text-sm text-gray-600">{{ __('Show password') }}</span>
            <script>
                let show = document.getElementById("show");
                let current_password = document.getElementById("current_password");
                let password = document.getElementById("password");
                let password_confirmation = document.getElementById("password_confirmation");

                show.onclick = function() {
                    if (password.type && current_password.type && password_confirmation.type == "password") {
                         password.type = "text";
                         current_password.type = "text";
                         password_confirmation.type = "text";
                    } else {
                        password.type = "password";
                        current_password.type = "password";
                        password_confirmation.type = "password";
                    }
                }
            </script>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
