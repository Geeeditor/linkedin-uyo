@extends('layouts.app')
<title>@yield('title', 'UyoLinkedIn Community | Home')</title>
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('hero')
    <section class="flex flex-col md:flex-row gap-2 items-center">
        <div>
            <h1 class="font-[900] text-[25px] font-merriweather">
                <span class="block text-purple-700 ">
                    UyoLinkedIn Community
                </span>
                is Your Hub for Aspiring LinkedIn Professionals
            </h1>

            <p class="font-merriweather">Connect with a global community of LinkedIn users and build your visibility on
                LinkedIn</p>

            <div class="flex gap-5 py-5">
                <a class="font-[600] block w-fit px-3 py-2 border-2 text-center rounded-lg hover:shadow bg-black hover:bg-white border-black  text-white hover:text-black cursor-pointer"
                    href="javascript:void(0)">
                    Learn More
                </a>

                <a class="font-[600] block w-fit px-3 py-2 border-2 text-center rounded-lg hover:shadow cursor-pointer  bg-white  hover:bg-black border-black  text-black hover:text-white"
                    href="javascript:void(0)">
                    Sponsor Us
                </a>
            </div>

        </div>

        <div>
            <img src="{{ asset('images/hero-img.png') }}" alt="People Connecting">
        </div>
    </section>
@endsection

