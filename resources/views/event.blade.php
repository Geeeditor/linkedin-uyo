@extends('layouts.app')

@section('title', 'Events |')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ecetera.css') }}">
@endsection



@section('hero')

<section class="hero-event py-10">

     <div class="container">
            <div class="relative text-center">
                <span class="rounded-md bg-white/20 px-4 py-[5px] font-medium text-white">
                    1 <sup>th</sup> Show, 01 January 2023
                </span>
                <h1 class="my-8 text-4xl font-extrabold text-white lg:text-6xl">Event Management</h1>
                <div class="flex justify-center">
                    <div class="max-w-xl text-center">
                        <p class="font-semibold text-white">Itaque earum rerum tenetur a sapiente delectus reiciendis voluptatibus maiores alias perferendis doloribus asperiores.</p>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="relative mt-14">
                        <div class="">
                            <div class="flex flex-wrap items-center justify-center gap-x-4 gap-y-4 sm:gap-x-0">
                                <div class="inline-flex h-24 w-24 flex-col items-center justify-center rounded-lg border-2 border-dashed px-3 py-2 font-bold text-white">
                                    <span id="days" class="text-3xl">00</span>
                                    <span class="text-base">Days</span>
                                </div>
                                <div class="mx-4 hidden text-2xl font-bold text-white sm:block">:</div>
                                <div class="inline-flex h-24 w-24 flex-col items-center justify-center rounded-lg border-2 border-dashed px-3 py-2 font-bold text-white">
                                    <span id="hours" class="text-3xl">00</span>
                                    <span class="text-base">Hours</span>
                                </div>
                                <div class="mx-4 hidden text-2xl font-bold text-white sm:block">:</div>
                                <div class="inline-flex h-24 w-24 flex-col items-center justify-center rounded-lg border-2 border-dashed px-3 py-2 font-bold text-white">
                                    <span id="minutes" class="text-3xl">00</span>
                                    <span class="text-base">Minutes</span>
                                </div>
                                <div class="mx-4 hidden text-2xl font-bold text-white sm:block">:</div>
                                <div class="inline-flex h-24 w-24 flex-col items-center justify-center rounded-lg border-2 border-dashed px-3 py-2 font-bold text-white">
                                    <span id="seconds" class="text-3xl">00</span>
                                    <span class="text-base">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Flex End -->
            </div>

            <div class="flex justify-center">
                <div class="relative mt-20">
                    <a href="#price" class="text-primary rounded-lg bg-white px-9 py-3 text-xl font-medium transition-all duration-500 hover:shadow-white/10">Register Now</a>
                </div>
            </div><!-- Flex End -->
        </div>
</section>

@endsection

@section('content')
    <h1 class="text-center font-merriweather text-[25px] font-[700] capitalize md:text-[30px]">LinkedIn Uyo Events</h1>
    <p class="mx-auto w-[90%] text-center md:w-[50%]">At Uyo LinkedIn Community, we host workshops, webinars and meetups regularly. These events are part of ways we support our community members in their personal and career growth.
Would you love to attend one of our events?</p>

<div class="flex flex-col gap-2">
<a class="mx-auto block w-[49%] rounded-lg bg-purple-800 px-10 py-5 text-center text-white hover:bg-purple-700" href="javascript:void(0)">Get Event Updates</a>
<a class="mx-auto block w-[49%] rounded-lg bg-purple-800 px-10 py-5 text-center text-white hover:bg-purple-700"  href="javascript:void(0)">Join Our Community</a>
</div>


@endsection
