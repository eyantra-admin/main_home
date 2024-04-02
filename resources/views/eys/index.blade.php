<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Yantra Symposium 2024</title>

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

        <!-- alpinejs -->
        <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->

        <!-- Styles -->
        <style>

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            /* blob */
            .blob{
                background-size: cover;
                -webkit-background-position: center;
                background-position: center center;
                margin: 20px;
                box-shadow: 0 5px 5px 5px rgba(13, 110, 253, 0.2);
                animation: animate 5s ease-in-out infinite;
                transition: all 1s ease-in-out;
            }

            @keyframes animate {
                0%, 100%{
                    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
                }
                50%{
                    border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
                }
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
                                <time datetime="2022-04-04">05</time>-<time datetime="2022-04-06">06 of April, 2024</time>
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
                <div class="hidden sm:mt-10 sm:flex lg:mt-0 lg:grow lg:basis-0 lg:justify-end animate-bounce">
                    <a class="inline-flex justify-center rounded-2xl bg-red-600 px-4 py-2 text-base font-semibold text-white hover:bg-red-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:text-white/70" href="https://portal.e-yantra.org/eys.register" target="_blank"><code>Book Your Seat</code></a>
                </div>
            </div>

            <nav class="sticky flex flex-col text-center py-4 px-6 w-full border-t font-mono">
                <div class="mx-auto">
                    <a href="#workshop" class="text-lg no-underline text-grey-darkest hover:text-red-600 ml-2">Discussion</a>
                    <a href="#speakers" class="text-lg no-underline text-grey-darkest hover:text-red-600 ml-4">Speakers</a>
                    <a href="#schedule" class="text-lg no-underline text-grey-darkest hover:text-red-600 ml-4">Schedule</a>
                </div>
            </nav>
        </header>
        <!-- end -->

        <!-- main -->
        <main><!-- hero -->
            <section class="relative overflow-hidden py-10" style="background: linear-gradient(45deg, #000850 0%, #000320 100%), radial-gradient(100% 225% at 100% 0%, #FF6928 0%, #000000 100%), linear-gradient(225deg, #FF7A00 0%, #000000 100%), linear-gradient(135deg, #CDFFEB 10%, #CDFFEB 35%, #009F9D 35%, #009F9D 60%, #07456F 60%, #07456F 67%, #0F0A3C 67%, #0F0A3C 100%); background-blend-mode: screen, overlay, hard-light, normal;">

                <!-- Left Animated Blob Image -->
                <div class="absolute top-1/4 left-0 w-1/2 lg:w-1/3 invisible md:invisible lg:visible">
                    <img src="{!! asset('img/eys/1.png') !!}" alt="e-Yantra" class="object-cover w-full h-full">
                </div>

                <!-- Right Animated Blob Image -->
                <div class="absolute -bottom-10 right-0 w-1/2 lg:w-1/3 invisible md:invisible lg:visible" style="transform: scale(0.8);">
                    <img src="{!! asset('img/eys/3.png') !!}" alt="e-Yantra" class="object-cover w-full h-full">
                </div>

                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="mx-auto max-w-3xl lg:max-w-4xl lg:px-12">
                        <h2 class="font-display text-3xl font-bold tracking-tighter text-gray-500 lg:text-yellow-200  md:text-yellow-200 sm:text-3xl">
                            e-Yantra Symposium
                        </h2>
                        <h1 class="font-display text-3xl font-bold tracking-tighter text-gray-700 lg:text-yellow-300  md:text-yellow-300 sm:text-3xl mt-2">
                            NEP2020 & Building a Defence Ecosystem!
                        </h1>
                        <div class="mt-6 space-y-6 font-display text-2xl tracking-tight text-white text-justify">
                            <p>
                                The e-Yantra Symposium is a national event that brings together researchers, educators, incubators, industry experts, and students to explore innovative approaches to embedded systems, design thinking, robotics and automation. It is an important event in the diary of e-Yantra faculty and students.
                            </p>
                            <p>
                                A variety of engagements, such as panel discussions, lightning talks by IITB faculty, lab visits, poster presentations and exhibition of cutting-edge technologies, contributes to a holistic experience for attendees.
                            </p>
                            <p>
                                The showcasing of projects developed by e-Yantra Innovation Challenge finalist teams adds a practical and competitive element to the event, allowing participants to witness real-world applications and innovations.
                            </p>
                            <p>
                                Moreover, the networking opportunities provided by the symposium offer a valuable chance for individuals to connect with peers and experts from different backgrounds. This exchange of ideas and experiences can lead to fruitful collaborations, knowledge sharing, and the exploration of new possibilities in the realm of embedded systems, design thinking, robotics, and automation.
                            </p>
                        </div>

                        <a class="inline-flex justify-center rounded-2xl bg-blue-600 p-4 text-base font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70 mt-10 w-full sm:hidden" href="https://portal.e-yantra.org/eys.register" target="_blank">Book Your Seat
                        </a>

                        <dl class="mt-10 grid grid-cols-2 gap-y-6 gap-x-10 sm:mt-16 sm:gap-y-10 sm:gap-x-16 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-start lg:text-left">
                            <div>
                                <dt class="font-mono text-xl text-white font-semibold" style="text-shadow: 2px 2px #FF0000;">Speakers</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-400" style="text-shadow: 2px 2px #FF0000;">06</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-xl text-white font-semibold" style="text-shadow: 2px 2px #FF0000;">Projects Exhibiting</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-400" style="text-shadow: 2px 2px #FF0000;">15</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-xl text-white font-semibold" style="text-shadow: 2px 2px #FF0000;">Venue</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-400" style="text-shadow: 2px 2px #FF0000;">VMCC</dd>
                            </div>
                            <div>
                                <dt class="font-mono text-xl text-white font-semibold" style="text-shadow: 2px 2px #FF0000;">Location</dt>
                                <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-400" style="text-shadow: 2px 2px #FF0000;">IIT Bombay, Mumbai</dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>

            <!-- talk -->
            <section id="workshop" class="py-10" style="background: linear-gradient(125deg, #00FF57 0%, #010033 40%, #460043 70%, #F0FFC5 100%), linear-gradient(55deg, #0014C9 0%, #410060 100%), linear-gradient(300deg, #FFC700 0%, #001AFF 100%), radial-gradient(135% 215% at 115% 40%, #393939 0%, #393939 40%, #849561 calc(40% + 1px), #849561 60%, #EED690 calc(60% + 1px), #EED690 80%, #ECEFD8 calc(80% + 1px), #ECEFD8 100%), linear-gradient(125deg, #282D4F 0%, #282D4F 40%, #23103A calc(40% + 1px), #23103A 70%, #A0204C calc(70% + 1px), #A0204C 88%, #FF6C00 calc(88% + 1px), #FF6C00 100%); background-blend-mode: overlay, screen, overlay, overlay, normal;">
                <div class="flex flex-col lg:flex-row lg:w-5/6 mx-auto">
                    <!-- Text div on the left -->
                    <div class="lg:w-1/2 lg:order-1">
                        <div class="p-8">
                            <h2 class="font-display text-4xl font-medium tracking-tighter text-yellow-200 sm:text-5xl font-bold">
                                Building a Defence Startup Ecosystem
                            </h2>
                            <div class="flex font-mono text-lg text-yellow-500 mt-4">
                                <p>Day 1: <span class="font-bold">Friday, April 5<sup>th</sup></span></p>
                            </div>
                            <div class="mt-2"><span class="font-mono text-sm text-yellow-600 bg-yellow-50 rounded-md px-2 py-1 font-semibold">Panel Disussion</span></div>
                            <p class="mt-4 font-display text-2xl tracking-tight text-white text-justify">
                                The vision of e-Yantra is to establish connections with over 500+ e-Yantra labs, engaging them in addressing societal issues that can serve as foundational projects that eventually lead to startups within colleges. It places equal emphasis on familiarizing participants with challenges in the defence sector.
                            </p>
                            <p class="mt-4 font-display text-2xl tracking-tight text-white text-justify">
                                In this panel discussion, the panellists explore the essential requirements for constructing a defence startup ecosystem. Following this, there will be a discussion involving incubators, educators, government officials, and startup stakeholders to strategize and accomplish the specified objectives. This discussion aims to provide insights into enhancing the engagement of the e-Yantra Community with these challenges.
                            </p>
                            <p class="text-red-400 mt-4 text-2xl">There is no registration fee to attend the event. </p>
                            <div class="mx-auto max-w-4xl mt-8">
                                <a class="flex justify-center rounded-2xl bg-blue-600 p-4 text-4xl font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" href="https://portal.e-yantra.org/eys.register" target="_blank">Book Your Seat</a>
                            </div>
                        </div>
                    </div>

                    <!-- Image on the right -->
                    <div class="lg:w-1/2 lg:order-2 hidden lg:block md:my-auto">
                        <img src="{!! asset('img/eys/2.png') !!}" alt="Defence Startup Ecosystem" class="w-full h-auto">
                    </div>
                </div>
            </section>

            <section class="py-10" style="background: linear-gradient(to left bottom, rgb(16, 185, 129), rgb(55, 48, 163), rgb(244, 63, 94));">
                <div class="flex flex-col lg:flex-row lg:w-5/6 mx-auto">
                    <!-- Image on the left (hidden on tablet and mobile) -->
                    <div class="lg:w-1/2 hidden lg:block md:my-auto">
                        <img src="{!! asset('img/eys/1.png') !!}" alt="NEP2020" class="w-full h-auto">
                    </div>
                    <!-- Text div on the right -->
                    <div class="lg:w-1/2">
                        <div class="p-8">
                            <h2 class="font-display text-4xl font-medium tracking-tighter text-yellow-200 sm:text-5xl font-bold">
                                Implementing NEP2020 <br> “Design your Degree”
                            </h2>
                            <div class="flex font-mono text-lg text-yellow-500 mt-4">
                                <p>Day 2: <span class="font-bold">Sat, April 6<sup>th</sup></span></p>
                            </div>
                            <div class="mt-2"><span class="font-mono text-sm text-yellow-600 bg-yellow-50 rounded-md px-2 py-1 font-semibold">Panel Disussion</span></div>
                            <p class="mt-4 font-display text-2xl tracking-tight text-white text-justify">
                                The National Education Policy (NEP) aims to revamp and modernize India's education system, giving importance to a holistic approach that highlights skill development, flexibility, and a thorough understanding of subjects.
                            </p>
                            <p class="mt-4 font-display text-2xl tracking-tight text-white text-justify">
                                NEP's objective is to deliver a well-rounded, multidisciplinary undergraduate education, creating graduates with integrated personalities and improved employability. This panel discussion will centre on addressing the ongoing question among educators: "How can we incorporate NEP 2020 into the curriculum?" With a special emphasis on the University of Jammu's "Design your degree" program, which aligns with the principles of NEP 2020.
                            </p>
                            <p class="text-red-400 mt-4 text-2xl">There is no registration fee to attend the event. </p>
                            <div class="mx-auto max-w-4xl mt-8">
                                <a class="flex justify-center rounded-2xl bg-blue-600 p-4 text-4xl font-semibold text-white hover:bg-blue-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" href="https://portal.e-yantra.org/eys.register" target="_blank">Book Your Seat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- speaker -->
            <section id="speakers" class="relative py-20 sm:py-32" style="background-color: #000000; background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%23220000' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23440000' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23660000' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%23880000' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%23A00' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E&quot;); background-size: cover;">

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
                    <!-- <dl class="mt-10 grid md:grid-cols-2 lg:grid-cols-2 gap-y-6 gap-x-10 sm:mt-16 sm:gap-y-16 sm:gap-x-8 sm:text-center lg:auto-cols-auto lg:grid-flow-col lg:grid-cols-none lg:justify-start lg:text-left">
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
                                Keynote, Talks & Panel Discussion
                            </dt>
                            <dd class="mt-0.5 text-2xl font-semibold tracking-tight text-yellow-200">
                                <time datetime="2022-04-04" class="mt-1.5 block text-2xl font-semibold tracking-tight text-yellow-400">
                                    April 6<sup>th</sup>
                                </time>
                            </dd>
                        </div>
                    </dl> -->

                    <!-- speakers photo -->
                    <div class="relative mt-6 max-w-6xl grid grid-cols-1 gap-12 md:grid-cols-3 lg:grid-cols-4 mt-12">
                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/amit-kalyani.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.linkedin.com/in/amit-kalyani-3806375/" target="_blank">Mr. Amit Kalyani</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Joint Managing Director, <br> Bharat Forge Ltd.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/amulpreet-singh-sethi.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.linkedin.com/in/amulpreet-singh-sethi-38a863184/" target="_blank">Rear Admiral AS Sethi (Retd.)</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Ex-Director General, WESEE
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/deepak-kumar-goswami.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    Rear Admiral. DK Goswami
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Admiral Superintendent, <br>Naval Dockyard, Mumbai
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/dinesh-singh.jpeg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.linkedin.com/in/dinesh-singh-074213146" target="_blank">Prof. Dinesh Singh</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                   Vice Chair & Chair EC, <br> J & K Higher Education Council.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/ganesh-ramakrishnan.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.cse.iitb.ac.in/~ganesh/" target="_blank">Prof. Ganesh Ramakrishnan</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Professor, <br> CSE, IIT Bombay
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/Kavi_Arya.jpeg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4 ">
                                    <a href="https://www.cse.iitb.ac.in/~kavi/" target="_blank">Prof. Kavi Arya</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Principal Investigator, <br> e-Yantra, IIT Bombay
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/kiran-shesh.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.linkedin.com/in/kiranshesh" target="_blank">Mr. Kiran Shesh</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    CEO, <br> TIH Foundation for IoT and IoE, IIT Bombay
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/kota-harinarayana.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://klorofeelschool.ac.in/kota-harinarayana/" target="_blank">Dr. Kota Harinarayana</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Aircraft Designer, <br> Programme Director and Chief Designer <br>of India’s Light Combat Aircraft
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/milind-rane.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.me.iitb.ac.in/?q=faculty/Prof%20M%20V%20Rane" target="_blank">Prof. Milind Rane</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Professor <br> Heat Pump Laboratory, IIT Bombay
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/paritosh-pandya.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.cse.iitb.ac.in/~pandya58/" target="_blank">Prof. Paritosh Pandya</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Adjunct Professor, <br> IIT Bombay
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/prasad-bansod.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    Lt Colonel Prasad Bansod
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Indian Army, DRDO
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/raghunath-iyer.jpeg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.linkedin.com/in/raghunathiyer" target="_blank">Mr. Raghunath Iyer</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    CTO, <br> Qualys
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/richa-verma.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.7iworldschool.com/principal-desk.html" target="_blank">Ms. Richa Verma</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Principal, <br> 7i World School, Gwalior
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/sandeep-wadhwa.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    Commodore Sandeep Wadhwa
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Indian Navy
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/shakil-ahmad-romshoo.jpeg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4 ">
                                    <a href="https://www.iust.ac.in/vice-chancellor.aspx" target="_blank">Prof. Shakil Ahmad Romshoo</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Vice Chancellor, <br> IUST, Kashmir
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/shobha-bagai.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4 ">
                                    <a href="https://cic.du.ac.in/userfiles/media/Faculty_Proforma%20_Shobha_Bagai_July2023.pdf" target="_blank">Prof. Shobha Bagai</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Director, <br> CIC, New Delhi
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/shubha-pandit.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4 ">
                                    <a href="https://www.linkedin.com/in/shubha-pandit-96a3a747" target="_blank">Prof. Shubha Pandit</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                     Ex-Principal, <br> K J Somaiya College of Engineering
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/surya-durbha.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4 ">
                                    <a href="https://iitb.irins.org/profile/164582" target="_blank">Prof. Surya S Durbha</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Professor & Head, <br> CSRE, IIT Bombay
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/umesh-rai.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4 ">
                                    <a href="https://www.jammuuniversity.ac.in/sites/default/files/inline-files/Curriculam%20vitae%20of%20Prof.%20Umesh%20Rai.pdf" target="_blank">Prof. Umesh Rai</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Vice Chancellor, <br> University of Jammu
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/varsha-apte.png') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4 ">
                                    <a href="https://www.cse.iitb.ac.in/~varsha/" target="_blank">Prof. Varsha Apte</a>
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Professor & Head, <br> CSE, IIT Bombay
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/vk-rai.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    Dr. VK Rai
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Retd. Naval Officer
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/vp-singh.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    Captain Victor Pratap Singh
                                </h3>
                                <p class="text-gray-500 mt-2 text-sm">
                                    Indian Navy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- end -->


        <!-- schedule -->
        <section id="schedule" class="py-20 sm:py-32" style="background: linear-gradient(245deg, #000000 0%, #FDFF96 100%), linear-gradient(245deg, #0038FF 0%, #000000 100%), radial-gradient(100% 225% at 100% 0%, #4200FF 0%, #001169 100%), linear-gradient(245deg, #000000 0%, #FFB800 100%), radial-gradient(115% 107% at 40% 100%, #EAF5FF 0%, #EAF5FF 40%, #A9C6DE calc(40% + 1px), #A9C6DE 70%, #247E6C calc(70% + 2px), #247E6C 85%, #E4C666 calc(85% + 2px), #E4C666 100%), linear-gradient(65deg, #083836 0%, #083836 40%, #66D37E calc(40% + 1px), #66D37E 60%, #C6E872 calc(60% + 1px), #C6E872 100%); background-blend-mode: overlay, screen, overlay, hard-light, overlay, normal;">
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

            <!-- Schedule -->
            <div class="mx-auto max-w-6xl grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">

                <!-- Day 1 -->
                <div class="bg-gray-200 p-4 rounded shadow-md m-2">
                    <h2 class="text-lg font-bold mb-4">Day 1: Friday, April 5<sup>th</sup>, 2024</h2>
                    <!-- Sessions -->
                    <div class="space-y-4">
                        <!-- Session 1 -->
                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">9:00 AM - 10:00 AM</h3>
                            <p><code>Registration and Breakfast</code></p>
                        </div>

                        <!-- Session 2 -->
                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">10:00 AM - 10:15 AM</h3>
                            <p><span class="font-semibold">Introduction:</span> Prof. Kavi Arya</p>
                            <p><span class="font-semibold">Inauguration of the event:</span> Prof. S. Sudarshan</p>

                        </div>

                        <!-- Session 3 -->
                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">10:15 AM - 10:30 AM</h3>
                            <p class="font-bold">e-Yantra Overview & Status Report</p>
                            <p class="text-sm">- Prof. Kavi Arya</p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">10:30 AM - 11:00 AM</h3>
                            <p class="font-bold">The person behind Tejas LCA <span class="bg-yellow-400 rounded-md px-2">Keynote</span></p>
                            <p class="text-sm">- Dr. Kota Harinarayana</p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">11:00 AM - 12:00 PM</h3>
                            <p class="font-bold">Building a Defence Startup Ecosystem <span class="bg-yellow-400 rounded-md px-2">Panel Discussion</span></p>
                            <p>Panelists: ( Moderator - Prof. Kavi Arya)</p>
                            <ul class="list-disc ml-6">
                                <li>Mr. Amit Kalyani, <span class="text-sm">Joint MD, Bharat Forge Ltd.</span></li>
                                <li>RAdmiral Amulpreet Singh Sethi (Retd.), <span class="text-sm">Ex-DG, WESEE</span></li>
                                <li>RAdmiral Deepak Kumar Goswami, <span class="text-sm">ASD, ND (Mumbai)</span></li>
                                <li>Mr. Raghunath Iyer, <span class="text-sm">CTO, Qualys</span></li>
                            </ul>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">12:00 PM - 01:00 PM</h3>

                            <div class="ml-8 mt-2">
                                <div class="border-b border-red-300 py-2">
                                    <h3 class="text-base font-semibold text-yellow-600">12:00 PM - 01:00 PM</h3>
                                    <p>Discussion with Faculty</p>
                                </div>

                                <div class="border-b border-red-300 py-2">
                                    <h3 class="text-base font-semibold text-yellow-600">12:00 PM - 12:30 PM</h3>
                                    <p>Lab Ranking Discussion</p>
                                    <span class="bg-yellow-200 rounded-md px-2">Parallel Session</span>
                                </div>

                                <div class="border-b border-red-300 py-2">
                                    <h3 class="text-base font-semibold text-yellow-600">12:30 PM - 01:00 PM</h3>
                                    <p>Drone Show</p>
                                    <span class="bg-yellow-200 rounded-md px-2">Parallel Session</span>
                                </div>
                            </div>

                            <div class="border-b border-red-300 py-2">
                                <p>Business Pitch evaluation</p>
                                <span class="bg-yellow-200 rounded-md px-2">Parallel Session</span>
                            </div>
                            <div class="border-b border-red-300 py-2">
                                <ul class="list-disc ml-6">
                                    <li>eYIC National Finals - Exhibition</li>
                                    <li>e-Yantra Tech Stack Display</li>
                                </ul>
                                <span class="bg-yellow-200 rounded-md px-2">Parallel Session</span>
                            </div>
                            <div class="pt-4">
                                <code>Tea Break</code>
                            </div>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">01:00 PM - 02: 00 PM</h3>
                            <p><code>Lunch</code></p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">02:00 PM - 02:30 PM</h3>
                            <p class="font-semibold">e-Yantra NEP 2020 program for Labs</p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">2.30 PM - 3:45 PM</h3>
                            <p class="font-bold">Transforming Defence Requirements into startup ventures with academic collaborations <span class="bg-yellow-400 rounded-md px-2">Group Discussion</span></p>
                            <p>Panelists: ( Moderator - Prof. Kavi Arya)</p>
                            <ul class="list-disc ml-6">
                                <li>Commodore Sandeep Wadhwa, <span class="text-sm">Indian Navy</span></li>
                                <li>Captain Victor Pratap Singh, <span class="text-sm">Indian Navy</span></li>
                                <li>Dr. VK Rai, <span class="text-sm">Retd. Naval Officer</span></li>
                                <li>Lt Colonel Prasad Bansod, <span class="text-sm">Indian Army, DRDO</span></li>
                            </ul>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">03:45 PM - 04:00 PM</h3>
                            <p><code>Tea Break</code></p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">04:00 PM - 04:45 PM</h3>
                             <p class="font-bold">
                                e-Yantra at Schools!
                                <span class="bg-yellow-400 rounded-md px-2">Presentation</span>
                            </p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">07:00 PM onwards</h3>
                            <p><code>Dinner</code></p>
                        </div>
                    </div>
                </div>

                <!-- Day 2 -->
                <div class="bg-gray-200 p-4 rounded shadow-md m-2">
                    <h2 class="text-lg font-bold mb-4">Day 2: Saturday, April 6<sup>th</sup>, 2024</h2>
                    <!-- Sessions -->
                    <div class="space-y-4">
                        <!-- Session 1 -->
                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">9:00 AM - 10:00 AM</h3>
                            <p><code>Registration and Breakfast</code></p>
                        </div>

                        <!-- Session 2 -->
                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">10:00 AM - 10:15 AM</h3>
                            <p><span class="font-semibold">Welcome:</span> Prof. Kavi Arya</p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">10:15 AM - 11:15 AM</h3>
                            <div class="ml-8 mt-2 py-2">
                                <p class="font-bold">Building a Knowledge Economy <span class="bg-yellow-400 rounded-md px-2">Keynote</span></p>
                                <p class="text-sm">- Prof. Dinesh Singh</p>
                                <div class="border-b border-red-300 my-4"></div>
                                <p class="font-bold"> Implementing NEP2020 - "Design your Degree" <br>
                                    <span class="bg-yellow-400 rounded-md px-2">Panel Discussion</span>
                                </p>
                                <p>Panelists: ( Moderator - Prof. Kavi Arya)</p>
                                <ul class="list-disc ml-6">
                                    <li>Prof. Dinesh Singh, <br><span class="text-sm">Vice Chairman, Jammu & Kashmir Higher Education Council</span></li>
                                    <li>Prof. Umesh Rai, <br><span class="text-sm">Vice Chancellor, university of Jammu</span></li>
                                    <li>Prof. Shakil Ahmad Romshoo,  <br><span class="text-sm">Vice Chancellor, Islamic University of Science & Technology, Kashmir</span></li>
                                </ul>
                            </div>
                            <div class="mt-4 pt-2 border-t border-red-300">
                                <p>eYIC National Finals - Exhibition</p>
                                <span class="bg-yellow-200 rounded-md px-2">Parallel Session</span>
                            </div>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">11:15 AM - 11:30 AM</h3>
                            <p><code>Tea Break</code></p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">11:30 AM to 12:00 PM</h3>
                            <p class="font-semibold">e-Yantra - a ToolBox for a New India</p>
                            <span class="bg-yellow-400 rounded-md px-2 font-semibold">Book Launch</span>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">12:00 PM – 01:15 PM</h3>
                            <p class="font-bold">NEP 2020 at Colleges vs Schools <span class="bg-yellow-400 rounded-md px-2">Group Discussion</span></p>
                            <p>Panelists: ( Moderator - Prof. Kavi Arya)</p>
                            <ul class="list-disc ml-6">
                                <li>Prof. Paritosh Pandya, <br><span class="text-sm">Adjunct Professor, IIT Bombay</span></li>
                                <li>Prof. Shobha Bagai, Director, <br><span class="text-sm">Cluster innovation Centre, New Delhi</span></li>
                                <li>Prof. Shubha Pandit, <br><span class="text-sm">Ex-principal, KJ Somaiya College of Engineering, Mumbai</span></li>
                                <li>Mrs. Richa Verma, <br><span class="text-sm">Principal, 7i World School, Gwalior</span></li>
                            </ul>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">01:15 PM - 02: 00 PM</h3>
                            <p><code>Lunch</code></p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">02:00 PM – 03:00 PM</h3>
                            <p class="font-bold">Talks By  by IIT B Faculties
                                <span class="bg-yellow-400 rounded-md px-2">Lightning Talks</span>
                            </p>
                            <p>Panelists: ( Moderator - Prof. Kavi Arya)</p>
                            <ul class="list-disc ml-6">
                                <li>Prof. Varsha Apte, <span class="text-sm">Professor & Head, CSE</span></li>
                                <li>Prof. Ganesh Ramakrishnan , <span class="text-sm">Professor, CSE</span></li>
                                <li>Prof. Milind Rane, <span class="text-sm">Professor, Heat Pump Laboratory</span></li>
                                <li>Prof. Surya S. Durbha, <span class="text-sm">Professor & Head, CSRE</span></li>
                                <li>Mr. Kiran Shesh, <span class="text-sm">CEO, TIH Foundation</span></li>
                            </ul>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">03:00 PM - 04:00 PM</h3>
                            <p>Awards Ceremony and Valedictory Function</p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">04:00 PM - 04:15 PM</h3>
                             <p>Vote of Thanks</p>
                        </div>

                        <div class="border-b border-red-300 pb-4">
                            <h3 class="text-base font-semibold text-yellow-600">04:15 PM Onwards</h3>
                             <p><code>High Tea</code></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- new -->
            <!-- <div class="container mx-auto h-full flex flex-col justify-center items-stretch p-2 sm:p-8" x-data="{tab: 1}">
                <div class="ml-6 flex justify-start">
                    <a class="block px-6 py-3 text-lg uppercase rounded-tl-lg font-medium" :class="{'bg-gray-200 text-gray-900 border-t-4 border-l-4 border-gray-900': tab === 1, 'bg-gray-50 text-gray-500': tab !== 1}" href="#" @click.prevent="tab = 1">Day 1, April 5 <sup>th</sup></a>
                    <a class="block px-6 py-3 text-lg uppercase rounded-tr-lg font-medium" :class="{'bg-gray-200 text-gray-900 border-t-4 border-r-4 border-gray-900': tab === 2, 'bg-gray-50 text-gray-500': tab !== 2}" href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">Day 2, April 6 <sup>th</sup></a>
                </div>

                <div class="bg-gray-200 rounded-lg shadow-lg p-8" x-show="tab === 1">
                    <h1 class="text-3xl leading-tight">Friday, April 5 th, 2024</h1>

                    <table class="table-auto mt-4">
                        <tbody>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">09:00 AM - 10:00 AM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <code>Registration and Breakfast</code>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">10:00 AM - 10:15 AM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <p>
                                        <ul class="list-disc ml-2">
                                            <li><span class="font-semibold">Introduction:</span> Prof. Kavi Arya</li>
                                            <li><span class="font-semibold">Inauguration of the event:</span> Prof. S. Sudarshan</li>
                                        </ul>
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">10:15 AM - 10:30 AM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <p class="font-semibold">e-Yantra Overview & Status Report</p>
                                    <p>- Prof. Kavi Arya</p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4 border-2 border-l border-gray-300">10:30 AM - 11:00 AM</td>
                                <td class="p-4 " colspan="4">
                                    <p class="font-semibold"><span class="bg-yellow-200 rounded-md px-2">Keynote</span> The person behind Tejas LCA</p>
                                    <p>- Padmashri Dr. Kota Harinarayana</p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">11:00 AM - 12:00 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <p class="font-semibold"><span class="bg-yellow-200 rounded-md px-2">Panel Discussion</span> Building a Defence Startup Ecosystem</p>
                                    <p>Panelists: ( Moderator - Prof. Kavi Arya)</p>
                                    <ul class="list-disc ml-6">
                                        <li>RAdmiral Deepak Kumar Goswami, <span class="text-sm">ASD, ND (Mumbai)</span></li>
                                        <li>RAdmiral Amulpreet Singh Sethi (Retd.), <span class="text-sm">DG, WESEE</span></li>
                                        <li>Mr. Amit Kalyani, <span class="text-sm">Joint MD, Bharat Forge Ltd.</span></li>
                                        <li>Mr. Raghunath Iyer, <span class="text-sm">CTO, Qualys</span></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">12:00 PM - 01:00 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300">
                                    <p class="font-semibold">Discussion with Faculty</p>
                                </td>
                                <td class="p-4 border-2 border-l border-gray-300" rowspan="3">
                                    Business Pitch evaluation
                                </td>
                                <td class="p-4 border-2 border-l border-gray-300" rowspan="3">
                                    <ul class="list-disc ml-6">
                                        <li>eYIC National Finals - Exhibition</li>
                                        <li>e-Yantra Tech Stack Display</li>
                                    </ul>
                                </td>
                                <td class="p-4 border-2 border-l border-gray-300" rowspan="3"><code>Tea Break</code></td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">12:00 PM - 12:30 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300">
                                    <p class="font-semibold">Lab Ranking Discussion</p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">12:30 PM - 01:00 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300">
                                    <p class="font-semibold">Drone Show</p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">01:00 PM - 02: 00 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <code>Lunch</code>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">02:00 PM - 02:30 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <p><span class="font-semibold">e-Yantra NEP 2020 program for Labs</span></p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">2.30 PM - 3:45 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <p class="font-semibold"><span class="bg-yellow-200 rounded-md px-2">Group Discussion</span> Transforming Defence Requirements into startup ventures with academic collaborations</p>
                                    <p><span class="font-semibold">Panelists: ( Moderator - Prof. Kavi Arya)</span></p>
                                    <ul class="list-disc ml-6">
                                        <li>Commodore Sandeep Wadhwa, <span class="text-sm">Indian Navy</span></li>
                                        <li>Captain Victor Pratap Singh, <span class="text-sm">Indian Navy</span></li>
                                        <li>Dr. VK Rai, <span class="text-sm">Retd. Naval Officer</span></li>
                                        <li>Lt Colonel Prasad Bansod, <span class="text-sm">Indian Army, DRDO</span></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">03:45 PM - 04:00 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <code>Tea Break</code>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">04:00 PM - 04:45 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <p class="font-semibold"><span class="bg-yellow-200 rounded-md px-2">Presentation</span> e-Yantra at Schools!</p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">07:00 PM onwards</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="4">
                                    <code>Dinner</code>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-gray-200 rounded-lg shadow-lg p-8" x-show="tab === 2">
                    <h1 class="text-3xl leading-tight">Saturday, April 6 th, 2024</h1>
                    <table class="table-auto mt-4">
                        <tbody>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">09:00 AM - 10:00 AM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <code>Registration and Breakfast</code>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">10:00 AM - 10:15 AM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <p>
                                        <span class="font-semibold">Welcome:</span> Prof. Kavi Arya
                                    </p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4 border-2 border-l border-gray-300">10:15 AM - 11:15 AM</td>
                                <td class="p-4">
                                    <p class="font-semibold"><span class="bg-yellow-200 rounded-md px-2">Keynote</span></p>
                                    <p>-  Prof. Dinesh</p>
                                    <p class="font-semibold"><span class="bg-yellow-200 rounded-md px-2">Panel Discussion</span> Implementing NEP2020 - "Design your Degree"</p>
                                    <p>Panelists: ( Moderator - Prof. Kavi Arya)</p>
                                    <ul class="list-disc ml-6">
                                        <li>Prof. Dinesh Singh, <span class="text-sm">Vice Chairman, Jammu & Kashmir Higher Education Council</span></li>
                                        <li>Prof. Umesh Rai, <span class="text-sm">Vice Chancellor, university of Jammu</span></li>
                                        <li>Prof. Shakil Ahmad Romshoo,  <span class="text-sm">Vice Chancellor, Islamic University of Science & Technology, Kashmir</span></li>
                                    </ul>
                                </td>
                                <td class="p-4 border-l border-gray-300"><span>eYIC National Finals - Exhibition</span></td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">11:15 AM - 11:30 AM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <code>Break</code>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">11:30 AM to 11:45 AM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <p><span class="bg-yellow-200 rounded-md px-2">Book Launch</span> e-Yantra - a ToolBox for a New India</p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">11:45 AM – 01:15 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <p class="font-semibold"><span class="bg-yellow-200 rounded-md px-2">Group Discussion</span> NEP 2020 at Colleges vs Schools</p>
                                    <p>Panelists: ( Moderator - Prof. Kavi Arya)</p>
                                    <ul class="list-disc ml-6">
                                        <li>Prof. Paritosh Pandya, <span class="text-sm">Adjunct Professor, IIT Bombay</span></li>
                                        <li>Prof. Shobha Bagai, Director, <span class="text-sm">Cluster innovation Centre, New Delhi</span></li>
                                        <li>Prof. Shubha Pandit, <span class="text-sm">Ex-principal, KJ Somaiya College of Engineering, Mumbai</span></li>
                                        <li>Mrs. Richa Verma, <span class="text-sm">7i World School, Gwalior</span></li>
                                    </ul>
                                </td>
                            </tr>
                             <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">01:00 PM - 02: 00 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <code>Lunch</code>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">02:00 PM – 03:00 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <p class="font-semibold"><span class="bg-yellow-200 rounded-md px-2">Lightning Talks</span> by IIT B Faculties</p>
                                    <ul class="list-disc ml-6">
                                        <li>Prof. Varsha Apte, <span class="text-sm">Professor & Head, CSE</span></li>
                                        <li>Prof. Ganesh Ramakrishnan , <span class="text-sm">Professor, CSE</span></li>
                                        <li>Prof. Milind Rane, <span class="text-sm">Professor, Heat Pump Laboratory</span></li>
                                        <li>Prof. Surya S. Durbha, <span class="text-sm">Professor & Head, CSRE</span></li>
                                        <li>Mr. Kiran Shesh, <span class="text-sm">CEO, TIH Foundation</span></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300 bg-yellow-50">
                                <td class="p-4">03:00 PM - 04:00 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <p>Awards Ceremony and Valedictory Function</p>
                                </td>
                            </tr>
                            <tr class="border-2 border-gray-300">
                                <td class="p-4">04:00 PM - 04:15 PM</td>
                                <td class="p-4 border-2 border-l border-gray-300" colspan="2">
                                    <p>Vote of Thanks</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> -->
            <div class="mx-auto max-w-4xl mt-4">
                <p class="text-white mb-4 text-2xl text-center">There is no registration fee to attend the event. </p>
                <a class="flex justify-center rounded-2xl bg-red-600 p-4 text-4xl font-semibold text-white hover:bg-red-500 focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:text-white/70" href="https://portal.e-yantra.org/eys.register" target="_blank">Book Your Seat</a>
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
