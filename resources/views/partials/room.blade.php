@extends('layouts.app2')

@section('content')
<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="pt-6">
      {{-- <nav aria-label="Breadcrumb">
        <ol role="list" class="flex items-center max-w-2xl px-4 mx-auto space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
          <li>
            <div class="flex items-center">
              <a href="#" class="mr-2 text-sm font-medium text-gray-900"> Men </a>
              <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
              </svg>
            </div>
          </li>

          <li>
            <div class="flex items-center">
              <a href="#" class="mr-2 text-sm font-medium text-gray-900"> Clothing </a>
              <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
              </svg>
            </div>
          </li>

          <li class="text-sm">
            <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"> Basic Tee 6-Pack </a>
          </li>
        </ol>
      </nav> --}}

      <!-- Image gallery -->
    <?php
        $arr=$room->image;
        $yummy = json_decode($arr, true);
    ?>
      <div class="max-w-2xl mx-auto mt-6 sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
        <div class="overflow-hidden rounded-lg aspect-w-3 aspect-h-4 lg:block">
          <img src="{{ Voyager::image( $yummy[0] ) }}" alt="Two each of gray, white, and black shirts laying flat." class="object-cover object-center w-full h-full">
        </div>
        <div class="lg:grid lg:grid-cols-1 lg:gap-y-8">
          <div class="overflow-hidden rounded-lg aspect-w-3 aspect-h-2">
            <img src="{{ Voyager::image( $yummy[1] ) }}" alt="Model wearing plain black basic tee." class="object-cover object-center w-full h-full">
          </div>
          <div class="overflow-hidden rounded-lg aspect-w-3 aspect-h-2">
            <img src="{{ Voyager::image( $yummy[2] ) }}" alt="Model wearing plain gray basic tee." class="object-cover object-center w-full h-full">
          </div>
        </div>
        <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
          <img src="{{ Voyager::image( $yummy[0] ) }}" alt="Model wearing plain white basic tee." class="object-cover object-center w-full h-full">
        </div>
      </div>

      <!-- Product info -->
      <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{ $room->title }}</h1>
        </div>

        <!-- Options -->
        <div class="mt-4 lg:mt-0 lg:row-span-3">
          <h2 class="text-3xl text-gray-900">Book Now</h2>
        @if ($price)
            <p class="text-3xl text-gray-900">Price: ${{ $price }}</p>
        @else
            <p class="text-2xl text-gray-900">To show price</p>
        @endif
          {{-- <p class="text-3xl text-gray-900">Price: ${{ $price }}</p> --}}

          <form class="mt-10" action="{{ route('booking',['id'=>$room->id]) }}" method="post">
            @csrf
              {{-- <select id="location" name="location" autocomplete="country-name" class="block w-full px-4 py-3 mb-4 bg-white border border-2 border-transparent border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 sm:text-sm">
                  <option>Select Location</option>
                @foreach ($locations as $location)
                  <option value={{$location->id}}>{{$location->city}}</option>
                @endforeach
              </select> --}}
              <div class="relative">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input name="cin" id="cin" datepicker="" datepicker-format="yyyy/mm/dd" datepicker-title="Check In" type="text" class="mb-4 border border-2 border-transparent border-gray-200 rounded-lg text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">
              </div>

              <div class="relative">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input name="cout" id="cout" datepicker="" datepicker-format="yyyy/mm/dd" datepicker-title="Check Out" type="text" class="mb-4 border border-2 border-transparent border-gray-200 rounded-lg text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date">
              </div>

            @guest
              @if (Route::has('register'))
              <div class="relative">
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="name" id="name" autocomplete="name" class="block w-full mt-1 mb-4 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div class="relative">
                <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                <input type="text" name="email" id="email" autocomplete="email" class="block w-full mt-1 mb-4 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              <div class="relative">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" autocomplete="password" class="block w-full mt-1 mb-4 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              @endif
            @endguest

              <div class="block">
                  <button type="submit" id="datebtn" class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Search</button>
              </div>
              <input type="hidden" name="nowDate" id="nowDate">
              <input type="hidden" name="result" id="result" value="">
              <input type="hidden" name="redate" id="redate" value="">
            </form>
        </div>

        <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <!-- Description and details -->
          <div>
            <h3 class="sr-only">Description</h3>

            <div class="space-y-6">
              <p class="text-base text-gray-900">{!! $room->description !!}</p>
            </div>
          </div>

          {{-- <div class="mt-10">
            <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

            <div class="mt-4">
              <ul role="list" class="pl-4 space-y-2 text-sm list-disc">
                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>

                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>

                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>

                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
              </ul>
            </div>
          </div>

          <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Details</h2>

            <div class="mt-4 space-y-6">
              <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
