<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="./css/new.css"> --}}
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>
                <!-- User Login Success -->
                <!-- <ul class="dropdown ml-auto ">
                    <div class="dropdown ml-auto avaInfo align-items-center" style="display:flex;justify-content:space-evenly;width:9em;margin-right:10%">
                        <a href="#" class="btn-user">
                            <img class="mr-2" style="border-radius:50%" src="https://wall.vn/wp-content/uploads/2020/03/avatar-hai-huoc-ba-dao-8.jpg" width="40" height="40" alt="avatar">
                        </a>
                        <div class="username" style="color:#DC3545;">
                            QuyQuy
                        </div>
                    </div>
                    <div id=" myDropdown" class="dropdown-content">
                        <a href="#MyProfile">My Profile</a>
                        <a href="#Settings">Settings</a>
                        <a href="#Logout">Log Out</a>
                    </div>
                </ul> -->
            </div>
        </nav>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light header-nav">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <!-- Logo to back home -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#"><img src="./assets/images/logo2.png" width="100" height="100"></a>
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
                            <li><a class="dropdown-item full-size " href="#">Politics</a></li>
                            <li><a class="dropdown-item full-size " href="#">Medical</a></li>
                            <li><a class="dropdown-item full-size " href="#">Public</a></li>
                            <li><a class="dropdown-item full-size " href="#">Entertainment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            View
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item full-size " href="#">Events</a></li>
                            <li><a class="dropdown-item full-size " href="#">Trending</a></li>
                            <li><a class="dropdown-item full-size " href="#">Popularity</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            World
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item full-size " href="#">Document</a></li>
                            <li><a class="dropdown-item full-size " href="#">Analyser</a></li>
                            <li><a class="dropdown-item full-size " href="#">Vietnamese 5 Continents</a></li>
                            <li><a class="dropdown-item full-size " href="#">Here's that life</a></li>
                            <li><a class="dropdown-item full-size " href="#">Military</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Education
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item full-size " href="#">Admissions</a></li>
                            <li><a class="dropdown-item full-size " href="#">Test Scores</a></li>
                            <li><a class="dropdown-item full-size " href="#">University Lookup</a></li>
                            <li><a class="dropdown-item full-size " href="#">Study Abroad</a></li>
                            <li><a class="dropdown-item full-size " href="#">Learn English</a></li>
                            <li><a class="dropdown-item full-size " href="#">Education 4.0</a></li>
                            <li><a class="dropdown-item full-size " href="#">Kid-Lab</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Health
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item full-size " href="#">News</a></li>
                            <li><a class="dropdown-item full-size " href="#">Counsel</a></li>
                            <li><a class="dropdown-item full-size " href="#">Nutritious</a></li>
                            <li><a class="dropdown-item full-size " href="#">Healthy and Beautiful</a></li>
                            <li><a class="dropdown-item full-size " href="#">Diseases</a></li>
                            <li><a class="dropdown-item full-size " href="#">Cancer</a></li>
                            <li><a class="dropdown-item full-size " href="#">Vaccine</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Business
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item full-size " href="#">Markets</a></li>
                            <li><a class="dropdown-item full-size " href="#">Tech</a></li>
                            <li><a class="dropdown-item full-size " href="#">Media</a></li>
                            <li><a class="dropdown-item full-size " href="#">Success</a></li>
                            <li><a class="dropdown-item full-size " href="#">Perspectives</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Videos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item full-size " href="#">Latest News</a></li>
                            <li><a class="dropdown-item full-size " href="#">Rhythm of Life</a></li>
                            <li><a class="dropdown-item full-size " href="#">Sport Life</a></li>
                            <li><a class="dropdown-item full-size " href="#">Life 4.0</a></li>
                            <li><a class="dropdown-item full-size " href="#">Music</a></li>
                            <li><a class="dropdown-item full-size " href="#">Travel</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <!-- Search Button  -->
            <form class="d-flex input-group w-auto header-search">
                <input type="search" class="form-control mobile-none iPad-none" placeholder="Type here" aria-label="Search" />
                <button class="btn btn-outline-danger mobile-none iPad-none" type="button" data-mdb-ripple-color="dark" onclick="alert('Search Results')">
                    Search
                </button>
            </form>
        </div>
    </nav>
    <main>
        <article id="pop-news">
            <div class="row d-flex justify-content-center">
                <!--post1-->
                <div class="col-md-7 col-12" id="featured">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            @foreach ($posts as $post)
                                <div class="carousel-item {{$post->id==5?'active':''}}">{{-- active --}}
                                    <img src={{$post->POST_IMAGE}} class="d-block w-100">
                                    <div class="carousel-caption ">
                                        <a class="carousel-title" href="#">
                                            <h3>{{$post->POST_TITLE}}</h3>
                                            <p>{{$post->created_at}}</p>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!--post2 -->
                    <div id="picked" class="row ">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://img.vietcetera.com/uploads/images/13-may-2021/210512-nghianoib-feature-2-768x432.jpg" alt="Card image">
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">V?? sao l??u l??u ngh?? m???t ?????ng n??i m???t n???o?</h4>
                                    </a>
                                    <p class="card-text content" id="hidden">Hi???n t?????ng ???ngh?? m???t ?????ng n??i m???t n???o??? kh??ng ph???i c???a ri??ng ai. Ca s?? ?????n ??i???p kh??c v???n qu??n l???i. MC ?????n h???i gay c???n v???n ?????c nh???m t??n hoa h???u.</p>
                                    <p class="time">10 TH 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://img.vietcetera.com/uploads/images/06-may-2021/210426-metime-feature-768x432.jpg" alt="Card image">
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">Th??? R???i Th??ch: D??nh th???i gian cho b???n th??n m?? kh??ng th???y t???i l???i</h4>
                                    </a>
                                    <p class="card-text content" id="hidden">C??ng vi???c v?? tr??ch nhi???m ????i khi khi???n b???n th???y t???i l???i n???u mu???n d??nh th???i gian cho m??nh. 5 B?????c sau ????y s??? gi??p b???n t??m l???i th???i gian ch??m s??c b???n th??n.</p>
                                    <p class="time">10 TH 5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="https://img.vietcetera.com/uploads/images/21-apr-2021/bonao2-optim-768x432.jpg" alt="Card image">
                                <div class="card-body">
                                    <a href="#">
                                        <h4 class="card-title">V?? sao khi nh??n l??u v??o m???t t???, ta b???ng c???m th???y l??? l???m?
                                        </h4>
                                    </a>
                                    <p class="card-text content" id="hidden">????i khi vi???c ?????c b???ng tr??? n??n th???t kh?? kh??n v?? nh??n ch???... ch??? hi???u g?? c???.</p>
                                    <p class="time">10 TH 5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--post 3 b??n ph???i-->
                <div class="col-md-5 " id="latest">
                    <div class="board clearfix">
                        <div class="news-roller">
                            <div class="slot1">
                                <img src="https://img.vietcetera.com/uploads/images/07-may-2021/techlimits-feature-768x432-1620374549751.jpg">
                                <a href="#"><strong>Th??? R???i Th??ch: T???i gi???n c??ch b???n ti??u th??? th??ng tin</strong></a>
                                <p class="content" id="hidden">6 B?????c l??m ch??? cu???c s???ng tr???c tuy???n c???a b???n b???ng c??ch ?????t ra gi???i h???n trong vi???c ti??u th??? th??ng tin.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1">
                                <img src="https://img.vietcetera.com/uploads/images/09-dec-2020/cautoan-feature1-768x432-1607527827958.jpg">
                                <a href="#"><strong>C??c ki???u c???u to??n th?????ng g???p: B???n theo ??u???i s??? ho??n h???o
                                        n??o?</strong></a>
                                <p class="content" id="hidden">Kh??ng ch??? ????n thu???n l?? s??? c???u to??n, m???t t??nh c??ch perfectionist c??n c?? th??? ???????c chia ra th??nh nhi???u lo???i n???a ?????y! B???n thu???c lo???i c???u to??n n??o sau ????y?</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1" id="hidden">
                                <img src="https://img.vietcetera.com/uploads/images/06-may-2021/vulnerability-feature-768x432.jpg">
                                <a href="#"><strong>L??m sao ????? m??? l??ng m?? kh??ng g??y phi???n l??ng?</strong></a>
                                <p class="content" id="hidden">Nhi???u ng?????i l???m t?????ng m??? l??ng l?? thao t??ng ho???c l?? ph????ng ti???n ????? tr??t c???m x??c. ??i???m kh??c nhau gi???a ch??ng l?? g???</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1">
                                <img src="https://img.vietcetera.com/uploads/images/11-may-2021/20210511-dien-anh-logo-2-01-768x432.jpg">
                                <a href="#"><strong>Girl From Nowhere 2: C?? g?? hay v?? kh??ng hay ??? 8 t???p
                                        phim?</strong></a>
                                <p class="content" id="hidden">B??i vi???t gi??p b???n h??? th???ng l???i c??? m???t m??a 2 ???xu???ng s???c??? th???y r?? c???a Girl From Nowhere - series Netflix ????nh ????m th???i gian g???n ????y. B???n th??ch t???p phim n??o nh???t?</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </article>
        <hr>
        <article id="news-video">
            <div class="row d-flex justify-content-center">
                <!--post 4-->
                <div class="col-md-7 col-12">
                    <h2>NEWS</h2>
                    <div class="left-board clearfix">
                        <div class="news-roller">
                            <div class="slot1">
                                <img src="https://i1-thethao.vnecdn.net/2021/05/09/Lewuy-jpeg-2081-1620529059.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=dfQ1CKZmL8O8nk75d8fK7A">
                                <a href="#"><strong>Lewandowski ti???m c???n k??? l???c c???a Gerd Muller</strong></a>
                                <p class="content">Ti???n ?????o Robert Lewandowski ch??? thi???u m???t pha l???p c??ng ????? b???t k???p k??? l???c ghi b??n trong m???t m??a gi???i Bundesliga do Gerd Muller l???p c??ch ????y 49 n??m.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1">
                                <img src="https://i1-suckhoe.vnecdn.net/2021/05/11/PHAM5615JPG-1620693895-2683-1620693986.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=eTcz_1zwJOF4WiSpv6QMNQ">
                                <a href="#"><strong>nCoV li??n quan vi???n Nhi???t ?????i l?? bi???n ch???ng ???n ?????</strong></a>
                                <p class="content">Vi???n V??? sinh d???ch t??? Trung ????ng gi???i tr??nh t??? gene virus 7 m???u b???nh ph???m li??n quan t???i B???nh vi???n B???nh nhi???t ?????i Trung ????ng c?? s??? 2, k???t qu??? cho th???y nhi???m bi???n ch???ng t??m th???y ??? ???n ?????.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1">
                                <img src="https://i1-vnexpress.vnecdn.net/2021/05/11/VNENano-1620701911-1590-1620701972.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=hj2ivjo834kHmHc-HMtMLw">
                                <a href="#"><strong>B???y nano c?? th??? ti??u di???t nhi???u bi???n ch???ng nCoV</strong></a>
                                <p class="content">C??c nh?? nghi??n c???u ??? ?????i h???c Chicago s??? d???ng h???t nano ????? 'b???t' nCoV b??n trong c?? th???, s??? d???ng d?????i d???ng x???t m??i.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1 more more-news ">
                                <img src="https://img.vietcetera.com/uploads/images/10-may-2021/thumb-kem-chong-nang-768x432-1620634115896.jpg">
                                <a href="#"><strong>L???t t???y SPF - Li???u c?? n??n tin v??o kem ch???ng n???ng?</strong></a>
                                <p class="content">Ch??? s??? SPF c???a kem ch???ng n???ng ng??y c??ng cao li???u c?? gi??p ch??ng ta tho??t kh???i c??c tia ?????c h???i hay s??? th???t ????y ch??? l?? nh???ng con s??? ???o?</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                            <div class="slot1 more more-news ">
                                <img src="https://i1-vnexpress.vnecdn.net/2021/05/11/vacuna-covid-nuevomexico-16207-6292-5071-1620739635.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=Q0b7JMR5h0SHGT-tIaHKUQ">
                                <a href="#"><strong>M??? ??au ?????u x??? l?? vaccine th???a.</strong></a>
                                <p class="content">M???t s??? bang M??? t???ng mong m???i nh???n ???????c nhi???u li???u vaccine Covid-19 nh???t c?? th???, gi??? ????y, h??? ??ang th???a vaccine khi cung l???n h??n c???u.</p>
                                <p class="type">Type</p>
                                <p class="time"> 10 TH 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--button see more news-->
                <div class="btn-seemore btn-news ">
                    <button id="seemore">
                        XEM TH??M
                        <span></span>
                    </button>
                </div>


                <div class="col-md-5 col-12">
                    <h2>VIDEOS</h2>
                    <div class="board clearfix">
                        <div class="news-roller">
                            <div class="playlist clearfix">
                                <a href="#">
                                    <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/1V86NyTL25g/maxresdefault.jpg')">
                                        <img src="https://vietcetera.com/images/outline/Play.svg">
                                        <p>4:27</p>
                                    </div>

                                    <div class="video-info">
                                        <div class="item-title">
                                            <strong>"H?? ?????, Gi??m ?????c s??ng t???o ?????p Magazine: T??c ph???m ph???i t??? k??? c??u
                                                chuy???n c???a n?? | MAD EP06"</strong></div>
                                        <div class="item-info">
                                            <p>1tr l?????t xem <sup>.</sup> 10 gi??? tr?????c</p>
                                        </div>
                                    </div>

                                </a>
                                <a href="#">
                                    <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/KmPUD_F1-bQ/maxresdefault.jpg');">
                                        <img src="https://vietcetera.com/images/outline/Play.svg">
                                        <p>4:27</p>
                                    </div>

                                    <div class="video-info">
                                        <div class="item-title">
                                            <strong>Ti???p qu???n doanh nghi???p gia ????nh: t?????ng d??? m?? kh??!? | THANG TI???N
                                                EP03</strong></div>
                                        <div class="item-info">
                                            <p>1tr l?????t xem <sup>.</sup> 10 gi??? tr?????c</p>
                                        </div>
                                    </div>

                                </a>

                                <a href="#">
                                    <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/s0tUZhVY5Vc/maxresdefault.jpg');">
                                        <img src="https://vietcetera.com/images/outline/Play.svg">
                                        <p>4:27</p>
                                    </div>

                                    <div class="video-info">
                                        <div class="item-title">
                                            <strong>Kinh nghi???m t??? 4 Gi??m ?????c s??ng t???o v??? qu?? tr??nh h???c h???i trong Agency
                                                | MAD EP04</strong>
                                        </div>
                                        <div class="item-info">
                                            <p>1tr l?????t xem <sup>.</sup> 10 gi??? tr?????c</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="playlist clearfix more more-videos">
                                <a href="#">
                                    <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/m-kLlUOq8fg/mqdefault.jpg');">
                                        <img src="https://vietcetera.com/images/outline/Play.svg">
                                        <p>4:27</p>
                                    </div>

                                    <div class="video-info">
                                        <div class="item-title">
                                            <strong>V?? ??inh Tr???ng Th???ng - Ng???t: Vi???t nh???c ?????ng n???i ti???ng | Have A Sip
                                                EP30</strong>
                                        </div>
                                        <div class="item-info">
                                            <p>1tr l?????t xem <sup>.</sup> 10 gi??? tr?????c</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="thumbnails" style="background: url('https://i.ytimg.com/vi/qCt0-w1dX2o/mqdefault.jpg');">
                                        <img id="pause" src="https://vietcetera.com/images/outline/Play.svg">
                                        <p>2:18</p>
                                    </div>
                                    <div class="video-info">
                                        <div class="item-title">
                                            <strong>B???o Nguy???n, Gi??m ?????c qu???c gia t???i Salesforce: D??ng c??ng ngh??? ????? ph??t
                                                tri???n | Vietnam Innovators EP28</strong>
                                        </div>
                                        <div class="item-info">
                                            <p>1tr l?????t xem <sup>.</sup> 10 gi??? tr?????c</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--button see more videos-->
                <div class="btn-seemore btn-videos">
                    <button id="seemore">
                        XEM TH??M
                        <span></span>
                    </button>
                </div>
            </div>
        </article>

    </main>
    <!--see more both-->
    <div class="btn-seemore btn-news-videos">
        <button id="seemore">
            XEM TH??M
            <span></span>
        </button>
    </div>
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
                            <img src="./assets/images/logo.png" alt="footer_logo" class="img-thumbnail w-100" style="width: 300px;height: 250px;">
                        </a>
                        <!-- Text -->
                        <p style="text-align:justify" class="full-size">
                            Circle News is an operational information division of the UIT responsible for the gathering and broadcasting of news and current affairs around the world. Circle News, giving information on its origins, as well.
                        </p>
                    </div>
                    <!--Grid column-->
                    <div class="col-lg-2"></div>
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-danger toogleText1 full-size">Discover</h5>

                        <ul class="list-unstyled mb-0 toogleMobile1">
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Latest</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">View</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">World</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Technology</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Design</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Culture</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Business</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-danger toogleText2 full-size">About</h5>

                        <ul class="list-unstyled mb-0 toogleMobile2">
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Newsroom</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Our Team</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Advertisement</a>
                            </li>
                            <li>
                                <a href="#!" target="blank" class="text-white full-size">Testimonials</a>
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
                                        <strong class="text-danger full-size">Sign up for our newsletter</strong>
                                    </p>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->

                                <div class="col-md-5 col-12">
                                    <!-- Email input -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="formEmail" class="form-control full-size" placeholder="Email address" />
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-auto">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-outline-danger mb-4 full-size" onclick="onclick=mySubscribe()">
                                        Subscribe
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
                <a class="btn btn-primary btn-floating m-1 full-size" style="background-color: #3b5998;" href="https://www.facebook.com/" target="_blank" role="button"><i
                        class="fab fa-facebook-f full-size"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1 full-size" style="background-color: #55acee;" href="https://twitter.com/twitter?lang=vi" target="_blank" role="button"><i
                        class="fab fa-twitter full-size"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1 full-size" style="background-color: #dd4b39;" href="https://www.instagram.com/" target="_blank" role="button"><i
                        class="fab fa-google full-size"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1 full-size" style="background-color: #ac2bac;" href="https://www.instagram.com/" target="_blank" role="button"><i
                        class="fab fa-instagram full-size"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1 full-size" style="background-color: #0082ca;" href="https://www.linkedin.com/" target="_blank" role="button"><i
                        class="fab fa-linkedin-in full-size"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1 full-size" style="background-color: #333333;" href="https://github.com/" target="_blank" role="button"><i class="fab fa-github full-size"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>

        <!-- Copyright -->
        <div class="text-center p-3 full-size" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright ?? 2021, Circle News
        </div>
        <!-- Copyright -->
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous">
</script>
<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(() => {
        $(".btn-news-videos").on("click", function() {
            $(".more:hidden").slice(0, 3).slideDown()

        });
        $(".btn-news").on("click", function() {
            $(".more-news:hidden").slice(0, 3).slideDown()
        });
        $(".btn-videos").on("click", function() {
            $(".more-videos:hidden").slice(0, 3).slideDown()
        });
    })
</script>

</html>
