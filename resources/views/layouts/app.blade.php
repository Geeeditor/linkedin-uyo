<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'UyoLinkedIn Community ')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @yield('styles')
</head>

<body class="bg-blue-900">
    <header class="box-shadow-b relative z-50 flex w-full items-center bg-white">
        {{-- Logo --}}
        <a class="ml-2 w-[20%]" href="{{ route('index') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>

        {{-- Hamburger Toggle --}}
        <div class="mr-2 flex w-[80%] justify-end md:hidden">
            <button class="menu h-[50px]"
                onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                aria-label="Main Menu">
                <svg width="50" height="50" viewBox="0 0 100 100">
                    <path class="line line1"
                        d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3"
                        d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
        </div>

        {{-- Menu endpoint --}}
        <div class="box-shadow-b absolute z-40 mt-[55%] w-full bg-white p-2">
            <ul class="flex flex-col gap-2 py-1">
                <li><a href="javascript:void(0)">Home</a></li>
                <li><a href="javascript:void(0)">About</a></li>
                <li><a href="javascript:void(0)">Event</a></li>
                <li><a href="javascript:void(0)">Contact Us</a></li>
            </ul>
        </div>


    </header>
    @yield('content')
    <footer>
        Footer Section
    </footer>
</body>

</html>
