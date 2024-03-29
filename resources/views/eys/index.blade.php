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
                        <!-- <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/amit-gulati.jpeg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.ispp.org.in/faculties/amit-krishn-gulati/" target="_blank">Mr. Amit Krishn Gulati</a>
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Industrial Designer, <br> Entrepreneur and Educator
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/ashank-desai.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://saiuniversity.edu.in/team/ashank-desai/" target="_blank">Mr. Ashank Desai</a>
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Co-founder & former Chairperson,<br> Mastek
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/deepak_pathak.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.cse.iitb.ac.in/~dbp/" target="_blank">Prof. Deepak B Phatak</a>
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Padma Shri <br> Doyen of Distance Eduction <br>IIT Bombay
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/juneza.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://in.linkedin.com/in/junezaniyazi" target="_blank">Ms. Juneza Niyazi</a>
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Service Design Lead,<br> Jiva Agservices
                                </p>
                            </div>
                        </div> -->

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-40 rounded-full mx-auto" src="{!! asset('img/speakers/Kavi_Arya.jpeg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4 ">
                                    <a href="https://www.cse.iitb.ac.in/~kavi/" target="_blank">Prof. Kavi Arya</a>
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Principal Investigator, <br> e-Yantra
                                </p>
                            </div>
                        </div>                        

                        <div class="bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 rounded-lg shadow divide-y divide-gray-200">
                            <div class="px-6 py-4 text-center">
                                <img class="h-40 w-45 rounded-full mx-auto" src="{!! asset('img/speakers/paritosh-pandya.jpg') !!}">
                                <h3 class="text-lg font-medium text-blue-500 mt-4">
                                    <a href="https://www.cse.iitb.ac.in/~pandya58/" target="_blank">Prof. Paritosh Pandya</a>
                                </h3>
                                <p class="text-gray-500 mt-2">
                                    Adjunct Professor, <br> IIT Bombay
                                </p>
                            </div>
                        </div>
                        <!-- Add more team members as needed -->
                    </div>
                <div class="mx-auto w-full">
                    <p class="font-bold text-white text-2xl mt-4">Coming soon....</p>
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

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative mt-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                    <!-- day 1 -->
                    <div class="p-4">
                        <h2 class="text-2xl font-semibold mb-4 text-white text-center">
                            Day 1 <br>
                            Friday, April 5 <sup>th</sup>, 2024
                        </h2>
                        <ul class="border-2 border-yellow-200 rounded-md">                                
                            <li class="flex mb-2 items-center py-2 text-white">                                    
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    09:00 AM <br> 10:00 AM
                                </div>
                                <div class="w-3/4 border-l-2 py-2 border-yellow-200 text-lg">
                                    <p class="ml-4"><code>Registration and Breakfast</code></p>
                                </div>
                            </li>

                            <li class="flex mb-2 items-center py-2 text-white">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    10:00 AM <br> 10:15 AM
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200 py-2">
                                    <div class="ml-4">                                        
                                        <p class="font-bold text-lg">Inauguration of the event</p>                                            
                                    </div>
                                </div>
                            </li>

                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    10:15 AM <br> 10:30 AM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200 py-2">
                                    <p class="ml-4 font-bold text-lg">e-Yantra Overview & Status Report</p>
                                </div>
                            </li>

                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    10:30 AM <br> 11:00 AM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200">
                                    <div class="ml-4">
                                        <p class="font-bold text-lg">The person behind Tejas LCA</p>
                                        <p class="text-md"><i>by Mr. Kota Harinarayana</i></p>
                                        <span class="bg-yellow-500 rounded-md text-sm px-2 text-gray-900">Keynote</span>
                                    </div>                                        
                                </div>
                            </li>

                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    11:00 AM <br> 12:00 PM
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200">
                                    <div class="ml-4">
                                        <p class="font-semibold text-lg">Building a Defence Startup Ecosystem</p>                                    
                                        <span class="bg-yellow-500 rounded-md text-sm px-2 text-gray-900">Panel Discussion</span>                                      
                                    </div>    
                                </div>
                            </li>


                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    12:00 PM <br> 01:00 PM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200">
                                    <div class="ml-4">
                                        <ul class="ml-4 list-disc text-lg">
                                            <li>
                                                <p class="font-semibold">eYIC Exhibition</p>
                                                <p class="text-sm">eYIC finalists will showcase their projects.</p>
                                            </li>
                                            <li>
                                                <p class="font-semibold">eYIC Business Pitch</p>                
                                            </li>
                                        </ul>    
                                        <p class="font-semibold"><code>Tea;</code></p>                
                                    </div>   
                                </div>
                            </li>

                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    01:00 PM <br> 02:00 PM
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200 py-2">
                                    <p class="font-semibold ml-4"><code>Lunch;</code></p>
                                </div>
                            </li>

                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    02:00 PM <br> 02:30 PM
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200">                                        
                                    <div class="ml-4">
                                        <ul class="ml-4 list-disc text-lg">
                                            <li class="font-bold">
                                                e-Yantra New Opportunity for Labs
                                            </li>
                                            <li class="font-bold">
                                                <p>e-Yantra Tech Stack demos</p>
                                                <p class="text-sm">Drone, Control Systems, FPGA, KrishBot</p>
                                            </li>
                                        </ul>                                        
                                    </div>
                                </div>
                            </li>

                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    02:30 PM <br> 03:45 PM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200 py-2">
                                    <p class="ml-4 font-bold text-lg">GD based on Defence Panel Discussion </p>
                                </div>                                    
                            </li> 
                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    03:45 PM <br> 04:45 PM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200 py-2">
                                    <p class="ml-4 font-bold text-lg">e-Yantra at Schools!</p>
                                </div>                                    
                            </li>
                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    04:45 PM <br> 05:00 PM
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200 py-2">
                                    <h3 class="font-semibold ml-4"><code>Tea Break;</code></h3>
                                </div>
                            </li>
                                                          
                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    07:00 PM <br> Onwards
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200 py-2">
                                    <p class="font-semibold ml-4"><code>Dinner;</code></p>
                                </div>
                            </li>
                            <br>
                            <br>
                        </ul>
                    </div>

                    <!-- day 2 -->
                    <div class="p-4">
                        <h2 class="text-2xl font-semibold mb-4 text-white text-center">
                            Day 2 <br>
                            Saturday, April 6 <sup>th</sup>, 2024
                        </h2>
                        <ul class="border-2 border-yellow-200 rounded-md">
                            <li class="flex mb-2 items-center py-2 text-white">                                    
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    09:00 AM <br> 10:00 AM
                                </div>
                                <div class="w-3/4 border-l-2 py-2 border-yellow-200">
                                    <p class="ml-4 text-lg"><code>Registration and Breakfast</code></p>
                                </div>
                            </li>

                            <li class="flex mb-2 items-center py-2 text-white">                                    
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    10:00 AM <br> 10:15 AM
                                </div>
                                <div class="w-3/4 border-l-2 py-2 border-yellow-200">
                                    <p class="ml-4 text-lg"><code>Welcome</code></p>
                                </div>
                            </li>

                            <li class="flex mb-2 items-center text-white py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    10:15 AM <br> 11:30 AM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200">
                                    <div class="ml-4">
                                        <ul class="ml-4 list-disc text-lg">
                                            <li>
                                                <p class="font-semibold">eYIC Exhibition</p>
                                                <p class="text-sm">eYIC finalists will showcase their projects.</p>
                                            </li>
                                            <li>
                                                <p class="font-semibold text-lg">Implementing NEP2020 <br> "Design your Degree"</p>                                
                                                <span class="bg-yellow-500 rounded-md text-sm px-2 text-gray-900">Panel Discussion</span>
                                            </li>
                                            <li>
                                                <p class="font-semibold">e-Yantra Book Launch</p>
                                            </li>
                                        </ul>                                        
                                    </div>   
                                </div>
                            </li>

                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    11:30 AM <br> 11:45 AM
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200 py-2 text-lg">
                                    <p class="font-semibold ml-4"><code>Tea Break;</code></p>
                                </div>
                            </li>

                            <li class="flex mb-2 items-center py-2 text-white">                                    
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    11:45 AM <br> 01:15 PM
                                </div>
                                <div class="w-3/4 border-l-2 py-2 border-yellow-200 text-lg">
                                    <p class="ml-4"><code>Group Discussion on NEP2020</code></p>
                                </div>
                            </li>

                            <li class="flex mb-2 items-center text-white py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    01:15 PM <br> 02:00 PM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200">
                                    <div class="ml-4 text-lg">
                                        <p class="font-semibold"><code>Lunch;</code></p>
                                        <p>(Along with Exhibition)</p>
                                    </div>                                        
                                </div>
                            </li>
                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    02:00 PM <br> 03:00 PM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200 py-2">
                                    <div class="ml-4">
                                        <p class="fond-semibold text-lg">Lightning Talks by IIT Bombay Faculties</p>
                                        <span class="bg-yellow-500 rounded-md text-sm px-2 text-gray-900">Talk</span>                                            
                                    </div>    
                                </div>
                            </li> 
                            <li class="flex mb-2 items-center py-2 text-white">                                    
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    03:00 PM <br> 03:30 PM
                                </div>
                                <div class="w-3/4 border-l-2 py-2 border-yellow-200 text-lg">
                                    <p class="ml-4"><code>Innovative Projects from e-Yantra Colleges</code></p>
                                </div>
                            </li>
                                                           
                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    03:30 PM <br> 03:45 PM
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200 py-2">
                                    <p class="font-semibold ml-4 text-lg"><code>Break;</code></p>
                                </div>
                            </li>
                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    03:45 PM <br> 04:30 PM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200">
                                    <p class="font-semibold ml-4 text-lg"><code>Awards Ceremony and Valedictory function</code></p>
                                </div>
                            </li>
                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    04:30 PM <br> 04:45 PM
                                </div>
                                <div class="w-3/4 text-white border-l-2 border-yellow-200 py-2">
                                    <p class="font-semibold ml-4 text-lg"><code>Vote of Thanks</code></p>
                                </div>
                            </li>
                            <li class="flex mb-2 text-white items-center py-2">
                                <div class="w-1/4 font-mono mx-4 text-right">
                                    04:45 PM <br> Onwards
                                </div>
                                <div class="w-3/4 border-l-2 border-yellow-200 py-2">
                                    <p class="font-semibold ml-4 text-lg"><code>High Tea;</code></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mx-auto max-w-4xl">
                    <p class="text-red-400 mb-4 text-2xl text-center">There is no registration fee to attend the event. </p>
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
