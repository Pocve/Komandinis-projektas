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
                    <img class="logo" src="{{ asset('images/logo.png')}}" alt="">
                </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Dishes</a><li>
                      <li><a href="#">Contact</a><li>
                      <li><a href="#">Reservations</a><li>
                      <li><a href="#">Orders</a><li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                              Admin
                                <span class="caret"></span>
                            </a>

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


                                    <form id="logout-form" action="" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                      <li><a href="#">Cart</a><li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
