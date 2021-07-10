<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <!-- Welcome, Guest -->
    <div class="welcome-header" id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">
                <!-- Left elements -->
                <p class="navbar-hello brand text-danger mobile-none"><strong>CIRCLE NEWS</strong></p>
                @if (Route::has('login'))
                @auth
                <p class="navbar-hello">WELCOME, {{ Auth::user()->name }}</p>
                @else
                <p class="navbar-hello">WELCOME, Guest</p>
                @endauth
                @endif
                <!-- Right elements -->
        @if (Route::has('login'))
        <ul class="dropdown ml-auto ">
            @auth
                <div class="d-flex align-items-center">

                    <div class="dropdown ml-auto avaInfo align-items-center"
                        style="display:flex;justify-content:space-evenly;width:9em;margin-right:10%">
                        <a href="#" class="btn-user">
                            <img class="mr-2" style="border-radius:50%"
                            src="https://wall.vn/wp-content/uploads/2020/03/avatar-hai-huoc-ba-dao-8.jpg" width="40"
                            height="40" alt="avatar">
                        </a>
                        <div class="username" style="color:#DC3545;">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                    <div id=" myDropdown" class="dropdown-content"style="top:46px">
                        <a href="{{ route('logout') }}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
            @else
                    <a role="button" href="{{ route('login') }}" class="btn btn-outline-danger px-3 me-2 text-theme" >
                        {{ __('Login') }}
                    </a>
                    @if (Route::has('register'))
                    <a role="button" href="{{ route('register') }}" class="btn btn-danger btn-theme" >
                        {{ __('register') }}
                    </a>

                    @endif
                </div>
            @endauth
        @endif
            </ul>
            </div>
        </nav>
    </div>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light header-nav">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <!-- Logo to back home -->
        <a class="navbar-brand mt-2 mt-lg-0" href="/dashboard"><img src="frontend/assets/images/logo2.png" width="100" height="100"></a>
        <!-- Navbar Toggle         -->
        <button class="navbar-toggler" id="navbarToggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @foreach ($Types as $type)
                    <li class="nav-item dropdown">

                        <a class="nav-link" href="{{ route('type.getpost', $type->slug) }}"> {{ $type->TYPE_NAME }} <span class="sr-only">(current)</span></a>
                    </li>
                @endforeach
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('videos.index') }} " style="hover:cursor">Video</a>
                </li>

            </ul>
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <!-- Search Button  -->
        <form class="d-flex input-group w-auto header-search" action="{{ route('guest.search') }}" method="GET">
            @csrf

            <input type="search" name="key" class="form-control mobile-none iPad-none" placeholder="Search Posts here......" aria-label="Search" required />
            <button class="btn btn-outline-danger mobile-none iPad-none" type="submit" data-mdb-ripple-color="dark" onclick="alert('Search Results')">
                Search
            </button>
        </form>
    </div>
</nav>
</body>

<!-- TODO : Link jQuery Lib  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- TODO : Link  Bootstrap Libs -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>
<script src="../js/header.js"></script>
</html>



