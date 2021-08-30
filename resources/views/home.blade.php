<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Yantra</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/modal-video.min.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style type="text/css">
            html{
                scroll-behavior: smooth;
                overflow-y: scroll;
            }
            .gradient {
                background:linear-gradient(90deg,#ec0d0d 0%, #c5b7b8 100%);
            }
            .writing {
                background:linear-gradient(90deg,#e5e5e5 0%, #e5e5e5 100%);
                font: Raleway;
                font-weight: normal;
                font-size: x-large;
                line-height: 2;
                font-weight: 600;
                color: #292524;
            }
            .writingtext {
                font: Raleway;
                font-weight: normal;
                font-size: x-large;
                line-height: 2;
                font-weight: 600;
                color: #292524;
            }
            
            .video-thumbnail {
                  position: relative;
                  display: inline-block;
                  cursor: pointer;
                  margin: 30px;

                  &:before {
                    position:absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    -webkit-transform: translate(-50%, -50%);
                    content: "\f01d";
                    font-family: FontAwesome;
                    font-size: 100px;
                    color: #fff;
                    opacity: .8;
                    text-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5);
                }
                &:hover:before {
                    color: #eee;
                }


                html, body {
    margin: 0px;
    padding: 0px;
    background: url("http://digital.bnint.com/filelib/s9/photos/white_wood_4500x3000_lo_res.jpg");
}

.carousel {
    position: relative;
    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
    margin-top: 26px;
}

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
}

.carousel-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
}

.carousel-item img {
    display: block;
    height: auto;
    max-width: 100%;
}

.carousel-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
}

.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.8);
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
    display: block;
}

.carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
}

.carousel-indicators li {
    display: inline-block;
    margin: 0 5px;
}

.carousel-bullet {
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 35px;
}

.carousel-bullet:hover {
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #428bca;
}

