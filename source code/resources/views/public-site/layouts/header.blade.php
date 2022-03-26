<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css -->
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('public-css/regester.css')}}">
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>

{{-- test --}}

{{-- slider --}}

<!--===============================================================================================-->
<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.cs')}}s">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/MagnificPopup/magnific-popup.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- login -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('register/css/signUp-style.css')}}" rel="stylesheet" type="text/css" media="all" />

<!-- //Custom Theme files -->
<!-- web font -->
<link href="{{asset('//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i')}}" rel="stylesheet">

<!-- //web font -->

{{-- end slider --}}



</head>
<body class="animsition">
    <nav>
        <div class="logo"> <a href="{{ route('homepage.index' )}}"><img src="{{asset('./assets/public-img/logo1.png')}}"  alt=""></a></div>
        <div class="openMenu"><i class="fa fa-bars"></i></div>
        <ul class="mainMenu">
            <li><a href="{{ route('homepage.index' )}}">Home</a></li>
            <li><a href="{{ route('categories.index' )}}">All pets</a></li>
            <li><a href="{{ route('public-site.aboutus' )}}">About us</a></li>
            @if(!empty(Auth::user()))
                <li><a href="{{ route('createAdopt.index' )}}">Adopt form </a></li>
            @endif
            <li>
                @if (Route::has('login'))
                <div>
                    @auth
                    <li>
                         <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link> </a>

                    </li>

<li>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 this.closest('form').submit();">
            {{ __('Logout') }}
        </x-jet-responsive-nav-link>
    </form>
</li>
                    <li>
                        {{-- @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                       @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-jet-responsive-nav-link>
                    </form> --}}
                    </li>

                    @else
                    <li>  <a href="{{ route('login') }}">Login</a> </li>

                        @if (Route::has('register'))
                    <li>      <a href="{{ route('register') }}">Register</a> </li>
                        @endif
                    @endauth
                </div>
            @endif
              </li>
            <div class="closeMenu"><i class="fa fa-times"></i></div>
        </ul>
    </nav>
            </ul>




          </div>
        </div>
      </nav>

