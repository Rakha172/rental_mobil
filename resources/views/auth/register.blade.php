<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
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
            <x-input-label for="phone_number" :value="__('phone_number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" :value="old('phone_number')"
                required autocomplete="phone_number" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="address" :value="__('address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>


        <div class="form-floating">
            <x-input-label for="id_card_photo" :value="__('id_card_photo')" />
            <input style="border-radius: 5px; border: rgba(185, 184, 184, 0.637) 1px solid;" type="file"
                name="id_card_photo" class="block mt-1 w-full @error('id_card_photo') is-invalid @enderror"
                id="id_card_photo" value="{{ old('id_card_photo') }}" accept="image/*"
                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
            @error('id_card_photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="mt-3"><img src="" id="output" width="300"></div>
        </div>

        <div class="form-floating">
            <x-input-label for="driver_licence_photo" :value="__('driver_licence_photo')" />
            <input style="border-radius: 5px; border: rgba(185, 184, 184, 0.637) 1px solid;" type="file"
                name="driver_licence_photo" class="block mt-1 w-full @error('driver_licence_photo') is-invalid @enderror"
                id="driver_licence_photo" value="{{ old('driver_licence_photo') }}" accept="image/*"
                onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])">
            @error('driver_licence_photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="mt-3"><img src="" id="output2" width="300"></div>
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
