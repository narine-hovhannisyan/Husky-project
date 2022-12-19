<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<x-guest-layout>
    <x-auth-card-register>
        <x-slot name="logo">
        {{--    <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>--}}
        </x-slot>

 {{--       <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>--}}

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card" style="border-radius: 30px;">
                {{--                <div class="col-12 col-md-8 col-lg-8 col-xl-4 ">--}}
                <div class="card-body p-5 form-style">
                    {{--Firget--}}
                    <div class="text-center">
                        <h3 class="mb-5 reset text-center">FORGET PASSWORD</h3>
                    </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" class="t1"  :value="__('Email Address')" />
                <x-text--input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="w-full text-center forget-button">

                    {{ __('Send') }}
                </button>
            </div>
                    <div class="text-center mt-4">
                        <a class="text-dark no-underline signsup" href="{{ route('login')  }}">
                            {{ __('SIGN IN') }}
                        </a>

                    </div>
                </div>
            </div>
        </form>
    </x-auth-card-register>
</x-guest-layout>
