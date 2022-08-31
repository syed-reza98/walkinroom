
<section class="relative w-full bg-white">
    <div class="absolute w-full h-32 bg-gradient-to-b from-gray-100 to-white"></div>
    <div class="relative w-full px-5 py-8 mx-auto sm:py-10 md:py-14 md:px-10 max-w-7xl">

        <h1 class="mb-1 text-4xl font-extrabold leading-none text-gray-900 lg:text-5xl xl:text-5xl sm:mb-3">Browse by Property type</h1>
        {{-- <a href="#_" class="flex items-center w-full px-6 py-1 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto" style="width: 50%;">
            See all the popular tours
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a> --}}
        <!-- <p class="text-lg font-medium text-gray-500 sm:text-2xl">Designs and layouts to help you with your app.</p> -->
        <div class="flex grid h-full grid-cols-12 gap-10 pb-10 mt-8 sm:mt-16">
            <!-- <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/quench-satisfying.jpg')">
                </a>
                <div class="relative z-20 w-full h-auto py-8 text-white bg-purple-500 border-t-0 border-yellow-200 px-7">
                    <a href="#_" class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-purple-500 bg-white">Resources</a>
                    <h2 class="mb-5 text-5xl font-bold"><a href="#_">Refreshing Designs</a></h2>
                    <p class="mb-2 text-lg font-normal text-purple-100 opacity-100">Quench satisfying designs to help you stir up emotion and tell a story.</p>

                </div>
            </div>

            <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group md:col-span-6 xl:col-span-4">
                <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/orange.jpg')">
                </a>
                <div class="relative z-20 w-full h-auto py-8 text-white bg-blue-400 border-t-0 border-yellow-200 px-7">
                    <a href="#_" class="inline-block text-xs font-semibold absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-blue-500 bg-white">Lifestyle</a>
                    <h2 class="mb-5 text-5xl font-bold"><a href="#_">Healthier Lifestyle</a></h2>
                    <p class="mb-2 text-lg font-normal text-blue-100 opacity-100">Living a healthier lifestyle will help with your productivity and your mind-set.</p>

                </div>
            </div> -->

            {{-- <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group sm:col-span-12 xl:col-span-3 sm:flex-row xl:flex-col">
                <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/gbc.jpg')"></a>
                <div class="relative z-20 flex flex-col items-start justify-center w-full h-auto py-8 text-white bg-purple-500 border-t-0 border-yellow-200 sm:h-full xl:h-auto px-7">
                    <a href="#_" class="inline-block text-xs font-semibold absolute sm:mb-5 xl:mb-0 sm:relative xl:absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-yellow-400 bg-white">Entertainment</a>
                    <h2 class="mb-5 text-5xl font-bold"><a href="#_">Gaming Evolution</a></h2>
                    <p class="mb-2 text-lg font-normal opacity-100 text-yellow-50">Learn about the evolution of gaming and how it started a revolution.</p>

                </div>
            </div> --}}
            @foreach ($types as $type)
            <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group sm:col-span-12 xl:col-span-3 sm:flex-row xl:flex-col">
                <a href="{{ route('typelist',['id'=>$type->id]) }}" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-72 hover:scale-110" style="background-image:url('{{ Voyager::image( $type->image ) }}')"></a>
                <div class="relative z-20 flex flex-col items-start justify-center w-full h-auto py-6 text-white bg-blue-400 border-t-0 border-yellow-200 sm:h-full xl:h-auto px-7">
                    <a href="{{ route('typelist',['id'=>$type->id]) }}" class="inline-block text-xs font-semibold absolute sm:mb-5 xl:mb-0 sm:relative xl:absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-yellow-400 bg-white">See all</a>
                    {{-- <h2 class="mb-1 text-3xl font-bold"><a href="{{ route('typelist',['id'=>$type->id]) }}">{{ $type->title }}</a></h2> --}}
                    @php
						$count = App\Room::where('type_id', $type->id)->count();
					@endphp
                    <li class="flex items-center py-2 space-x-2 xl:py-3">
                        <h2 class="mb-1 text-2xl font-bold"><a href="{{ route('typelist',['id'=>$type->id]) }}">{{ $type->title }}</a></h2>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="font-normal opacity-100 text-yellow-50">{{ $count }}</span>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg> --}}
                        {{-- <span class="font-normal opacity-100 text-yellow-50">View All</span> --}}
                        </li>
                    {{-- <p class="mb-2 text-lg font-normal opacity-100 text-yellow-50">Learn about the evolution of gaming and how it started a revolution.</p> --}}

                </div>
            </div>
            @endforeach
            {{-- <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group sm:col-span-12 xl:col-span-3 sm:flex-row xl:flex-col">
                <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/gbc.jpg')"></a>
                <div class="relative z-20 flex flex-col items-start justify-center w-full h-auto py-8 text-white bg-yellow-400 border-t-0 border-yellow-200 sm:h-full xl:h-auto px-7">
                    <a href="#_" class="inline-block text-xs font-semibold absolute sm:mb-5 xl:mb-0 sm:relative xl:absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-yellow-400 bg-white">Entertainment</a>
                    <h2 class="mb-5 text-5xl font-bold"><a href="#_">Gaming Evolution</a></h2>
                    <p class="mb-2 text-lg font-normal opacity-100 text-yellow-50">Learn about the evolution of gaming and how it started a revolution.</p>

                </div>
            </div>
            <div class="relative flex flex-col items-start justify-end h-full col-span-12 overflow-hidden rounded-xl group sm:col-span-12 xl:col-span-3 sm:flex-row xl:flex-col">
                <a href="#_" class="block w-full transition duration-300 ease-in-out transform bg-center bg-cover h-96 hover:scale-110" style="background-image:url('https://cdn.devdojo.com/images/may2021/gbc.jpg')"></a>
                <div class="relative z-20 flex flex-col items-start justify-center w-full h-auto py-8 text-white bg-yellow-400 border-t-0 border-yellow-200 sm:h-full xl:h-auto px-7">
                    <a href="#_" class="inline-block text-xs font-semibold absolute sm:mb-5 xl:mb-0 sm:relative xl:absolute top-0 -mt-3.5 rounded-full px-4 py-2 uppercase text-yellow-400 bg-white">Entertainment</a>
                    <h2 class="mb-5 text-5xl font-bold"><a href="#_">Gaming Evolution</a></h2>
                    <p class="mb-2 text-lg font-normal opacity-100 text-yellow-50">Learn about the evolution of gaming and how it started a revolution.</p>

                </div>
            </div> --}}

        </div>
    </div>
</section>
