<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') LinkedinUyo</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    @yield('styles')
    <style type="text/tailwindcss">
        .text-fmt {
            @apply text-[25px] md:text-[30px]
        }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


</head>

<body>
    <header x-data="{ open: false }"
        class="box-shadow-b relative z-50 flex w-full items-center bg-white md:justify-between">
        {{-- Logo --}}
        <a class="ml-2 h-[80px] w-[20%]" href="{{ route('index') }}">
            <img class="h-[80px]" src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>

        {{-- Hamburger Toggle --}}
        <div @click="open = ! open" class="mr-2 flex w-[80%] justify-end md:hidden">
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
        <div x-show="open" @click.outside="open = false"
            class="box-shadow-b box-shadow-t absolute top-[76px] z-40 w-full cursor-pointer rounded-b-md bg-white">
            <ul class="flex flex-col gap-2 py-1 md:flex-row md:justify-evenly">
                <li class="{{ request()->routeIs('index') ? 'active' : '' }} rounded-sm px-2 py-1">
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li
                    class="{{ request()->routeIs('index.about') ? 'active' : '' }} rounded-sm px-2 py-1 hover:bg-slate-200">
                    <a href="{{ route('index.about') }}">About</a>
                </li>
                <li
                    class="{{ request()->routeIs('index.event') ? 'active' : '' }} rounded-sm px-2 py-1 hover:bg-slate-200">
                    <a href="{{ route('index.event') }}">Event</a>
                </li>
                <li
                    class="{{ request()->routeIs('index.contact') ? 'active' : '' }} rounded-sm px-2 py-1 hover:bg-slate-200">
                    <a href="{{ route('index.contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>

        <div
            class="box-shadow-b box-shadow-t absolute top-[76px] z-40 hidden w-full cursor-pointer rounded-b-md bg-white md:relative md:top-0 md:block md:w-[50%]">
            <ul class="flex flex-col gap-2 py-1 md:flex-row md:justify-evenly">
                <li class="{{ request()->routeIs('index.home') ? 'active' : '' }} rounded-sm px-2 py-1">
                    <a href="{{ route('index.home') }}">Home</a>
                </li>
                <li
                    class="{{ request()->routeIs('index.about') ? 'active' : '' }} rounded-sm px-2 py-1 hover:bg-slate-200">
                    <a href="{{ route('index.about') }}">About</a>
                </li>
                <li
                    class="{{ request()->routeIs('index.event') ? 'active' : '' }} rounded-sm px-2 py-1 hover:bg-slate-200">
                    <a href="{{ route('index.event') }}">Event</a>
                </li>
                <li
                    class="{{ request()->routeIs('index.contact') ? 'active' : '' }} rounded-sm px-2 py-1 hover:bg-slate-200">
                    <a href="{{ route('index.contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </header>
    <section>
        @yield('hero')
    </section>
    <section class="px-3 py-2 md:px-[7.5%] md:py-2">
        @yield('content')
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
                        <li class="hover:tracking-wide hover:underline"><a href="https://x.com/linkedin_uyo?t=AEHYxEAezMPDSdeg2k2v-g&s=09"
                                target="_blank">X</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="https://www.facebook.com/profile.php?id=61558679140728&mibextid=ZbWKwL"
                                target="_blank">Facebook</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="https://www.instagram.com/linkedin_uyo?igsh=MWR3M2xtOGg1ZGZ4ZA=="
                                target="_blank">Instagram</a></li>
                        <li class="hover:tracking-wide hover:underline"><a href="https://www.linkedin.com/company/linkedin-uyo/"
                                target="_blank">LinkedIn</a></li>
                        {{-- <li class="hover:tracking-wide hover:underline"><a href="javascript:void(0)"
                                target="_blank">Youtube</a></li> --}}

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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <script>
    const swiper = new Swiper('.swiper', {
        loop: true, // Enable looping
        autoplay: {
            delay: 2000, // Change slide every 2 seconds
            disableOnInteraction: false, // Continue autoplay after interaction
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Enable pagination clicks
        },
        slidesPerView: 3, // Show 3 slides at a time
        spaceBetween: 10, // Space between slides
        breakpoints: {
            640: {
                slidesPerView: 1, // 1 slide on small screens
            },
            768: {
                slidesPerView: 2, // 2 slides on medium screens
            },
            1024: {
                slidesPerView: 3, // 3 slides on larger screens
            },
        },
    });
</script>


    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/gumshoe.polyfills.min.js') }}"></script>
    <script src="{{ asset('js/lucide.min.js') }}"></script>
    <script src="{{ asset('js/preline.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>

</html>
