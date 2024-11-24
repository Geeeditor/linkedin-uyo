@extends('layouts.app')

@section('title', 'About |')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('hero')
 <section class="px-3 py-2 md:bg-blue-500 md:px-[5%] md:py-2">
    <section class="grid place-items-center text-white md:min-h-[20vh]">
        <div class="text-center text-[25px] font-[800] uppercase">Who we are</div>
    </section>


 </section>
 @endsection

@section('content')
    <section class="relative">
        <div class="mx-auto w-full max-w-7xl px-4 md:px-5 lg:px-5">
            <div class="grid w-full grid-cols-1 items-center justify-start gap-8 lg:grid-cols-2">
                <div class="inline-flex w-full flex-col items-center justify-start gap-10 lg:items-start">
                    <div class="flex w-full flex-col items-center justify-start gap-4 lg:items-start">
                        <h2 class="font-manrope text-center text-4xl font-bold leading-normal text-gray-900 lg:text-start">
                            LinkedinUyo Community Helps in Building Stronger Audience through Collaboration, Event and
                            Empowerment</h2>
                        <p class="text-center text-base font-normal leading-relaxed text-gray-500 lg:text-start">Uyo
                            LinkedIn Community is a community founded with the intention to help individuals build their
                            personal brand on LinkedIn. Our mission is to train and educate individuals on
                            how to grow their visibility, land jobs and grow on LinkedIn. <br>

                            We achieve this with the aid of our monthly training webinars, LinkedIn visibility challenges
                            and our supportive community.</p>
                    </div>
                    <button
                        class="flex w-full items-center justify-center rounded-lg bg-indigo-600 px-3.5 py-2 shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] transition-all duration-700 ease-in-out hover:bg-indigo-800 sm:w-fit">
                        <span class="px-1.5 text-sm font-medium leading-6 text-white">Get Started</span>
                    </button>
                </div>
                <img class="mx-auto h-full rounded-3xl object-cover lg:mx-0"
                    src="https://pagedone.io/asset/uploads/1717751272.png" alt="about Us image" />
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between md:mt-20 lg:flex-row">
                <div class="w-full lg:w-1/2">
                    <h2 class="font-manrope mb-7 text-center text-5xl font-bold leading-[4rem] text-gray-900 lg:text-left">
                        Our leading, strong & creative team</h2>
                    <p class="mb-16 text-center text-lg text-gray-500 lg:text-left">These people work on making our
                        product best.</p>
                    <button
                        class="mx-auto block w-60 cursor-pointer rounded-full bg-indigo-600 px-8 py-3 text-center text-base font-semibold text-white transition-all duration-500 hover:bg-indigo-700 lg:mx-0">Join
                        our team</button>
                </div>
                <div class="mt-16 w-full max-lg:max-w-2xl md:mt-40 lg:mt-0 lg:w-1/2">
                    <div class="grid grid-cols-1 gap-8 min-[450px]:grid-cols-2 md:grid-cols-3">
                        <img src="https://pagedone.io/asset/uploads/1696238644.png" alt="Team tailwind section"
                            class="mx-auto h-56 w-44 rounded-2xl object-cover min-[450px]:mr-0 md:mt-20" />
                        <img src="https://pagedone.io/asset/uploads/1696238665.png" alt="Team tailwind section"
                            class="mx-auto h-56 w-44 rounded-2xl object-cover min-[450px]:ml-0 md:mx-auto" />
                        <img src="https://pagedone.io/asset/uploads/1696238684.png" alt="Team tailwind section"
                            class="mx-auto h-56 w-44 rounded-2xl object-cover min-[450px]:mr-0 md:ml-0 md:mt-20" />
                        <img src="https://pagedone.io/asset/uploads/1696238702.png" alt="Team tailwind section"
                            class="mx-auto h-56 w-44 rounded-2xl object-cover min-[450px]:ml-0 md:ml-auto md:mr-0" />
                        <img src="https://pagedone.io/asset/uploads/1696238720.png" alt="Team tailwind section"
                            class="mx-auto h-56 w-44 rounded-2xl object-cover min-[450px]:mr-0 md:mx-auto md:-mt-20" />
                        <img src="https://pagedone.io/asset/uploads/1696238737.png" alt="Team tailwind section"
                            class="mx-auto h-56 w-44 rounded-2xl object-cover min-[450px]:ml-0 md:mr-0" />

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-12">
                <h2 class="font-manrope mb-6 text-center text-5xl font-bold text-gray-900">Meet the brains</h2>
                <p class="text-center text-lg text-gray-500">These people work on making our product best.</p>
            </div>
            <div class="mx-auto flex max-w-3xl flex-wrap justify-center gap-y-14 lg:max-w-full">
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698649968.png" alt="Marvin image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Marvin McKinney</h4>
                    <span
                        class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">Founder</span>
                </div>
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698650000.png" alt="Kathryn image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Kathryn Murphy</h4>
                    <span
                        class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">CTO</span>
                </div>
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698659360.png" alt="Jerome image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Jerome Bell</h4>
                    <span
                        class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">CMO</span>
                </div>
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698650109.png" alt="Wade image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Wade Warren</h4>
                    <span
                        class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">CEO</span>
                </div>
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698650146.png" alt="Leslie image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Leslie Alexander</h4>
                    <span
                        class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">Customer
                        Support</span>
                </div>
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698650184.png" alt="Guy image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Guy Hawkins</h4>
                    <span
                        class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">HR</span>
                </div>
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698650213.png" alt="Ronald image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Ronald Richards</h4>
                    <span
                        class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">CO-Founder</span>
                </div>
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698650242.png" alt="Devon image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Devon Lane</h4>
                    <span class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">UI
                        Designer</span>
                </div>
                <div class="group block w-full text-center min-[450px]:w-1/2 sm:w-1/3 lg:w-1/5">
                    <div class="relative mb-5">
                        <img src="https://pagedone.io/asset/uploads/1698650271.png" alt="Dianne image"
                            class="ransition-all mx-auto h-28 w-28 rounded-2xl border-2 border-solid border-transparent object-cover duration-500 group-hover:border-indigo-600" />
                    </div>
                    <h4
                        class="mb-2 text-center text-xl font-semibold text-gray-900 transition-all duration-500 group-hover:text-indigo-600">
                        Dianne Russell</h4>
                    <span
                        class="block text-center text-gray-500 transition-all duration-500 group-hover:text-gray-900">Product
                        Designer</span>
                </div>
            </div>
        </div>
    </section>

@endsection
