
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
                    <div id=" myDropdown" class="dropdown-content">
                        <a href="#MyProfile">My Profile</a>
                        <a href="#Settings">Settings</a>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <!-- Logo to back home -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#"><img src="./css/2.png" width="100" height="100"></a>
            <!-- Navbar Toggle         -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Latest
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Politics</a></li>
                            <li><a class="dropdown-item" href="#">Medical</a></li>
                            <li><a class="dropdown-item" href="#">Public</a></li>
                            <li><a class="dropdown-item" href="#">Entertainment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            View
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Events</a></li>
                            <li><a class="dropdown-item" href="#">Trending</a></li>
                            <li><a class="dropdown-item" href="#">Popularity</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            World
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Document</a></li>
                            <li><a class="dropdown-item" href="#">Analyser</a></li>
                            <li><a class="dropdown-item" href="#">Vietnamese 5 Continents</a></li>
                            <li><a class="dropdown-item" href="#">Here's that life</a></li>
                            <li><a class="dropdown-item" href="#">Military</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Education
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Admissions</a></li>
                            <li><a class="dropdown-item" href="#">Test Scores</a></li>
                            <li><a class="dropdown-item" href="#">University Lookup</a></li>
                            <li><a class="dropdown-item" href="#">Study Abroad</a></li>
                            <li><a class="dropdown-item" href="#">Learn English</a></li>
                            <li><a class="dropdown-item" href="#">Education 4.0</a></li>
                            <li><a class="dropdown-item" href="#">Kid-Lab</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Health
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">News</a></li>
                            <li><a class="dropdown-item" href="#">Counsel</a></li>
                            <li><a class="dropdown-item" href="#">Nutritious</a></li>
                            <li><a class="dropdown-item" href="#">Healthy and Beautiful</a></li>
                            <li><a class="dropdown-item" href="#">Diseases</a></li>
                            <li><a class="dropdown-item" href="#">Cancer</a></li>
                            <li><a class="dropdown-item" href="#">Vaccine</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Business
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Markets</a></li>
                            <li><a class="dropdown-item" href="#">Tech</a></li>
                            <li><a class="dropdown-item" href="#">Media</a></li>
                            <li><a class="dropdown-item" href="#">Success</a></li>
                            <li><a class="dropdown-item" href="#">Perspectives</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Videos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Latest News</a></li>
                            <li><a class="dropdown-item" href="#">Rhythm of Life</a></li>
                            <li><a class="dropdown-item" href="#">Sport Life</a></li>
                            <li><a class="dropdown-item" href="#">Life 4.0</a></li>
                            <li><a class="dropdown-item" href="#">Music</a></li>
                            <li><a class="dropdown-item" href="#">Travel</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <!-- Search Button  -->
            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control mobile-none iPad-none" placeholder="Type here" aria-label="Search" />
                <button class="btn btn-outline-danger mobile-none iPad-none" type="button" data-mdb-ripple-color="dark" onclick="alert('Search Results')">
                    Search
                </button>
            </form>
        </div>
    </nav>
</body>

<!-- TODO : Link jQuery Lib  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- TODO : Link  Bootstrap Libs -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>

</html>



