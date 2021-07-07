  <!-- Welcome, Guest -->
  <div class="welcome-header">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
            <!-- Left elements -->
            <p class="navbar-hello brand text-danger mobile-none"><strong>CIRCLE NEWS</strong></p>
            @if(Route::has('login'))
            @auth 
            <p class="navbar-hello" style="color:white">WELCOME, {{Auth::user()->name}}</p>
            @else
            <p class="navbar-hello" style="color:white">WELCOME, GUEST</p>
            @endauth
            @endif
            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <a href="{{ route('login') }}" type="button" class="btn btn-outline-danger px-3 me-2 text-theme authen" data-mdb-ripple-color="dark">
                    Login
                </a>
                <a href="./register.html" type="button" class="btn btn-danger btn-theme authen">
                    Sign up
                </a>
            </div>
            
        </div>
    </nav>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light header-nav">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <!-- Logo to back home -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#"><img src="frontend/assets/images/logo2.png" width="100" height="100"></a>
        <!-- Navbar Toggle         -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @foreach ($Types as $type)
                    <li class="nav-item">
                
                        <a class="nav-link" href="{{ route('type.getpost', $type->slug) }}"> {{ $type->TYPE_NAME }} <span class="sr-only">(current)</span></a>
                    </li>
                @endforeach

               
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