<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Yantra Symposium 2023</title>

        <!-- Primary Meta Tags -->
        <meta name="title" content="e-Yantra: Engineering a better tomorrow">
        <meta name="description" content="e-Yantra is a robotics outreach program funded by the Ministry of Education and hosted at IIT Bombay. The goal is to harness the talent of young engineers to solve problems using technology across a variety of domains such as: agriculture, manufacturing, defence, home, smart-city maintenance and service industries.">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.e-yantra.org/">
        <meta property="og:title" content="e-Yantra: Engineering a better tomorrow">
        <meta property="og:description" content="e-Yantra is a robotics outreach program funded by the Ministry of Education and hosted at IIT Bombay. The goal is to harness the talent of young engineers to solve problems using technology across a variety of domains such as: agriculture, manufacturing, defence, home, smart-city maintenance and service industries.">
        <meta property="og:image" content="https://www.e-yantra.org/img/logo.svg">

        <!-- extra -->
        <meta name="description" content="e-Yantra Robotics Competition (eYRC) is a unique annual competition for undergraduate students in Engineering/ Science/ Polytechnic colleges." />
        <meta name="description" content="e-Yantra Robotics Compeititon">
        <meta name="description" content="Innovation Challenge">
        <meta name="description" content="Robotics Compeititon">
        <meta name="description" content="IIT Bombay">
        <meta name="description" content="Robotics">
        <meta name="description" content="Technical">

        <meta name="author" content="e-Yantra">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <!-- header -->
        <header class="relative z-50 pb-4 lg:pt-4">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-center sm:justify-between lg:flex-nowrap">
                <div class="mt-10 lg:mt-0 lg:grow lg:basis-0">
                    <div class="flex items-center flex-shrink-0 text-gray-600 mr-6">
                        <a class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase" href="{!!route('eys.home')!!}">
                            <img src="{!! asset('img/logo.svg') !!}" alt="e-Yantra" class="w-48 md:w-56" />
                        </a>
                    </div>
                </div>

                <div class="order-first -mx-4 flex flex-auto basis-full overflow-x-auto whitespace-nowrap border-b border-blue-600/10 py-4 font-mono text-lg text-red-600 sm:-mx-6 lg:order-none lg:mx-0 lg:basis-auto lg:border-0 lg:py-0">
                    <div class="mx-auto flex flex-cols items-center gap-4 px-4">
                        <div class="text-center">
                            <p>
                                <time datetime="2022-04-04">05</time>-<time datetime="2022-04-06">06 of April, 2023</time>
                            </p>
                            <p>IIT Bombay, Mumbai</p>
                        </div>
                        <!-- <div>
                        <svg aria-hidden="true" viewBox="0 0 6 6" class="h-1.5 w-1.5 overflow-visible fill-current stroke-current">
                            <path d="M3 0L6 3L3 6L0 3Z" stroke-width="2" stroke-linejoin="round"></path>
                        </svg>
                        <p>IIT Bombay, Mumbai</p>
                        </div> -->
                    </div>
                </div>
                <div class="hidden sm:mt-10 sm:flex lg:mt-0 lg:grow lg:basis-0 lg:justify-end">
                    <a class="inline-flex justify-center rounded-2xl bg-red-600 p-4 text-base font-semibold text-white hover:bg-red-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:text-white/70" href="https://portal.e-yantra.org/eys.register" target="_blank">Book Your Seat</a>
                </div>
            </div>
        </header>
        <!-- end -->

        <!-- main -->
        <main>
            <!-- hero -->
            <div class="relative pt-10 pb-20 sm:py-24" style="background: linear-gradient(45deg, #000850 0%, #000320 100%), radial-gradient(100% 225% at 100% 0%, #FF6928 0%, #000000 100%), linear-gradient(225deg, #FF7A00 0%, #000000 100%), linear-gradient(135deg, #CDFFEB 10%, #CDFFEB 35%, #009F9D 35%, #009F9D 60%, #07456F 60%, #07456F 67%, #0F0A3C 67%, #0F0A3C 100%); background-blend-mode: screen, overlay, hard-light, normal;">
                <!-- <div class="absolute -left-3/4 lg:-left-48 md:-left-48 -top-20 -bottom-14 overflow-hidden bg-white">
                   <img alt="" src="{!!asset('img/elogo.png')!!}" decoding="async" data-nimg="1" class="blur-lg" style="color:transparent" width="800" height="1024">
                    <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-white"></div>
                    <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-white"></div>
                </div> -->
                <div class="invisible md:invisible lg:visible absolute -left-10 top-1/3" 
                style="transform: scale(0.7);">
                    <img src="{!! asset('img/eys/1.png') !!}" >
                </div>
                <div class="invisible md:invisible lg:visible absolute -right-10 top-1/3" 
                style="transform: scale(0.7);">
                    <img src="{!! asset('img/eys/2.png') !!}" >
                </div>

                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
                    <div class="mx-auto max-w-2xl lg:max-w-4xl lg:px-12">
                        <h2 class="font-display text-3xl font-bold tracking-tighter text-gray-500 lg:text-yellow-200  md:text-yellow-200 sm:text-4xl">
                            e-Yantra Symposium
                        </h2>
                        <h1 class="font-display text-5xl font-bold tracking-tighter text-gray-700 lg:text-yellow-300  md:text-yellow-300 sm:text-7xl mt-2">
                            Bridging the gap between Design and Engineering
                        </h1>
                        <div class="mt-6 space-y-6 font-display text-2xl tracking-tight text-white text-justify">
                            <p>
                                The e-Yantra Symposium is a national event that brings together researchers, educators, industry experts, and students from different parts of the country to explore innovative approaches to embedded systems, design thinking, robotics and automation.
                            </p>
                            <p>
                                The event includes design thinking activities/workshops, keynote, panel discussion and poster presentations from Top eLSI Colleges and exhibitions of cutting-edge technologies and demonstrations of projects developed by e-Yantra Innovation Challenge finalist teams from different colleges and universities.
                            </p>
                            <p>The e-Yantra Symposium provides an excellent platform for networking and exchanging ideas with peers and experts from various fields.</p>
                        </div>

                        <a class="inline-flex justify-center rounded-2xl bg-blue-600 p-4 text-base font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mt-10 w-full sm:hidden" href="https://portal.e-yantra.org/eys.register" target="_blank">Book Your Seat
                        </a>

                        <dl class="mt-10 grid grid-cols-2 gap-y-6 gap-x-10 sm:mt-16 sm:gap-y-10 sm:gap-x-16 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-start lg:text-left">
                            <div>
                                <dt class="font-mono text-xl text-yellow-300 font-semibold">Speakers</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-400">06</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-xl text-yellow-300 font-semibold">Projects Exhibiting</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-400">15</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-xl text-yellow-300 font-semibold">Venue</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-400">VMCC</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-xl text-yellow-300 font-semibold">Location</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-400">IIT Bombay, Mumbai</dd>
                            </div>
                        </dl>
                    </div>
                </div>                    
            </div>

            <!-- workshops -->
            <section class="relative py-20 sm:py-32" style="background: linear-gradient(125deg, #00FF57 0%, #010033 40%, #460043 70%, #F0FFC5 100%), linear-gradient(55deg, #0014C9 0%, #410060 100%), linear-gradient(300deg, #FFC700 0%, #001AFF 100%), radial-gradient(135% 215% at 115% 40%, #393939 0%, #393939 40%, #849561 calc(40% + 1px), #849561 60%, #EED690 calc(60% + 1px), #EED690 80%, #ECEFD8 calc(80% + 1px), #ECEFD8 100%), linear-gradient(125deg, #282D4F 0%, #282D4F 40%, #23103A calc(40% + 1px), #23103A 70%, #A0204C calc(70% + 1px), #A0204C 88%, #FF6C00 calc(88% + 1px), #FF6C00 100%); background-blend-mode: overlay, screen, overlay, overlay, normal;">

                <div class="invisible md:invisible lg:visible absolute -right-0 bottom-0" 
                style="transform: scale(0.7);">
                    <img src="{!! asset('img/eys/3.png') !!}">
                </div>

                <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">                    
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h2 class="font-display text-4xl font-medium tracking-tighter text-yellow-200 sm:text-5xl font-bold">
                            Design Workshop 
                        </h2>
                        <p class="mt-4 font-display text-2xl tracking-tight text-white text-justify">
                            This year our Design partner, <a class="font-bold text-blue-500" href="https://designup.io/" target="_blank">"DesignUp"</a> has collaborated with e-Yantra to create a special workshop to sensitise engineers to the importance of Design Thinking. We plan an exciting workshop to give insights to ensure they give customers a wow experience while solving their problems. 
                        </p>
                        <p class="mt-4 font-display text-2xl tracking-tight text-white text-justify">
                            In this workshop, we will explore the fundamental principles of design and how they can be applied to engineering projects. Through hands-on activities, we will learn how to ideate, prototype, and refine our designs to create innovative and functional solutions. Whether you are an experienced engineer or a curious beginner, this workshop will provide you with valuable skills and insights to take your designs to the next level. Let's get creative!
                        </p>
                        <p class="text-red-400 mt-4 text-2xl">There is no registration fee to attend the event. </p>
                        <div class="mx-auto max-w-4xl mt-8">
                            <a class="flex justify-center rounded-2xl bg-blue-600 p-4 text-4xl font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" href="https://portal.e-yantra.org/eys.register" target="_blank">Book Your Seat</a>
                        </div>
                    </div>  
                                      
                </div>
            </section><!-- end -->

            <!-- speaker -->
            <section class="relative py-20 sm:py-32" style="background-color: #000000; background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%23220000' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23440000' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23660000' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%23880000' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%23A00' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E&quot;); background-size: cover;">   

                <div class="invisible md:invisible lg:visible absolute -right-40 bottom-0" 
                style="transform: scale(0.6);">
                    <img src="{!! asset('img/eys/4.png') !!}">
                </div>                   

                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h2 class="font-display text-4xl font-medium tracking-tighter text-yellow-200 sm:text-5xl">
                            Speakers & Panelists
                        </h2>
                        <p class="mt-4 font-display text-2xl tracking-tight text-white">
                            Interesting talks and panel discussion with eminent speakers
                        </p>
                    </div>

                    <!-- days -->
                    <dl class="mt-10 grid md:grid-cols-2 lg:grid-cols-2 gap-y-6 gap-x-10 sm:mt-16 sm:gap-y-16 sm:gap-x-8 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-start lg:text-left">
                        <div>
                            <dt class="font-mono text-lg text-yellow-200">
                                <span class="font-bold">Day 1</span> <br>
                                Design Workshop, Project Exhibition
                            </dt>
                            <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-200">
                                <time datetime="2022-04-04" class="mt-1.5 block text-2xl font-semibold tracking-tight text-yellow-400">
                                    April 5<sup>th</sup>
                                </time>
                            </dd>
                        </div>
                        <div>
                            <dt class="font-mono text-lg text-yellow-200">
                                <span class="font-bold">Day 2</span><br>
                                Keynote Talks, Panel Discussion
                            </dt>
                            <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-200">
                                <time datetime="2022-04-04" class="mt-1.5 block text-2xl font-semibold tracking-tight text-yellow-400">
                                    April 6<sup>th</sup>
                                </time>
                            </dd>
                        </div>
                    </dl>

                    <!-- speakers photo -->
                    <div class="relative mt-6 max-w-4xl grid grid-cols-1 gap-16 md:grid-cols-2 lg:grid-cols-3 mt-12">
                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/Kavi_Arya.jpeg') !!}">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Prof. Kavi Arya
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Principal Investigator, e-Yantra
                                </p>
                            </div>
                        </div>
                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/Sudhanshu_Mani.jpg') !!}">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Sudhanshu Mani
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Innovator of Vande Bharat Express
                                </p>
                            </div>
                        </div>
                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/deepak_pathak.jpg') !!}">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Prof. Deepak B Phatak
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    IIT Bombay
                                </p>
                            </div>
                        </div>
                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/Vivek_Pawar.jpg') !!}">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Vivek Pawar
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Founder, Sankalp Semiconductor
                                </p>
                            </div>
                        </div>
                        <!-- <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/Gaurav_Raheja.png') !!}">
                                <h3 class="text-lg font-medium text-gray-900 mt-4">
                                    Prof. Gaurav Raheja
                                </h3>
                                <p class="text-gray-500 mt-2">
                                 IIT Roorkee
                             </p>
                         </div>
                     </div> -->
                     <!-- <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                        <div class="px-6 py-4 text-center">
                            <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/b_ravi.jpeg') !!}">
                            <h3 class="text-lg font-medium text-gray-900 mt-4">
                                Prof. B. Ravi
                            </h3>
                            <p class="text-gray-500 mt-2">
                                IIT Bombay
                            </p>
                        </div>
                    </div> -->
                    <!-- Add more team members as needed -->
                </div>
            </div>            
        </section><!-- end -->
              

            <!-- schedule -->
            <section class="py-20 sm:py-32" style="background: linear-gradient(245deg, #000000 0%, #FDFF96 100%), linear-gradient(245deg, #0038FF 0%, #000000 100%), radial-gradient(100% 225% at 100% 0%, #4200FF 0%, #001169 100%), linear-gradient(245deg, #000000 0%, #FFB800 100%), radial-gradient(115% 107% at 40% 100%, #EAF5FF 0%, #EAF5FF 40%, #A9C6DE calc(40% + 1px), #A9C6DE 70%, #247E6C calc(70% + 2px), #247E6C 85%, #E4C666 calc(85% + 2px), #E4C666 100%), linear-gradient(65deg, #083836 0%, #083836 40%, #66D37E calc(40% + 1px), #66D37E 60%, #C6E872 calc(60% + 1px), #C6E872 100%); background-blend-mode: overlay, screen, overlay, hard-light, overlay, normal;">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-4xl lg:pr-24">
                        <h2 class="font-display text-4xl font-medium tracking-tighter text-yellow-200 sm:text-5xl">
                            Event Schedule
                        </h2>
                        <p class="mt-4 font-display text-2xl tracking-tight text-white text-justify">
                            We have planned exciting activities and sessions for the event. From informative keynote to engaging workshops, our schedule is designed to provide you with a memorable and enriching experience.
                        </p>
                    </div>
                </div>

                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative mt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                        <!-- day 1 -->
                        <div class="p-4">
                            <h2 class="text-lg font-semibold mb-4 text-white text-center">
                                Day 1 <br>
                                Wednesday, April 5 <sup>th</sup>
                            </h2>
                            <ul>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        09:30 AM <br> 10:00 AM
                                    </div>
                                    <div class="w-3/4 text-white">Registration and Breakfast</div>
                                </li>

                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        10:00 AM <br> 10:30 AM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Inauguration of the event</h3>
                                        <p>Address: Director (IIT Bombay), HoD (CSE Dept.)</p>
                                    </div>
                                </li>

                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        10:30 AM <br> 11:30 AM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <p>
                                            <!-- <span class="font-bold"></span> --> 
                                            <br>Talk by Vivek Pawar
                                        </p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        11:30 AM <br> 01:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">eYIC Exhibition</h3>
                                        <p>Top projects chosen to be showcased</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        01:00 PM <br> 02:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Lunch</h3>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        02:00 PM <br> 04:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">eYIC Exhibition</h3>
                                        <p>Top projects chosen to be showcased</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        04:00 PM <br> 05:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <ul class="list-disc">
                                            DesignUp: Talks and Workshop
                                            <li class="ml-8">Designers and Engineers Conclave</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        05:00 PM <br> 05:30 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Tea Break</h3>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        05:30 PM <br> 06:30 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <ul class="list-disc">
                                            DesignUp: Talks and Workshop
                                            <li class="ml-8">Designers and Engineers Conclave</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        07:00 PM <br> Onwards
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Dinner</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- day 2 -->
                        <div class="p-4">
                            <h2 class="text-lg font-semibold mb-4 text-white text-center">
                                Day 2 <br>
                                Thursday, April 6 <sup>th</sup>
                            </h2>
                            <ul>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        09:00 AM <br> 10:00 AM
                                    </div>
                                    <div class="w-3/4 text-white">Registration and Breakfast</div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        10:00 AM <br> 11:00 AM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Welcome</h3>
                                        <p>Address: Associate Dean R&D, IIT Bombay</p>
                                        <p><span class="font-semibold">e-Yantra Status Report</span> </p>
                                        Prof. Kavi Arya
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        11:00 AM <br> 12:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3><b>Building Vandebharat Express</b></h3>
                                        <p>Keynote by Sudhanshu Mani</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        12:00 AM <br> 01:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Panel Discussion</h3>
                                        <p>Role of e-Yantra Labs in Industry/Academia interaction</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        01:00 PM <br> 02:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Lunch</h3>
                                        <p>(Alongwith Poster Presentation and Exhibition)</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        02:00 PM <br> 02:30 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <p>e-Yantra Lab Presentations</p>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        02:30 PM <br> 03:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Talk On Design meets Engineering</h3>
                                        <!-- <p>Talk</p> -->
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        03:00 PM <br> 03:45 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Awards Ceremony and Valedictory function</h3>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        03:45 PM <br> 04:00 PM
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">Vote of Thanks</h3>
                                    </div>
                                </li>
                                <li class="flex mb-2 border-2 border-yellow-200 rounded-md items-center py-2">
                                    <div class="w-1/4 font-mono text-white mx-4 border-r-2 border-yellow-200">
                                        04:00 PM <br> Onwards
                                    </div>
                                    <div class="w-3/4 text-white">
                                        <h3 class="font-semibold">High Tea</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mx-auto max-w-4xl">
                        <a class="flex justify-center rounded-2xl bg-red-600 p-4 text-4xl font-semibold text-white hover:bg-red-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:text-white/70" href="https://portal.e-yantra.org/eys.register" target="_blank">Book Your Seat</a>
                    </div>
                </div>
            </section>
        </main><!-- end -->
        <!-- footer -->
        <div class="items-center mx-auto relative bottom-0 bg-white">
            <footer class="text-blue-700 bg-white">
                <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
                    <a href="https://e-yantra.org" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none text-center">
                        <div class="inline-flex items-center">
                            <img src="{!! asset('img/footer_iitb_eyantra.png') !!}" class="d-inline-block align-top img-fluid h-18 w-60" alt="e-Yantra">
                        </div>
                    </a>
                    <nav class="flex flex-wrap items-center justify-center mx-auto text-base md:ml-auto md:mr-auto">
                        <a href="https://www.mooc.e-yantra.org" target="_blank" class="px-4 py-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">
                            MOOC
                        </a>
                        <a href="https://eyic.e-yantra.org" target="_blank" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">
                            eYIC
                        </a>
                        <a href="http://elsi.e-yantra.org" target="_blank" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">
                            eLSI
                        </a>
                        <a href="https://www.e-yantra.org/eyrdc" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">
                            eYRDC
                        </a>
                    </nav>
                    <span class="inline-flex justify-center mt-2 mr-2 sm:ml-auto sm:mt-0 sm:justify-start text-xl">
                        <a class="text-blue-500 hover:text-black">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-blue-500 hover:text-black">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-blue-500 hover:text-black">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-blue-500 hover:text-black">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-8 h-8" viewBox="0 0 24 24">
                                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </footer>
            <footer class="bg-blueGray-50">
                <div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
                    <a href="http://mhrd.gov.in/" target="_blank" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none text-center">
                        <div class="inline-flex items-center">
                            <img src="{!!asset('img/moe.png')!!}" class="d-inline-block align-top img-fluid h-18 w-60" alt="e-Yantra">
                        </div>
                    </a>
                    <div class="flex flex-wrap items-center justify-center mx-auto text-base md:ml-auto md:mr-auto">
                        <p class="lg:text-xl text-center">e-Yantra is a project sponsored by <br/><a class="text-blue-600" href="http://mhrd.gov.in/" target="_blank"> MoE</a> through the <a class="text-blue-600" href="//mhrd.gov.in/technology-enabled-learning-0" target="_blank">National Mission on Education through ICT (NMEICT)</a></p>
                    </div>
                    <div class="inline-flex justify-center mt-2 mr-2 sm:ml-auto sm:mt-0 sm:justify-start text-xl">
                        <a href="https://www.makeinindia.com/" target="_blank" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none text-center">
                            <div class="inline-flex items-center">
                                <img src="{!! asset('img/make-in-india.png')!!}" class="d-inline-block align-top img-fluid h-18 w-60" alt="e-Yantra">
                            </div>
                        </a>
                    </div>
                </div>
            </footer>
            <footer class="w-full py-2 text-center text-gray-500 pb-5">
                <hr class="mb-5">
                Copyright © {{ date("Y"); }} <a class="text-blue-600" href="//e-yantra.org" target="_blank">e-Yantra</a>. All rights reserved. <br>
            </footer>
        </div>
    </body>
</html>
