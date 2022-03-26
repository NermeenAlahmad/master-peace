<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Humburger Menu</title> --}}
    <link rel="stylesheet" href="{{asset('public-css/regester.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('public-css/app.js')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
  <style>
    .logo img{
        height: 50px;
    }
 </style>
</head>
<body>
        <nav>
            <div class="logo"><img src="{{asset('./assets/public-img/logo1.png')}}" ></div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li><a href="{{ route('homepage.index' )}}">Home</a></li>
                <li><a href="{{ route('categories.index' )}}">All pets</a></li>
                <li><a href="{{ route('public-site.aboutus' )}}">About Us</a></li>
                <li class="nav-item">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <li class="nav-item">   <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a> </li>
                        @else
                        <li class="nav-item">  <a href="{{ route('login') }}" class="nav-link">Login</a> </li>

                            @if (Route::has('register'))
                        <li class="nav-item">      <a href="{{ route('register') }}" class="nav-link">Register</a> </li>
                            @endif
                        @endauth
                    </div>
                @endif
                  </li>
                <div class="closeMenu"><i class="fa fa-times"></i></div>
            </ul>
        </nav>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="./assets/public-img/logo2.png" style="height: 100px"  alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4 register-section"  />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="first_name" style="color: black;" value="{{ __('First Name') }}" />
                <x-jet-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            </div>

            <div>
                <x-jet-label for="last_name" style="color: black;" value="{{ __('Last Name') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" style="color: black;" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-jet-label for="phone" style="color: black;" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div>
                <x-jet-label for="address" style="color: black;" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="last_name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" style="color: black;" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" style="color: black;" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color: black;" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4" style="background-color:#C2F1DB; color:#496076">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

<script src="./app.js"></script>
</body>
</html>

