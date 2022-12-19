<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<x-guest-layout>
    <x-auth-card-register >
        <x-slot name="logo">
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}

        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
{{--              <link rel="stylesheet" href="resources/css/main.css">--}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card" style="border-radius: 30px;">
                <div class="card-body p-5">
                    <div class="text-center">
                        <h3 class="mb-3 signin">SIGN IN</h3>
                    </div>
            <!-- Email Address -->
            <div>
                <x-input-label for="email" class="t1"  :value="__('Email')" />
                <x-text--input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4 t1">
                <x-input-label  for="password" class="t1"  :value="__('Password')" />

                <x-text--input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 text-sm">
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-fuchsia-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 float-right hover:text-fuchsia-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="mt-3" >

                <button class="text-center  sign-button mt-3">

{{--                <x-primary-button-login >--}}
                    {{ __('Sign In') }}
{{--                </x-primary-button-login>--}}
                </button>

            </div>

          {{--  <div class="block mt-4">--}}
            <div class="text-center mt-3">
                    <a class="text-dark no-underline signsup " href="{{ route('register') }}">
                        {{ __('SIGN UP') }}
                    </a>

            </div>
                </div>
                </div>
        </form>

    </x-auth-card-register>

</x-guest-layout>
