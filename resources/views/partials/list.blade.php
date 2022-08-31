
<section class="relative w-full bg-white">
    <div class="absolute w-full h-32 bg-gradient-to-b from-gray-100 to-white"></div>
    <div class="relative w-full px-5 py-8 mx-auto sm:py-10 md:py-14 md:px-10 max-w-7xl">
        <li class="flex items-center py-2 space-x-4 xl:py-3">
        <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-5xl xl:text-5xl sm:mb-3">Popular Rooms</h1>
        <a href="{{ route('roomlist') }}" class="flex items-center w-full px-6 py-1 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
            See more
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
        </li>
        <!-- <p class="text-lg font-medium text-gray-500 sm:text-2xl">Designs and layouts to help you with your app.</p> -->
        <div class="flex grid h-full grid-cols-12 gap-10 pb-10 mt-8 sm:mt-16">

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
                        <h2 class="text-base font-bold sm:text-lg md:text-xl"><a href="{{ route('room',['id'=>$room->id, 0, 0]) }}">{{\Illuminate\Support\Str::limit($room->title, 20)}}</a></h2>
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

        </div>
    </div>
</section>
