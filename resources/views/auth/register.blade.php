<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        {{-- kolom --}}
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="form-floating">
            <x-input-label for="Gender" :value="__('Gender')" />
            <select name="gender" style="border-radius: 5px; border: rgba(185, 184, 184, 0.637) 1px solid;"
                class="block mt-1 w-full @error('gender') is-invalid @enderror">
                <option value="">Choose</option>
                <option @selected(old('gender') == 'Male') value="Male">Male</option>
                <option @selected(old('gender') == 'Female') value="Female">Female</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number"
                :value="old('phone_number')" required autocomplete="phone_number" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>


        <div class="form-floating">
            <x-input-label for="id_card_photo" :value="__('Id Card Photo')" />
            <input style="border-radius: 5px; border: rgba(185, 184, 184, 0.637) 1px solid;" type="file"
                name="id_card_photo" class="block mt-1 w-full" id="id_card_photo" value="{{ old('id_card_photo') }}"
                accept="image/*"
                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            <div class="block mt-1 w-full"><img src="" id="output" height="30"></div>
            <x-input-error :messages="$errors->get('id_card_photo')" class="mt-2" />
        </div>

        <div class="form-floating">
            <x-input-label for="driver_licence_photo" :value="__('Driver Licence Photo')" />
            <input style="border-radius: 5px; border: rgba(185, 184, 184, 0.637) 1px solid;" type="file"
                name="driver_licence_photo" class="block mt-1 w-full" id="driver_licence_photo"
                value="{{ old('driver_licence_photo') }}" accept="image/*"
                onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])">
            <div class="block mt-1 w-full"><img src="" id="output2" height="30""></div>
            <x-input-error :messages="$errors->get('driver_licence_photo')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="email" />
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
            <input id="show" type="checkbox"
                class="rounded border-gray-300 text-indigo-600 shadow-sm
                focus:ring-indigo-500"
                name="show" id="show">
            <span class="ml-2 text-sm text-gray-600">{{ __('Show password') }}</span>
            <script>
                let show = document.getElementById("show")
                let password = document.getElementById("password")
                let password_confirmation = document.getElementById("password_confirmation")

                show.onclick = function() {
                    if (password_confirmation.type && password.type == "password") {
                        password_confirmation.type = "text";
                        password.type = "text";
                    } else {
                        password_confirmation.type = "password"
                        password.type = "password"
                    }
                }
            </script>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
