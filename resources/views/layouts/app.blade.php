<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />

    <title>{{ config('app.name', 'Laravel Adminator') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('adminator/css/style.css') }}" rel="stylesheet" />
    
    <style>
        #loader {
            transition: all 0.3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000;
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out;
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
            }

            100% {
                -webkit-transform: scale(1);
                opacity: 0;
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0;
            }
        }
    </style>

    @livewireStyles
</head>

<body class="app is-collapsed">
    <div id="loader">
        <div class="spinner"></div>
    </div>
    <script>
        window.addEventListener("load", function load() {
            const loader = document.getElementById("loader");
            setTimeout(function () {
                loader.classList.add("fadeOut");
            }, 300);
        });
    </script>
    <div>

        @include('layouts.include.app.sidebar')

        <div class="page-container">

            @include('layouts.include.app.header')
            
            @yield('content')

            @include('layouts.include.app.footer')

        </div>
    </div>
    <script type="text/javascript" src="{{ asset('adminator/js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminator/js/bundle.js') }}"></script>
    @livewireScripts
</body>
</html>