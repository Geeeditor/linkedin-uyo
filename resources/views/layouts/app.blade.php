<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') LinkedinUyo</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    @yield('styles')
    <style type="text/tailwindcss">
        .text-fmt {
            @apply text-[25px] md:text-[30px]
        }
    </style>
</head>

<body>
    <header class="box-shadow-b relative z-50 flex w-full items-center bg-white">
        {{-- Logo --}}
        <a class="ml-2 h-[80px] w-[20%]" href="{{ route('index') }}">
            <img class="h-[80px]" src="{{ asset('images/logo.png') }}" alt="Logo">
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
        <div
            class="box-shadow-b box-shadow-t absolute top-[76px] z-40 hidden w-full cursor-pointer rounded-b-md bg-white">
            <ul class="flex flex-col gap-2 py-1">
                <li class="active px-2 py-1"><a href="javascript:void(0)">Home</a></li>
                <li class="px-2 py-1 hover:bg-slate-200"><a href="javascript:void(0)">About</a></li>
                <li class="px-2 py-1 hover:bg-slate-200"><a href="javascript:void(0)">Event</a></li>
                <li class="px-2 py-1 hover:bg-slate-200"><a href="javascript:void(0)">Contact Us</a></li>
            </ul>
        </div>


    </header>
    <section class="px-3 py-2 md:bg-blue-500 md:px-[5%] md:py-2">
        @yield('hero')
    </section>
    <section class="px-3 py-2 md:px-[7.5%] md:py-2">
        @yield('content')
    </section>
    <section>
        @yield('hero-about')
    </section>
    <footer class="bg-[#1a1615]">

        <div class="py-2 text-white">
            <div class="mx-4 my-3 rounded-lg border border-white px-4 py-2">
                <a href="{{ route('index') }}">
                    <img class="h-[80px]" src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>

                 <h4 class="font-merriweather text-[22.5px] md:text-[27.5px]">Subscribe to Latest News and Events</h4>

                <p>
                    Get the latest updates about Uyo LinkdedIn Community activites and events.
                </p>

                <form class="my-2 flex flex-col gap-2">

                    <input class="rounded-md border border-slate-300 bg-brown-900 px-1 py-0.5 md:py-3" type="email"
                        name="email" placeholder="Email" id="email">
                    <button type="submit"
                        class="custom-subscribe-button rounded-md bg-purple-700 px-2 py-4 hover:bg-purple-800 md:py-3">Subscribe</button>
                </form>
            </div>

            <div class="mx-4 flex justify-between gap-2">
                <div class="w-1/2">
                    <h2 class="mb-0.5 flex items-center gap-2 font-bold uppercase">Quick Links
                        <img src="{{ asset('images/icons/bullet.svg') }}" alt="icoon">
                    </h2>
                    <ul class="flex cursor-pointer flex-col gap-y-0.5 tracking-normal">
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)">Home</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)">About</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)">Events</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)">Blog</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)">Sponsor</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)">Contact</a></li>
                    </ul>
                </div>

                <div class="w-1/2">
                    <h2 class="mb-0.5 flex items-center gap-2 font-bold uppercase">Socials
                        <img src="{{ asset('images/icons/bullet.svg') }}" alt="icoon">
                    </h2>
                    <ul class="flex cursor-pointer flex-col gap-y-0.5 tracking-normal">
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)"
                                target="_blank">X</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)"
                                target="_blank">Facebook</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)"
                                target="_blank">Instagram</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)"
                                target="_blank">LinkedIn</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)"
                                target="_blank">Youtube</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div x-data="{ date: false }" class="bg-[#5903ae] px-4 py-2 text-center text-[11px] text-white">
            Copyright ©

            <span x-text="date = new Date().getFullYear()">2024</span>

            <a class="hover:underline" href="javascript:void(0)">
                Uyo LinkedIn Community.
            </a>
            All Rights Reserved.
        </div>






    </footer>
</body>

</html>
