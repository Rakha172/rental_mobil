<section>
    @if ($user->role == 'admin')
        <a class="class="btn btn-primary mb-5" href="{{ route('admin.index') }}"><ion-icon style="font-size: 40px"
                name="arrow-back-circle-outline"></ion-icon></a>
    @else
        <a class="class="btn btn-primary mb-5" href="{{ route('homepage.index') }}"><ion-icon style="font-size: 40px"
                name="arrow-back-circle-outline"></ion-icon></a>
    @endif
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800" style="color:red;">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>

    {{-- <form method="post" action="{{ route('register.update', $user->id) }}" class="mt-6 space-y-6"  enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="name" :value="__('Id Card')" /> --}}
            {{-- <x-text-input id="id_card_photo" name="id_card_photo" type="file" class="mt-1 block w-full" :value="old('id_card_photo', $user->id_card_photo)"accept="image/*" --}}
            {{-- onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"/> --}}
            {{-- <div class="block mt-1 w-full"><img src="{{asset($user->id_card_photo)}}" id="output" height="30"></div>
            <x-input-error :messages="$errors->get('id_card_photo')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Driver Licence')" /> --}}
            {{-- <input style="border-radius: 5px; border: rgba(185, 184, 184, 0.637) 1px solid;" type="file" --}}
                {{-- name="driver_licence_photo" class="block mt-1 w-full" id="driver_licence_photo" --}}
                {{-- value="{{ old('driver_licence_photo') }}" accept="image/*" --}}
                {{-- onchange="document.getElementById('output2').src = window.URL.createObjectURL(this.files[0])"> --}}
            {{-- <div class="block mt-1 w-full"><img src="{{ asset($user->driver_licence_photo)}}" id="output2" height="30""></div>
            <x-input-error class="mt-2" :messages="$errors->get('driver_licence_photo')" />
        </div> --}}
        {{-- <div class="flex items-center gap-4"> --}}
            {{-- <x-primary-button>{{ __('Save') }}</x-primary-button> --}}
            {{-- @if (session('status') === 'profile-updated') --}}
                {{-- <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" --}}
                    {{-- class="text-sm text-gray-600">{{ __('Saved.') }}</p> --}}
            {{-- @endif --}}
        {{-- </div> --}}
    </form>
</section>
