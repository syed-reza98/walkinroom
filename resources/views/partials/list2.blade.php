
<section class="relative w-full bg-white">
    <div class="absolute w-full h-32 bg-gradient-to-b from-gray-100 to-white"></div>
    <div class="relative w-full px-5 py-8 mx-auto sm:py-10 md:py-14 md:px-10 max-w-7xl">
        {{-- <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8"> --}}
            <li class="flex items-center py-2 space-x-4 xl:py-3">
                <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-5xl xl:text-5xl sm:mb-3">Choose your destination</h1>
                {{-- <a href="{{ route('roomlist') }}" class="flex items-center w-full px-6 py-1 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                    See more
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a> --}}
            </li>
            <div class="grid grid-cols-1 mt-6 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($locations as $location)
                <div class="relative group">
                <div class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:h-80 lg:aspect-none">
                  <img src="{{ Voyager::image( $location->image ) }}" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full lg:w-full lg:h-full">
                </div>
                <div class="flex justify-between mt-4">
                  <div>
                    <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="#_">{{ $location->city }}</a></h2>
                    {{-- <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="#_">{{ $location->title }}</a></h2> --}}
                    <h3 class="text-base font-medium text-indigo-600">
                      <a href="{{ route('loclist',['id'=>$location->id]) }}">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        View All
                      </a>
                    </h3>
                    {{-- <p class="mt-1 text-sm text-gray-500">Black</p> --}}
                  </div>
                    @php
                        $count = App\Hotel::where('location_id', $location->id)->count();
                    @endphp
                    <li class="flex items-center py-2 space-x-1 xl:py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                        <span class="font-medium text-gray-900">Hotels: {{ $count }}</span>
                        {{-- <p class="text-sm font-medium text-gray-900">{{ $count }}</p> --}}
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="font-medium text-gray-500">{{ $room->capacity }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="font-medium text-gray-500">{{ $room->type->title }}</span> --}}
                    </li>

                </div>
              </div>
              @endforeach

              <!-- More products... -->
            {{-- </div> --}}
            </div>
    </div>
</section>

{{-- <div class="bg-white">
    <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2>

      <div class="grid grid-cols-1 mt-6 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="relative group">
          <div class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full lg:w-full lg:h-full">
          </div>
          <div class="flex justify-between mt-4">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  Basic Tee
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">Black</p>
            </div>
            <p class="text-sm font-medium text-gray-900">$35</p>
          </div>
        </div>

        <!-- More products... -->
      </div>
    </div>
  </div> --}}
