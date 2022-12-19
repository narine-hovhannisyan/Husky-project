
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<x-guest-layout>

    <x-auth-card-register>
        <x-slot name="logo">
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            <div class="container py-2 h-100">
            @csrf
            <div class="card" style="border-radius: 30px;">
{{--                <div class="col-12 col-md-8 col-lg-8 col-xl-4 ">--}}
            <div class="card-body p-5">
                <!-- Sign In -->
                <div class="text-center">
                    <h3 class="mb-3 signup">SIGN UP</h3>
                </div>
                {{--kkk--}}
            <!-- Name -->
                <div class="mt-2" >
{{--                <div class="form-group row">--}}
                <x-input-label for="firstname" class="t1"  :value="__('First Name')" />
                <x-text--input class="block mt-1 w-full inputstile" id="firstname" type="text" name="firstname" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
{{--                </div>--}}
                </div>
            <div class="mt-2" >
{{--                <div class="form-group row">--}}
                <x-input-label for="lastname" class="t1"  :value="__('Last Name')" />
                <x-text--input id="lastname"  class="block mt-1 w-full upbutton inputstile" type="text" name="lastname" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
{{--            </div>--}}
            </div>
            <!-- Email Address -->
            <div class="mt-2">
{{--                <div class="form-group row">--}}
                <x-input-label for="email" class="t1" :value="__('Email')" />
                <x-text--input id="email"  class="block mt-1 w-full inputstile" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
{{--            </div>--}}
            </div>

            <!-- Password -->
            <div class="mt-2">
{{--                <div class="form-group row">--}}
                <x-input-label for="password" class="t1" :value="__('Password')" />

                <x-text--input id="password" class="block mt-1 w-full inputstile "
                              type="password"
                              name="password"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
{{--            </div>--}}
            </div>
            <!-- Confirm Password -->
            <div class="mt-2">
{{--                <div class="form-group row">--}}
                <x-input-label for="password_confirmation" class="t1"  :value="__('Confirm Password')" />

                <x-text--input id="password_confirmation" class="block mt-1 w-full inputstile "
                              type="password"
                              name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
{{--            </div>--}}
                <div class="content mt-3 text-sm ">
                    <a  class="nderline text-sm text-gray-600 float-right hover:text-fuchsia-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>








                <div class="flex items-center justify-end mt-10">
             {{--   <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>--}}





                 {{--   <x-primary-button-login class="ml-20">
                        {{ __('Register') }}
                    </x-primary-button-login>--}}

{{--                <button class="button5   form-control mt-3">  {{ __('Sign up') }}</button>--}}


                <button class="text-center  sign-button mt-3">
                    {{--                <x-primary-button-login >--}}
                    {{ __('Sign up') }}
                    {{--                </x-primary-button-login>--}}
                </button>

                {{-- <x-primary-button-login >
                     {{ __('Log in') }}
                 </x-primary-button-login>
--}}

{{--                Sign in --}}

            </div>
{{--                <div class="content">--}}
{{--                    <a href="forget" class="link">Forget Password</a>--}}
{{--                </div>--}}
                <div class="text-center mt-4">
                    <a class="text-dark no-underline signsup" href="{{ route('login')  }}">
                        {{ __('SIGN IN') }}
                    </a>

                </div>
            </div>

            </div>

                </div>
        </form>
        </div>
    </x-auth-card-register>
</x-guest-layout>
