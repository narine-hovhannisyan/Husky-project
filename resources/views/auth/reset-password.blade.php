<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<x-guest-layout>
    <x-auth-card-register>
        <x-slot name="logo">
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
        </x-slot>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <div class="card" style="border-radius: 30px;">
                {{--         CREATE NEW PASSWORD        <div class="col-12 col-md-8 col-lg-8 col-xl-4 ">--}}
                <div class="card-body p-5">
                    <div class="text-center">
                        <h3 class="reset">CREATE NEW PASSWORD</h3>
                    </div>
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" class="t1" :value="__('New Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" class="t1"  :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
{{--                <x-primary-button>--}}
{{--                    {{ __('Reset Password') }}--}}
{{--                </x-primary-button>--}}

{{--                <div class="mt-3" >--}}

                    <button class="text-center  reset-button mt-3">
                        {{--                <x-primary-button-login >--}}
                        {{ __('Reset Password') }}
                        {{--                </x-primary-button-login>--}}
                    </button>

{{--                </div>--}}
            </div>
                </div>
            </div>
        </form>
    </x-auth-card-register>
</x-guest-layout>
