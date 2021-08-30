@extends('layout.main')
@section('content')
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

@stop