#title {
    width: 100%;
    position: absolute;
    padding: 0px;
    margin: 0px auto;
    text-align: center;
    font-size: 27px;
    color: rgba(255, 255, 255, 1);
    font-family: 'Open Sans', sans-serif;
    z-index: 9999;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
}

        </style>
    </head>
    <body>
        <!-- navigation bar -->
        <header>
            <nav class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between navbar-expand-lg bg-white shadow">
                <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                  <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <Link href="/">
                      <a
                        class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                        href="/"
                      >
                        <img src="{!! asset('img/logo.svg') !!}" alt="e-Yantra" class="w-48 md:w-56" />
                      </a>
                    </Link>
                    <button
                      class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                      type="button"
                      v-on:click="setNavbarOpen"
                    >
                      <i class="fas fa-bars"></i>
                    </button>
                  </div>

                  <div class="lg:flex flex-grow items-center" :class="[navbarOpen ? 'block' : 'hidden']" id="example-navbar-warning">
                    <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    </ul>
                    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/">About Us</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/">Event Calender</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/gallery">Gallery</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/team">Our Team</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/">Publications</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </header>
        <!-- end -->

        <!--Hero-->
        <div class="container-fluid  mx-auto flex flex-col md:flex-row items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center">
            <!--Left Col-->
            <div class="flex flex-col w-1/2 justify-center items-start pb-12 px-6 mt-6 text-gray-700 md:text-lg">
                e-Yantra is a robotics outreach program funded by the Ministry of Education and hosted at IIT Bombay. 
                The goal is to harness the intellectual talent of young engineers to to solve problems using technology across a variety of domains such as: agriculture, manufacturing, defense, home, city maintenance and services industries.
                <div class="rounded-full py-3 px-6 mt-12 justify-center bg-red-400 text-white transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 sm:w-48" style="background-color:#DE4757">
                    <a href="/gallery" target="_blank">Visit Our Gallery</a>
                </div>
            </div>
            <!--Right Col-->
            <div class="w-full mb-2 md:w-1/3 md:mx-4 rounded-md transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110 justify-center">
                <a href="#" class="mb-4">
                    <img class="js-modal-btn rounded w-full p-4" src="https://img.youtube.com/vi/nBEfuo1RC6g/0.jpg" alt="Sunset in the mountains" data-video-id="nBEfuo1RC6g">
                </a>
            </div>
        </div>

        <!-- counter -->
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 justify-center" data-aos="fade-up" data-aos-duration="3000">
                @include('counter')
     
            </section>
            <!-- End Section -->

            <!-- What we do -->
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="3000">
                <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800"> What we do</h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <!-- <div class="lg:ml-16 lg:mr-16 text-gray-700 text-2xl justify-center text-center mx-auto sm:w-auto"> -->
                    <div class="flex mx-24 justify-center items-start pb-12 px-6 mt-6 text-gray-700 text-2xl md:text-lg">
                   <!--  <p class="mb-8 text-center justify-center"> -->
                            The goal is to complement the existing higher education system by bringing in a project based approach into higher education - i.e. “Learn by Doing”. More important is to train students, teachers and institutions by establishing a culture of “Project Based Learning” and solving real problems using technology. 
                    <!-- </p> -->
                    </div>
                  <div class="grid gap-6 mb-8 md:grid-cols-1 lg:grid-cols-3 pb-12 px-6 mt-6 mx-24">
                    <!-- Card 1 -->
                    <!-- <div class="flex items-center p-4 border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800" style="background-color:#DE4757">
                        <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                         <div id="body" class="flex flex-col ml-5">
                            <h4 id="name" class="text-xl font-semibold mb-2 text-white">e-Yantra Robotics Competition (eYRC)</h4>
                            <p id="job" class="text-gray-800 mt-2">A unique robotics competition providing a practical experience in Learning while Competing format.</p>
                            <div class="flex mt-5">
                               <p class="ml-3 text-white">Know more...</p>
                            </div>
                         </div>
                    </div> -->
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" style="background-color:#DE4757">
                  <div class="md:flex">
                    <div class="md:flex-shrink-0">
                      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://picsum.photos/seed/picsum/200" alt="Man looking at item at a store">
                    </div>
                    <div class="p-8">
                      <div class="tracking-wide text-xl font-semibold mb-2 text-white">eYRC</div>
                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-gray-800 hover:underline">e-Yantra Robotics Competition</a>
                      <p class="mt-2 text-white">A unique robotics competition providing a practical experiences in Learning while Competing format executed at international level.</p>
                    </div>
                  </div>
                </div>
                    <!-- Card 2 -->
                    <!-- <div class="flex items-center p-4 border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800" style="background-color:#DE4757">
                           <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                         <div id="body" class="flex flex-col ml-5">
                            <h4 id="name" class="text-xl font-semibold mb-2 text-white">e-Yantra Innovation Challenge (eYIC)</h4>
                            <p id="job" class="text-gray-800 mt-2">A competition to solicit innovative projects from colleges across the nation.</p>
                            <div class="flex mt-5">
                               <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                               <p class="ml-3 text-white">Know more...</p>
                            </div>
                         </div>
                    </div> -->
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" style="background-color:#DE4757">
                  <div class="md:flex">
                    <div class="md:flex-shrink-0">
                      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://picsum.photos/seed/picsum/200" alt="Man looking at item at a store">
                    </div>
                    <div class="p-8">
                      <div class="tracking-wide text-xl font-semibold mb-2 text-white">eYIC</div>
                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-gray-800 hover:underline">e-Yantra Innovation Challenge</a>
                      <p class="mt-2 text-white">A competition to solicit innovative projects from Engineering/ Science/ Polytechnic colleges across the nation based on domain specific training.</p>
                    </div>
                  </div>
                </div>
                    <!-- Card 3 -->
                    <!-- <div class="flex items-center p-4 border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800" style="background-color:#DE4757">
                            <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                         <div id="body" class="flex flex-col ml-5">
                            <h4 id="name" class="text-xl font-semibold mb-2 text-white">e-Yantra Lab Setup Initiative (eLSI)</h4>
                            <p id="job" class="text-gray-800 mt-2">An Initiative to train teachers and institutions by establishing a culture  of “Project Based Learning” and solving real problems using technology.</p>
                            <div class="flex mt-5">
                               <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                               <p class="ml-3 text-white">Know more...</p>
                            </div>
                         </div>
                    </div> -->
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" style="background-color:#DE4757">
                  <div class="md:flex">
                    <div class="md:flex-shrink-0">
                      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://picsum.photos/seed/picsum/200" alt="Man looking at item at a store">
                    </div>
                    <div class="p-8">
                      <div class="tracking-wide text-xl font-semibold mb-2 text-white">eLSI</div>
                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-gray-800  hover:underline">e-Yantra Lab Set-up Initiative</a>
                      <p class="mt-2 text-white">An Initiative to train teachers and institutions by establishing a culture  of “Project Based Learning” and solving real problems using technology.
                      </p>
                    </div>
                  </div>
                </div>
                    <!-- Card 4 -->
                    <!-- <div class="flex items-center p-4 border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800" style="background-color:#DE4757">
                       <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                         <div id="body" class="flex flex-col ml-5">
                            <h4 id="name" class="text-xl font-semibold mb-2 text-white">e-Yantra School Robotics Competition (eYSRC)</h4>
                            <p id="job" class="text-gray-800 mt-2">A competition for school kids from grade 8th to 12th to think, ideate and innovate out-of-the box solutions to real-world problems.</p>
                            <div class="flex mt-5">
                               <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                               <p class="ml-3 text-white">Know more...</p>
                            </div>
                         </div>
                    </div> -->
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" style="background-color:#DE4757">
                  <div class="md:flex">
                    <div class="md:flex-shrink-0">
                      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://picsum.photos/seed/picsum/200" alt="Man looking at item at a store">
                    </div>
                    <div class="p-8">
                      <div class="tracking-wide text-xl font-semibold mb-2 text-white">eYSRC</div>
                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-gray-800  hover:underline">e-Yantra School Robotics Competition</a>
                      <p class="mt-2 text-white">A competition for school kids from grade 8th to 12th to think, ideate and innovate out-of-the box solutions to real-world problems.</p>
                    </div>
                  </div>
                </div>
                    <!-- Card 5 -->
                    <!-- <div class="flex items-center p-4 border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800" style="background-color:#DE4757">
                            <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                         <div id="body" class="flex flex-col ml-5">
                            <h4 id="name" class="text-xl font-semibold mb-2 text-white">e-Yantra MOOC (eYMOOC)</h4>
                            <p id="job" class="text-gray-800 mt-2">This is an online platform developed to offer Massive Open Online Courses (MOOCs) for individuals from varying backgrounds.</p>
                            <div class="flex mt-5">
                               <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                               <p class="ml-3 text-white">Know more...</p>
                            </div>
                         </div>
                    </div> -->
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" style="background-color:#DE4757">
                  <div class="md:flex">
                    <div class="md:flex-shrink-0">
                      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://picsum.photos/seed/picsum/200" alt="Man looking at item at a store">
                    </div>
                    <div class="p-8">
                      <div class="tracking-wide text-xl font-semibold mb-2 text-white">eYMOOC</div>
                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-gray-800  hover:underline">e-Yantra Mooc</a>
                      <p class="mt-2 text-white">A online platform developed to offer Massive Open Online Courses (MOOCs) for  students / working professionals from varying backgrounds.</p>
                    </div>
                  </div>
                </div>
                    <!-- Card 6 -->
                    <!-- <div class="flex items-center p-4 border-2 border-gray-200 rounded-lg shadow-sm dark:bg-gray-800" style="background-color:#DE4757">
                       <img alt="mountain" class="w-45 rounded-md border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                         <div id="body" class="flex flex-col ml-5">
                            <h4 id="name" class="text-xl font-semibold mb-2 text-white">e-Yantra Farm Setup Initiative (eFSI)</h4>
                            <p id="job" class="text-gray-800 mt-2">This deals with setting up an automated agriculture project  to give hands-on learning for students.</p>
                            <div class="flex mt-5">
                               <img alt="avatar" class="w-6 rounded-full border-2 border-gray-300" src="https://picsum.photos/seed/picsum/200" />
                               <p class="ml-3 text-white">Know more...</p>
                            </div>
                         </div>
                    </div> -->
                    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl" style="background-color:#DE4757">
                  <div class="md:flex">
                    <div class="md:flex-shrink-0">
                      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://picsum.photos/seed/picsum/200" alt="Man looking at item at a store">
                    </div>
                    <div class="p-8">
                      <div class="tracking-wide text-xl font-semibold mb-2 text-white">eFSI</div>
                      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-gray-800 hover:underline">e-Yantra Farm Set-up Initiative</a>
                      <p class="mt-2 text-white">
                      Initiative deals with developing a know-how for setting up an automated agriculture project for addressing real world problems.</p>
                    </div>
                  </div>
                </div>
                  </div>
            </section>

            <!-- What makes us unique -->

            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">What makes us unique</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <!-- right coloum -->
                    <div class="flex flex-wrap text-justify">
                        <div class="w-1/2 text-gray-700 text-2xl mb-8">
                                <ul class="list-disc leading-loose">
                                  <li> Project based learning</li>
                                  <li>complement the existing higher education system by bringing in a project based component into engineering education - i.e. “learn by doing”</li>
                                  <li>Domain specific training to inculcate real-world problem thinking</li>
                                  <li>Create a sustainable ecosystem driven by students and faculty</li>
                                  <li>The goal is for students to solve real problems, to do startups or be inspired to pursue higher level R&D skills</li>
                                  <li>We have established robotics labs in more than 400 colleges across India</li>
                                </ul>
                        </div>
                        <div class="w-full sm:w-1/3 md:pt-2 mt-24 mx-24">
                            <img class="w-full md:w-2/2 mx-auto" src="http://epic.e-yantra.org/img/FOSS.gif" height="450" width="400">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->

            <!-- Technology Stack -->
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">Technology Stack</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <div class="flex flex-wrap text-center items-center justify-center">
                        <img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/3d-printer.png" alt="Man looking at item at a store">
                        <img class="h-12 ml-12 w-1/2 object-cover md:h-full md:w-24" src="/img/imageprocessing.png" alt="Man looking at item at a store">
                        <img class="h-12 ml-12 w-1/2 object-cover md:h-full md:w-24" src="/img/iot.png" alt="Man looking at item at a store">
                        <img class="h-12 ml-12 w-1/2 object-cover md:h-full md:w-24" src="/img/embedded.png" alt="Man looking at item at a store">
                        <img class="h-12 ml-12 w-1/2 object-cover md:h-full md:w-24" src="/img/machinelearning.png" alt="Man looking at item at a store">
                        <img class="h-12 ml-12 w-1/2 object-cover md:h-full md:w-24" src="/img/python.png" alt="Man looking at item at a store">
                        <img class="h-12 ml-12 w-1/2 object-cover md:h-full md:w-24" src="/img/drone.png" alt="Man looking at item at a store">
                        <img class="h-12 ml-12 w-1/2 object-cover md:h-full md:w-24" src="/img/ag.png" alt="Man looking at item at a store">
                        <img class="h-12 ml-12 w-1/2 object-cover md:h-full md:w-24" src="/img/blender.png" alt="Man looking at item at a store">
                       
                    </div>
                </div>
            </section>
            <!-- End Section -->
            

            <!-- Testimonials -->
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="3000">
                @include('carousel')
     
            </section>
            <!-- End Section -->





        

        <!-- footer -->
        <footer class="bg-gray-600 mx-6">
            <div class="container mx-auto px-8">
                <div class="w-full py-6">
                    <p class="text-gray-900 text-center md:text-2xl">
                        e-Yantra is a project sponsored by <a class="text-blue-600" href="http://mhrd.gov.in/" target="_blank">MoE</a> through the <a class="text-blue-600" href="//mhrd.gov.in/technology-enabled-learning-0" target="_blank">National Mission on Education through ICT (NMEICT)</a>
                    </p>
                </div>
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="w-full md:w-3/5 mb-6">
                        <img src="{!! asset('img/mhrd.png') !!}">
                    </div>
                    <div class="w-full mx-auto mb-6 text-center md:text-right md:text-lg">
                        <p>
                            <!-- facebook -->
                            <span class="mdi mdi-facebook text-orange-500"></span>
                            <a href="//www.facebook.com/eyantra" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-3">Facebook</a>
                            <!-- twitter -->
                            <span class="mdi mdi-twitter text-orange-500"></span>
                            <a href="//twitter.com/eyantra_iitb" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-3">Twitter</a>
                            <!-- linkedin -->
                            <span class="mdi mdi-linkedin text-orange-500"></span>
                            <a href="https://www.linkedin.com/company/14407133/admin/" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-3">LinkedIn</a>
                            <!-- insta -->
                            <span class="mdi mdi-instagram text-orange-500"></span>
                            <a href="//www.instagram.com/eyantra/" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-3">Insta</a>
                            <!-- youtube -->
                            <span class="mdi mdi-youtube text-orange-500"></span>
                            <a href="https://www.youtube.com/user/eyantra/videos" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500">YouTube</a>
                        </p>
                        <p class="mt-5">
                            <a href="https://www.e-yantra.org" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-5">e-Yantra</a>
                            <!-- elsi -->
                            <a href="https://www.e-yantra.org/elsi" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500">eLSI</a>
                            <!-- eyic -->
                            <a href="https://www.e-yantra.org/eyic" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mx-5">eYIC</a>
                            <!-- eyrdc -->
                            <a href="http://content.e-yantra.org/content" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500">eYRDC</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full py-6 text-center text-gray-500">
                <hr class="mb-5">
                Copyright © {!!date('Y')!!} <a class="text-blue-600" href="//e-yantra.org" target="_blank">e-Yantra</a>. All rights reserved. <br>
                <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Background vector created by freepik - www.freepik.com</a>
            </div>
        </footer><!-- end -->

        <script type="text/javascript" src="{{ url('js/app.js') }}"></script>
        <script src="{{url('js/jquery-modal-video.min.js')}}"></script>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script type="text/javascript">
            //video model
            $(".js-modal-btn").modalVideo();
            //Javascript to toggle the menu
            document.getElementById('nav-toggle').onclick = function(){
                document.getElementById("nav-content").classList.toggle("hidden");
            }
            //
            var activeclass = document.querySelectorAll('#navlist li a');
            for (var i = 0; i < activeclass.length; i++) {
                activeclass[i].addEventListener('click', activateClass);
            }

            function activateClass(e) {
                for (var i = 0; i < activeclass.length; i++) {
                    activeclass[i].classList.remove("text-pink-500","font-bold");
                }
                e.target.classList.add("text-pink-500","font-bold");
            }
        </script>
        <script>
            /*on scroll change the font-bold class*/
            var mainNavLinks = document.querySelectorAll("#navlist li a");
            var mainSections = document.querySelectorAll("body section");

            let lastId;
            let cur = [];

            window.addEventListener("scroll", event => {
                var fromTop = window.scrollY + 60;

                mainNavLinks.forEach(link => {
                    var section = document.querySelector(link.hash);
                    if(
                        section.offsetTop <= fromTop  &&
                        section.offsetTop + section.offsetHeight > fromTop
                        ){
                        link.classList.add("text-pink-500","font-bold");
                    } else {
                        link.classList.remove("text-pink-500","font-bold");
                    }
                });
            });
        </script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145861739-15"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-145861739-15');
        </script>

        <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
          AOS.init();
        </script>

    </body>
</html>
