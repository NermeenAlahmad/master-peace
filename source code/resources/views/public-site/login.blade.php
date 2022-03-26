@extends('public-site.layouts.master')
@section('content')

<form method="POST" action="users">
    @csrf
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card text-white login-section" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase login-color">Login</h2>
                <p class="text-white-50 mb-5">Please enter your email and password!</p>

                <div class="form-outline form-white mb-4">
                    <label class="form-label text-start" for="typeEmailX">Email</label>
                  <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />

                </div>

                <div class="form-outline form-white mb-4">
                  <label class="form-label text-start" for="typePasswordX">Password</label>
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" />

                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                <button class="btn btn-outline-light btn-lg px-5 login-btn" type="submit">Login</button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="icon-color"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="icon-color"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="icon-color"><i class="fab fa-google fa-lg"></i></a>
                </div>

              </div>

              <div>
                <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="./assets/public-img/logo2.png" style="height: 100px"  alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600" style="background-color: #496076">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="">
            @csrf

            <div class="form-outline form-white mb-4">
                <x-jet-label for="email"  class="form-label text-start" style="color: white;" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus />
                {{-- <label class="form-label text-start" for="typeEmailX">Email</label>
              <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" /> --}}

            </div>

            <div class="form-outline form-white mb-4">
                {{-- <label class="form-label text-start" for="typePasswordX">Password</label>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" /> --}}
                <x-jet-label for="password" class="form-label text-start" style="color: white;" value="{{ __('Password') }}" />
                <x-jet-input id="password"  class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />

              </div>

            {{-- <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div> --}}

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600" style="color: white;">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" style="color: white;" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="btn btn-outline-light btn-lg px-5 login-btn">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


@endsection
