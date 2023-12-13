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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

    <style>

        body {
        background-image: url("../image/img6-full.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .navbar-brand {
        width: auto;
        margin: auto;
    }

    a {
        position: relative;
        padding: 20px 50px;
        display: block;
        text-decoration: none;
        text-transform: uppercase;
        width: 200px;
        overflow: hidden;
        border-radius: 40px;
        margin: auto;
    }

    a span {
        position: relative;
        color: #fff;
        fot-size: 20px;
        font-family: Arial;
        letter-spacing: 8px;
        z-index: 1;
    }

    a .liquid {
        position: absolute;
        top: -80px;
        left: 0;
        width: 200px;
        height: 200px;
        background: #c53d3d;
        box-shadow: inset 0 0 50px rgba(0, 0, 0, .5);
        transition: .5s;
    }

    a .liquid::after,
    a .liquid::before {
        content: '';
        width: 200%;
        height: 200%;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -75%);
        background: #000;
    }

    a .liquid::before {
        border-radius: 45%;
        background: rgba(20, 20, 20, 1);
        animation: animate 5s linear infinite;
    }

    a .liquid::after {
        border-radius: 40%;
        background: rgba(20, 20, 20, .5);
        animation: animate 10s linear infinite;
    }

    a:hover .liquid{
        top: -120px;
    }

    @keyframes animate {
    0% {
        transform: translate(-50%, -75%) rotate(0deg);
    }
    100% {
        transform: translate(-50%, -75%) rotate(360deg);
    }
    }
    
    .text-decoration-none {
        padding: inherit;
    }

    .container-foot, .text-foot {
        text-align: center;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/wine.png') }}" alt="" width="10%">
                    <span class="title-logo fs-3">Winepleasure</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-align: center;">
                                    menu                                  
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/wines/create">Add Wine</a>
                                    <a class="dropdown-item" href="/wines/contact">Contact</a>
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
                    <img src="{{ asset('./image/shopping-bag.png') }}" alt="" width="6%">
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="container">
        <footer>
            @yield('footer')
            <div class="container py-3 text-center">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="fs-4 pb-1 text-decoration-underline text-muted">About us</h3>
                        <div class="footer-menu d-block">
                            <ul class="text-decoration-none">
                                <li class="list-group-item"><a class="text-decoration-none" href="#">About us</a></li>
                                <li class="list-group-item"><a class="text-decoration-none" href="#">FAQ</a></li>
                                <li class="list-group-item"><a class="text-decoration-none" href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3 class="fs-4 pb-1 text-decoration-underline text-muted">Lorem ipsum</h3>
                        <div class="footer-menu d-block">
                            <ul class="text-decoration-none">
                                <li class="list-group-item"><a class="text-decoration-none" href="#">About us</a></li>
                                <li class="list-group-item"><a class="text-decoration-none" href="#">FAQ</a></li>
                                <li class="list-group-item"><a class="text-decoration-none" href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3 class="fs-4 pb-1 text-decoration-underline text-muted ">Newsletter</h3>
                        <div class="newsletter d-block">
                            {{-- <ul class="text-decoration-none"> --}}
    
                            <p>Subscribe to our newsletter here: </p>
                            <form action="#" class=" input-group mb-2">
                                <label for="email">
                                    <input type="email" class="form-control" name="" id="">
                                </label>
                                <button class="btn bnt-sm btn-secondary">subscribe</button>
                            </form>
                            {{-- </ul> --}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h3 class="fs-4 pb-1 text-decoration-underline text-muted">Follow Us</h3>
             
            <div class="container-foot">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor" width="40px" heigth="40px" style="margin: 1em;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" class="image-foot"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor" width="40px" heigth="40px">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path>
            </svg>
        </div>
        </footer>
        <p class="text-foot">Copyright © 2022 All rights reserved | WINE & GOURMET ITALY  PI 04465540237 | La vendita di alcolici è riservata ai clienti con almeno 18 anni Bevi Responsabilmente</p>
    </div>
    </div>
</body>
</html>
