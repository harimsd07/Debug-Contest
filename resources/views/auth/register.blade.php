<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Phone Number --}}
        <div class="mt-4">
            <x-input-label for="mobnumber" :value="__('Mobile Number')" />
            <x-text-input id="mobnumber" class="block mt-1 w-full" type="text" name="mobnumber" :value="old('mobnumber')" required autocomplete="mobnumber" />
            <x-input-error :messages="$errors->get('mobnumber')" class="mt-2" />
        </div>

        {{-- College code --}}
        <div class="mt-4">
            <x-input-label for="collegecode" :value="__('College code')" />
            <x-text-input id="collegecode" class="block mt-1 w-full" type="text" name="collegecode" :value="old('collegecode')" required autocomplete="collegecode" />
            <x-input-error :messages="$errors->get('collegecode')" class="mt-2" />
        </div>


        {{-- College Name --}}
        <div class="mt-4">
            <x-input-label for="collegename" :value="__('College Name')" />
            <x-text-input id="collegename" class="block mt-1 w-full" type="text" name="collegename" :value="old('collegename')" required autocomplete="collegename" />
            <x-input-error :messages="$errors->get('collegename')" class="mt-2" />
        </div>

        {{-- Register Number --}}
        <div class="mt-4">
            <x-input-label for="regnumber" :value="__('Register Number')" />
            <x-text-input id="regnumber" class="block mt-1 w-full" type="text" name="regnumber" :value="old('regnumber')" required autocomplete="regnumber" />
            <x-input-error :messages="$errors->get('regnumber')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
