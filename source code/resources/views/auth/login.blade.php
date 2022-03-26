<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Humburger Menu</title>
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
            <div class="logo"><img src="{{asset('./assets/public-img/logo1.png')}}"></div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li><a href="{{ route('homepage.index' )}}">Home</a></li>
                <li><a href="{{ route('categories.index' )}}">All pets</a></li>
                <li><a href="{{ route('public-site.aboutus' )}}">About us</a></li>
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

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium bg-whitee text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" >
            @csrf

            <div>
                <x-jet-label for="email" style="color: black;" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" style="color: black;" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600" style="color: black;"> {{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color: black;" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4" style="background-color:#C2F1DB; color:#496076">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

<script src="{{asset('public-css/app.js')}}"></script>
</body>
</html>
