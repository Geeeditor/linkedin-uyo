@extends('layouts.app')

@section('title', 'Contact |')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ecetera.css') }}">
@endsection



@section('hero')

    <section class="hero-contact py-10">

        <div class="container">
            <div class="relative text-center">

                <h1 class="my-8 text-4xl font-extrabold text-white lg:text-6xl">Contact Us</h1>



            </div>

            <div class="flex justify-center">
                <div class="relative mt-5">
                    <a href="#price"
                        class="text-primary rounded-lg bg-white px-9 py-3 text-xl font-medium transition-all duration-500 hover:shadow-white/10">Join News Letter</a>
                </div>
            </div><!-- Flex End -->
        </div>
    </section>

@endsection

@section('content')
   <section class="bg-white">
  <div class="mx-auto max-w-screen-md px-4 py-8 lg:py-10">

      <p class="mb-5 text-center font-light text-gray-500 sm:text-xl lg:mb-10">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="mb-2 block text-sm font-medium text-gray-900">Your email</label>
              <input type="email" id="email" class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 px-1 py-3 text-sm text-gray-900 shadow-sm" placeholder="name@email.com" required>
          </div>
          <div>
              <label for="subject" class="mb-2 block text-sm font-medium text-gray-900">Subject</label>
              <input type="text" id="subject" class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 px-1 py-3 text-sm text-gray-900 shadow-sm" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="mb-2 block text-sm font-medium text-gray-900">Your message</label>
              <textarea id="message" rows="6" class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 px-1 py-3 text-sm text-gray-900 shadow-sm" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="mx-auto mt-3 block w-[49%] rounded-lg bg-purple-800 px-10 py-5 text-center text-white hover:bg-purple-700">Send message</button>
      </form>
  </div>
</section>


@endsection
