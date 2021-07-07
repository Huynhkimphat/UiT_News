<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Styles -->
    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/Footer.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Footer</title>
            <!-- Link to CSS -->
            <link rel="stylesheet" href="../Footer/assets/css/Footer.css">
            <!-- Bootstrap  -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <!-- Js -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
            </script>
            <!-- Icon -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

        </head>


        <body>
            <footer class="bg-dark text-white text-center text-lg-start">
                <!-- Grid container -->
                <div class="container p-4">
                    <!--Grid row-->
                    <div class="row">
                        <!-- first row -->
                        <div class="row rowFirst">
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                                <!-- Logo -->
                                <a href="#!" class="footer-logo">
                                    <img src="../images/logo.png" alt="footer_logo" class="img-thumbnail w-100"
                                        style="width: 300px;height: 250px;">
                                </a>
                                <!-- Text -->
                                <p style="text-align:justify">
                                    Circle News is an operational information division of the UIT responsible for the gathering
                                    and broadcasting of news and current affairs around the world. Circle News, giving
                                    information on its origins, as well.
                                </p>
                            </div>
                            <!--Grid column-->
                            <div class="col-lg-2"></div>
                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase text-danger toogleText1">Discover</h5>

                                <ul class="list-unstyled mb-0 toogleMobile1">
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Latest</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">View</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">World</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Technology</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Design</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Culture</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Business</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase text-danger toogleText2">About</h5>

                                <ul class="list-unstyled mb-0 toogleMobile2">
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Newsroom</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Advertisement</a>
                                    </li>
                                    <li>
                                        <a href="#!" target="blank" class="text-white">Testimonials</a>
                                    </li>
                                </ul>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!-- first row -->

                        <!-- second row -->
                        <div class="row rowSecond">
                            <!-- Section: Form -->
                            <section class="">
                                <form action="">
                                    <!--Grid row-->
                                    <div class="row d-flex justify-content-md-center">
                                        <!--Grid column-->
                                        <div class="col-auto">
                                            <p class="pt-2">
                                                <strong class="text-danger">Sign up for your feedback</strong>
                                            </p>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->

                                        <div class="col-md-5 col-12">
                                            <!-- Email input -->
                                            <div class="form-outline form-white mb-4">
                                                <input type="email" id="formEmail" class="form-control"
                                                    placeholder="Email address" /><br>
                                                <textarea id="feedback" class="form-control" name="feedback" rows="4" cols="50">Type your feedback here...</textarea>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-auto">
                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-outline-danger mt-8"
                                                onclick="onclick=mySubscribe()">
                                                Send
                                            </button>
                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <!--Grid row-->
                                </form>
                            </section>
                            <!-- Section: Form -->
                        </div>
                        <!-- second row -->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Social media -->
                <div class="text-center p-3">
                    <section class="mb-4 center p-4 pb-0">
                        <!-- Facebook -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;"
                            href="https://www.facebook.com/" target="_blank" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;"
                            href="https://twitter.com/twitter?lang=vi" target="_blank" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;"
                            href="https://www.instagram.com/" target="_blank" role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;"
                            href="https://www.instagram.com/" target="_blank" role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;"
                            href="https://www.linkedin.com/" target="_blank" role="button"><i
                                class="fab fa-linkedin-in"></i></a>
                        <!-- Github -->
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;"
                            href="https://github.com/" target="_blank" role="button"><i class="fab fa-github"></i></a>
                    </section>
                    <!-- Section: Social media -->
                </div>

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    Copyright © 2021, Circle News
                </div>
                <!-- Copyright -->
            </footer>
        </body>
        <script src="../js/footer.js"></script>
    </div>
</body>
</html>
