<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                  <a href="{{'/'}}"> <img class="logo" src="{{ asset('images/logo.png')}}" alt=""> </a>
                </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{ route('dishes-admin')}}">Dishes</a><li>
                      <li><a href="{{ route('contact-index')}}">Contact</a><li>
                        @if (Auth::check())
                          <li><a href="#">Reservations</a><li>
                          <li><a href="{{ route('order')}}">Orders</a><li>
                            <li class="dropdown">

                              @if (Auth::check())
                                @if (Auth::user()->isAdmin())

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                  Admin
                                    <span class="caret"></span>
                                </a>
                                @elseif (Auth::user())
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{Auth::user()->name}}
                                      <span class="caret"></span>
                                  </a>
                                @endif
                              @endif


                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="#"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Users
                                      </a>
                                      <a href="#"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Profile
                                      </a>
                                        <a href="#"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>


                                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @else
                              <li><a href="{{route('login')}}">Login</a><li>
                              <li><a href="{{route('register')}}">Register</a><li>
                        @endif

                      <li><a href="{{route('cart-index')}}">Cart
                        (<span class="cart-size">{{ $cartSize }}</span>) -
                        <span class="cart-total">{{ $cartTotal }}</span>
                        <span>$</span>
                      </a><li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