@section('content')
    <main class="flex flex-col gap-3">
        <section>
            <h3 class="font-[900] font-merriweather text-[25px] text-center">
                Our Sponsors
            </h3>
            <div class="text-center">
                Swiper Slider
            </div>
        </section>

        <section class="bg-blue-500 px-3 py-5 rounded-lg text-white flex items-center gap-4 md:px-5 md:py-10">
            <div>
                <h3 class="font-merriweather font-[600] text-[22.5px] mb-4">
                    Join Our <br> Community
                </h3>
                <p class="my-3">
                    Be part of a community that is helping members in growing their LinkedIn visibility and personal brand.
                </p>
                <a class="block bg-black py-3 text-center w-full rounded-full " href="javascript:void(0)">
                    Join our community
                </a>
            </div>
            <div class="hidden md:block">
                <img src="{{ asset('images/group-friends.png') }}" alt="Group Friends">
            </div>
        </section>

        <section>
            <h3 class="font-merriweather font-[600] text-[20px] text-center">How We Create Impact</h3>

            <div class="flex flex-col gap-2">
                <div class="flex gap-2 flex-col">
                    <span>
                        <img class="block shadow-lg" src="{{ asset('images/group-friends.png') }}" alt="Group Friends">
                    </span>

                    <div>
                        <h4 class="font-[700] font-merriweather text-[22.5px]">
                            <span class="text-purple-700 block">01</span>
                            Community
                        </h4>
                        <p>
                            Be part of our vibrant community where we are helping boost our members' online visibility.
                        </p>
                    </div>
                </div>
                <div class="flex gap-2 flex-col">
                    <span>
                        <img class="block shadow-lg" src="{{ asset('images/friends-celebrating.png') }}"
                            alt="Group Friends">
                    </span>

                    <div>
                        <h4 class="font-[700] font-merriweather text-[22.5px]">
                            <span class="text-purple-700 block">02</span>
                            Events
                        </h4>
                        <p>
                            Through our events, we help create awareness about building a personal brand on LinkedIn.
                        </p>
                    </div>
                </div>
                <div class="flex gap-2 flex-col">
                    <span>
                        <img class="block shadow-lg" src="{{ asset('images/group-friends.png') }}" alt="Group Friends">
                    </span>

                    <div>
                        <h4 class="font-[700] font-merriweather text-[22.5px]">
                            <span class="text-purple-700 block">03</span>
                            Resources
                        </h4>
                        <p>
                            In our community, there are lots of learning resources provided. From books on personal
                            development, webinars, LinkedIn challenges, workshops, templates and so much more, we build a
                            community of thriving individuals.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="bg-blue-500 px-3 py-5 rounded-lg text-white flex flex-col md:flex-row items-center gap-4 md:px-5 md:py-10">
            <div>
                <h3 class="font-merriweather font-[600] text-[22.5px] mb-4">
                    You Can Become <br> A Sponsor
                </h3>
                <p class="my-3">
                    Thank you for considering to sponsor Uyo
                    LinkedIn Community. We offer unique
                    sponsorship and partnership opportunities
                    in order to allow individuals and organizations
                    to join us in our mission of supporting
                    our members.
                    <br>
                    Whether you choose to sponsor a specific
                    program, event or community activity, your
                    contribution will make a difference in the
                    community growth.
                </p>
                <a class="block bg-black py-3 text-center w-full rounded-full -rotate-1 cursor-pointer "
                    href="javascript:void(0)">
                    Become a Sponsor
                </a>
            </div>
            <div class="">
                <img src="{{ asset('images/office-office.png') }}" alt="Group Friends">
            </div>
        </section>

        <section>
            {{--  <h3 class="font-[900] capitalize font-merriweather text-[25px] text-center">
                Visit us on youtube
            </h3>
            <div class="text-center">
                Swiper Slider
            </div> --}}
            <a class="block bg-black py-3 text-center w-full rounded-full text-white cursor-pointer "
                href="javascript:void(0)">
                Visit our YouTube Channel
            </a>


        </section>



        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Testimonials</h2>
                    <p class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Don't just take it from us....Hear what others say
                    </p>
                </div>
                <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
                    <figure
                        class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Speechless with how easy this
                                was to integrate</h3>
                            <p class="my-4">"I recently got my hands on Flowbite Pro, and holy crap, I'm speechless with
                                how easy this was to integrate within my application. Most templates are a pain, code is
                                scattered, and near impossible to theme.</p>
                            <p class="my-4">Flowbite has code in one place and I'm not joking when I say it took me a
                                matter of minutes to copy the code, customise it and integrate within a Laravel + Vue
                                application.</p>
                            <p class="my-4">If you care for your time, I hands down would go with this."</p>
                        </blockquote>
                        <figcaption class="flex justify-center items-center space-x-3">
                            <img class="w-9 h-9 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Bonnie Green</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure
                        class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project
                            </h3>
                            <p class="my-4">"FlowBite provides a robust set of design tokens and components based on the
                                popular Tailwind CSS framework. From the most used UI components like forms and navigation
                                bars to the whole app screens designed both for desktop and mobile, this UI kit provides a
                                solid foundation for any project.</p>
                            <p class="my-4">Designing with Figma components that can be easily translated to the utility
                                classes of Tailwind CSS is a huge timesaver!"</p>
                        </blockquote>
                        <figcaption class="flex justify-center items-center space-x-3">
                            <img class="w-9 h-9 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Roberta Casas</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Lead designer at Dropbox
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure
                        class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 lg:border-b-0 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow and
                                variants</h3>
                            <p class="my-4">"As someone who mainly designs in the browser, I've been a casual user of
                                Figma, but as soon as I saw and started playing with FlowBite my mind was 🤯.</p>
                            <p class="my-4">Everything is so well structured and simple to use (I've learnt so much about
                                Figma by just using the toolkit).</p>
                            <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly
                                level up your next application."</p>
                        </blockquote>
                        <figcaption class="flex justify-center items-center space-x-3">
                            <img class="w-9 h-9 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Jese Leos</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer at
                                    Facebook</div>
                            </div>
                        </figcaption>
                    </figure>
                    <figure
                        class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                        <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                            <p class="my-4">"This is a very complex and beautiful set of elements. Under the hood it comes
                                with the best things from 2 different worlds: Figma and Tailwind.</p>
                            <p class="my-4">You have many examples that can be used to create a fast prototype for your
                                team."</p>
                        </blockquote>
                        <figcaption class="flex justify-center items-center space-x-3">
                            <img class="w-9 h-9 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                                alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left">
                                <div>Joseph McFall</div>
                                <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="text-center">
                    <a href="#"
                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Show
                        more...</a>
                </div>
        </section>


    </main>
@endsection
