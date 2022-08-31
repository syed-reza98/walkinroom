@extends('layouts.app2')

@section('content')

<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>

      <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <div class="grid grid-cols-12 col-span-12 gap-7">
            @foreach ($rooms as $room)
            <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">

                <?php
                    $arr=$room->image;
                    $yummy = json_decode($arr, true);
                    // dd($yummy[0]);
                ?>

                    {{-- <a href="{{ route('roomdetail',['id'=>$room->id, 1, 1]) }}" target="_self">
                        <img src="{{ Voyager::image( $yummy[0] ) }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" style="width:370px; height:247px">
                    </a> --}}

                <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                    <img class="object-cover shadow-sm max-h-56" style="width:382px;" src="{{ Voyager::image( $yummy[0] ) }}">
                </a>
                <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                    <div class="bg-indigo-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                        <span>{{ $room->hotel->location->city }}</span>
                    </div>
                    <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="#_">{{\Illuminate\Support\Str::limit($room->title, 20)}}</a></h2>
                    <li class="flex items-center py-2 space-x-4 xl:py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="font-medium text-gray-500">{{ $room->capacity }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <span class="font-medium text-gray-500">{{ $room->type->title }}</span>
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="#" class="inline-flex items-center justify-center px-2 py-1 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Book Now
                        </a>
                    </span>
                    </li>
                    <p class="mt-2 text-sm text-gray-500">Check out these inspiring workstations to get ideas on how to level-up your workstation.</p>
                    {{-- <p class="mt-2 text-sm text-gray-500">{{\Illuminate\Support\Str::limit($room->description, 20)}}</p> --}}
                </div>
            </div>
            @endforeach

            {{-- <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                    <img class="object-cover w-full shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/snacks.jpg">
                </a>
                <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                    <div class="bg-red-400 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                        <span>Food</span>
                    </div>
                    <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="#_">Eating for Productivity</a></h2>
                    <p class="mt-2 text-sm text-gray-500">Learn how to be more disciplined in your diet and how you can eat to maximize productivity.</p>
                </div>
            </div>

            <div class="flex flex-col items-start col-span-12 overflow-hidden shadow-sm rounded-xl md:col-span-6 lg:col-span-4">
                <a href="#_" class="block transition duration-200 ease-out transform hover:scale-110">
                    <img class="object-cover w-full shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/book-design.jpg">
                </a>
                <div class="relative flex flex-col items-start px-6 bg-white border border-t-0 border-gray-200 py-7 rounded-b-2xl">
                    <div class="bg-purple-500 absolute top-0 -mt-3 flex items-center px-3 py-1.5 leading-none w-auto inline-block rounded-full text-xs font-medium uppercase text-white inline-block">
                        <span>Resources</span>
                    </div>
                    <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="#_">A Design Mind-set</a></h2>
                    <p class="mt-2 text-sm text-gray-500">What does it mean to have a design mind-set? Learn how to improve your eye for design.</p>
                </div>
            </div> --}}
        </div>

        @foreach ($rooms as $room)
        @php
        $pp = 0;
        $pp = $room->price;
        $pp += ($pp*$per);
        $total = $pp*$datedif;
        // $value = \App\Models\Photo::where(['room_id' => $room->id])->pluck('path')->first()
        @endphp
        <a href="#" class="group">
          <div class="w-full overflow-hidden bg-gray-200 rounded-lg aspect-w-1 aspect-h-1 xl:aspect-w-7 xl:aspect-h-8">
            <?php
				$arr=$room->image;
				$yummy = json_decode($arr, true);
			?>
			{{-- <a href="tour-detail.html" target="_self">

				<img src="{{ Voyager::image( $yummy[0] ) }}" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
			</a> --}}
            <img src="{{ Voyager::image( $yummy[0] ) }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="object-cover object-center w-full h-64 group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ $room->title }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">Per Day: ${{ $pp }}</p>
          <p class="mt-1 text-lg font-medium text-gray-900">Total Price for {{ $datedif }} days: ${{ $total }}</p>
        </a>
        @endforeach
        <!-- More products... -->
      </div>
    </div>
  </div>


<!-- Section 7 -->


@endsection
