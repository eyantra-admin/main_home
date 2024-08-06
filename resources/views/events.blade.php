@extends('layout.main')
@section('content')

            <!-- e-Yantra events -->
            {{-- Live events --}}
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" >
                <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">e-Yantra Events</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <!-- right coloum -->
                    <div class="w-full">
                        <div class="relative">
                            <div class="h-10 -z-50 w-10 bg-red-500 rounded-full absolute -top-3 -left-5 animate-ping">
                            </div>
                            <h1 class="w-full relative z-50 my-2 text-2xl font-bold leading-tight text-left text-gray-800">Live Events</h1>
                            
                        </div>

                        @foreach ($live as $index=>$live_event)
                        <div class="flex mt-4 flex-wrap bg-white p-3 items-center hover:bg-red-50 hover:scale-95 transition-all transform ease-in-out duration-500" data-aos="fade-up" data-aos-duration="1500">
                            <div class="{{ $index % 2 == 0 ? 'w-6/6 sm:w-2/3 p-6 text-gray-700 text-md lg:text-md relative order-1 text-justify' : 'w-6/6 sm:w-2/3 p-6 text-gray-700 text-md lg:text-md relative order-2 text-justify' }}">
                                    <h1 class="text-2xl font-bold py-3">{{ $live_event->title }}</h1>
                                    <p>
                                        {{ $live_event->description }}
                                    </p>
                                    <span class="absolute top-2 right-2 px-4 bg-red-200 rounded-full font-semibold text-sm text-red-600">
                                        {{ $live_event->type == 1 ? 'Online' : 'Offline' }}
                                    </span>
                                    <div class="mt-5 text-md font-semibold text-sm flex flex-wrap gap-y-4 justify-between items-center">
                                        <div class="{{ $index % 2 == 1 ? 'order-1' : 'order-2'}}">
                                            <i class="fas fa-calendar text-xl"></i>
                                            <span>{{ \Carbon\Carbon::parse($live_event->start_date)->format('Y-m-d g:i a') }}</span>
                                            @if ($live_event->end_date)
                                                <span> - {{ \Carbon\Carbon::parse($live_event->end_date)->format('Y-m-d g:i a') }}</span>
                                            @endif
                                        </div>
                                        <div class="{{ $index % 2 == 1 ? 'order-2' : 'order-1'}}">
                                            @if ($live_event->url)
                                                <a href="{{ $live_event->url }}" target="_blank" class="px-4 py-2 bg-red-500 font-bold text-white hover:bg-red-800 rounded-sm mr-2">
                                                    Know More
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="{{ $index % 2 == 0 ? 'w-full sm:w-1/3 order-2' : 'w-full sm:w-1/3 order-1' }}">
                                <img class="w-full md:w-2/2 mx-auto" src="{{ Storage::url($live_event->poster) }}" height="450" width="400">
                            </div>
                        </div>
                           
                        @endforeach
                    </div>
                </div>
            </section>
            
            <!-- End Section -->


            {{-- Upcoming events --}}
            @if ($upcoming->count() > 0)
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" >
                <div class="container max-w-7xl mx-auto m-4">
                    <!-- right coloum -->
                    <div class="w-full">
                        <div class="relative">
                            <div class="h-10 -z-50 w-10 bg-red-100 rounded-full absolute -top-3 -left-5 animate-bounce">
                            </div>
                            <h1 class="w-full relative z-50 my-2 text-2xl font-bold leading-tight text-left text-gray-800">Upcoming Events</h1>
                            
                        </div>

                        @foreach ($upcoming as $index=>$live_event)
                        <div class="flex mt-4 flex-wrap bg-white p-3 items-center hover:bg-red-50 hover:scale-95 transition-all transform ease-in-out duration-500" data-aos="fade-up" data-aos-duration="1500">
                            <div class="{{ $index % 2 == 0 ? 'w-6/6 sm:w-2/3 p-6 text-gray-700 text-md lg:text-md relative order-1 text-justify' : 'w-6/6 sm:w-2/3 p-6 text-gray-700 text-md lg:text-md relative order-2 text-justify' }}">
                                    <h1 class="text-2xl font-bold py-3">{{ $live_event->title }}</h1>
                                    <p>
                                        {{ $live_event->description }}
                                    </p>
                                    <span class="absolute top-2 right-2 px-4 bg-red-200 rounded-full font-semibold text-sm text-red-600">
                                        {{ $live_event->type == 1 ? 'Online' : 'Offline' }}
                                    </span>
                                    <div class="mt-5 text-md font-semibold text-sm flex flex-wrap gap-y-4 justify-between items-center">
                                        <div class="{{ $index % 2 == 1 ? 'order-1' : 'order-2'}}">
                                            <i class="fas fa-calendar text-xl"></i>
                                            <span>{{ \Carbon\Carbon::parse($live_event->start_date)->format('Y-m-d g:i a') }}</span>
                                            @if ($live_event->end_date)
                                                <span> - {{ \Carbon\Carbon::parse($live_event->end_date)->format('Y-m-d g:i a') }}</span>
                                            @endif
                                        </div>
                                        <div class="{{ $index % 2 == 1 ? 'order-2' : 'order-1'}}">
                                            @if ($live_event->url)
                                                <a href="{{ $live_event->url }}" target="_blank" class="px-4 py-2 bg-red-500 font-bold text-white hover:bg-red-800 rounded-sm mr-2">
                                                    Know More
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="{{ $index % 2 == 0 ? 'w-full sm:w-1/3 order-2' : 'w-full sm:w-1/3 order-1' }}">
                                <img class="w-full md:w-2/2 mx-auto" src="{{ Storage::url($live_event->poster) }}" height="450" width="400">
                            </div>
                        </div>
                           
                        @endforeach
                    </div>
                </div>
            </section>                
            @endif

            {{-- End Section --}}

            {{-- Upcoming events --}}
            @if ($done->count() > 0)
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" >
                <div class="container max-w-7xl mx-auto m-4">
                    <!-- right coloum -->
                    <div class="w-full">
                        <div class="relative">
                            <div class="h-10 -z-50 w-10 bg-red-100 rounded-full absolute -top-3 -left-5 animate-bounce">
                            </div>
                            <h1 class="w-full relative z-50 my-2 text-2xl font-bold leading-tight text-left text-gray-800">Past Events</h1>
                            
                        </div>

                        @foreach ($done as $index=>$live_event)
                        <div class="flex mt-4 flex-wrap bg-white p-3 items-center hover:bg-red-50 hover:scale-95 transition-all transform ease-in-out duration-500" data-aos="fade-up" data-aos-duration="1500">
                            <div class="{{ $index % 2 == 0 ? 'w-6/6 sm:w-2/3 p-6 text-gray-700 text-md lg:text-md relative order-1 text-justify' : 'w-6/6 sm:w-2/3 p-6 text-gray-700 text-md lg:text-md relative order-2 text-justify' }}">
                                    <h1 class="text-2xl font-bold py-3">{{ $live_event->title }}</h1>
                                    <p>
                                        {{ $live_event->description }}
                                    </p>
                                    <span class="absolute top-2 right-2 px-4 bg-red-200 rounded-full font-semibold text-sm text-red-600">
                                        {{ $live_event->type == 1 ? 'Online' : 'Offline' }}
                                    </span>
                                    <div class="mt-5 text-md font-semibold text-sm flex flex-wrap gap-y-4 justify-between items-center">
                                        <div class="{{ $index % 2 == 1 ? 'order-1' : 'order-2'}}">
                                            <i class="fas fa-calendar text-xl"></i>
                                            <span>{{ \Carbon\Carbon::parse($live_event->start_date)->format('Y-m-d g:i a') }}</span>
                                            @if ($live_event->end_date)
                                                <span> - {{ \Carbon\Carbon::parse($live_event->end_date)->format('Y-m-d g:i a') }}</span>
                                            @endif
                                        </div>
                                        <div class="{{ $index % 2 == 1 ? 'order-2' : 'order-1'}}">
                                            @if ($live_event->url)
                                                <a href="{{ $live_event->url }}" target="_blank" class="px-4 py-2 bg-red-500 font-bold text-white hover:bg-red-800 rounded-sm mr-2">
                                                    Know More
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="{{ $index % 2 == 0 ? 'w-full sm:w-1/3 order-2' : 'w-full sm:w-1/3 order-1' }}">
                                <img class="w-full md:w-2/2 mx-auto" src="{{ Storage::url($live_event->poster) }}" height="450" width="400">
                            </div>
                        </div>
                           
                        @endforeach
                    </div>
                </div>
            </section>                
            @endif

            {{-- End Section --}}
@stop
