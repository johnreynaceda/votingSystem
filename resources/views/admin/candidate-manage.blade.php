<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SKSU-OVS</title>
    <link rel="shortcut icon" href="{{ asset('images/sksulogo.png') }}" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        .material-icons.md-18 {
            font-size: 18px;
        }

        .material-icons.md-24 {
            font-size: 24px;
        }

        .material-icons.md-36 {
            font-size: 34px;
        }

        .material-icons.md-48 {
            font-size: 48px;
        }

        .toggle__dot {
            top: -.25rem;
            left: -.25rem;
            transition: all 0.3s ease-in-out;
            }

        input:checked ~ .toggle__dot {
        transform: translateX(100%);
        background-color: red;
        }
    </style>
</head>

<body class="font-sans antialiased overflow-hidden">

    <div class="nav">
        @include('layouts.partials.navbar')
    </div>
    <div class="flex p-5 space-x-5">
        <div class=" border shadow-xl w-2/12">
        <div class="bg-gradient-to-r from-nav to-main h-4 flex items-center px-2"></div>
        
      <div class="side ">
        @include('layouts.partials.sidebar')
      </div>
        <div class="bg-gradient-to-r from-nav to-main h-4 flex items-center px-2"></div>
        </div>
        <div class="w-11/12">
        <div class="">
            <div class="main">
                @yield('content')
            </div>
        </div>
        </div>
    </div>
    <div class=" absolute flex ml-10 bottom-0">
        <a href="" class="text-blue-700 text-sm font-medium">SKSU_OVS</a><h1 class="text-sm ml-2 text-gray-500">&#169; 2021</h1>
    </div>



    @livewireScripts
</body>

</html>
