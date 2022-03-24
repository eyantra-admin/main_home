@extends('layout.main')
@section('content')
        <!--Hero-->
        <div class="container-fluid mx-auto flex flex-col md:flex-row items-center bg-gray-200 md:pt-24 justify-center shade">
            <!--Left Col-->
            <div class="flex flex-col w-full justify-center items-start py-18 lg:ml-24 sm:ml-6 text-gray-700 text-xl pb-6 sm:mt-24">
                <div class="px-4 py-4 text-xl font-bold leading-none text-red-100 bg-gray-600 rounded-md mt-8 ml-4 sm:mt-24">
                <p>Join us to celebrate e-Yantra's 1st Virtual Symposium on Saturday, April 2<sup>nd</sup> 2022.
                </p>  
                 <a href="/events" ><span class="mt-2 inline-flex items-center justify-center px-2 py-1 text-xl font-bold leading-none text-red-100 bg-red-600 rounded-full">Visit</span></a>
                </div>

                <p class="mt-4 ml-6">e-Yantra is a robotics outreach program funded by the Ministry of Education and hosted at IIT Bombay.
                The goal is to harness the talent of young engineers to solve problems using technology across a variety of domains such as: agriculture, manufacturing, defence, home, smart-city maintenance and service industries.</p>

                <div class="rounded-full py-3 px-6 mt-2 justify-center bg-red-400 text-white transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 sm:w-48 text-lg ml-4" style="background-color:#DE4757">
                    <a href="/gallery" target="_blank">Visit Our Gallery</a>
                </div>
            </div>
            <!--Right Col-->
            <div class="w-full sm:w-1/2 rounded-md transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110 justify-center">
                <a href="https://www.youtube.com/watch?v=ihSbeyyFeQo" class="mb-4">
                    <iframe class="js-modal-btn rounded w-full p-4" width="560" height="315" src="https://www.youtube.com/embed/ihSbeyyFeQo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </a>
            </div>
        </div>

        <!-- counter -->
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 justify-center" data-aos="fade-up" data-aos-duration="1500">
                @include('counter')
            </section>
            <!-- End Section -->

            <!-- What we do -->
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500" id="about">
              <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800"> What we do</h1>
              <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
              </div>
              <!-- <div class="lg:ml-16 lg:mr-16 text-gray-700 text-xl justify-center text-justify mx-auto sm:w-auto"> -->
                <div class="flex flex-col justify-center items-start  lg:ml-24 lg:mr-24 lg:p-8 text-gray-700 text-xl text-justify">
                  <!-- <p class="text-justify"> -->
                    We complement the existing higher education system Project Based Learning - i.e. “Learn by Doing”. We train students, teachers and institutions by establishing an innovation culture tasked with solving real problems using technology. We build e-Yantra labs in colleges to facilitate training and to connect students and teachers to a wider innovation community served by e-Yantra.
                    <!-- </p> -->
                  </div>

                  <div class="container mx-auto md:max-w-6xl">
                    <div class="flex flex-wrap flex-col md:flex-row gap-2 lg:gap-8">
                      <!-- eyrc -->
                      <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                        <div class="h-full p-5 shadow-sm rounded-md" style="background-color: #F87171">
                          <h3 class="text-xl">eYRC</h3>
                          <a href="/eyrc" target="_blank" class="mb-2 text-md font-bold text-gray-700 text-center">e-Yantra Robotics Competition</a>
                          <hr class="border-b-2 border-gray-700">
                          <div class="flex justify-center">
                            <img class="h-48" src="{!!asset('img/robot/eyrc.png')!!}">
                          </div>
                          <hr class="border-b-2 border-gray-700">
                          <p class="mt-2 text-justify">
                            A unique robotics competition where participants “learn while they compete and compete while they learn.”  The competition is a “hardware MOOC (Massive Online Open Course) available internationally.
                          </p>
                        </div>
                      </div>

                      <!-- eyic -->
                      <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                        <div class="h-full p-5 shadow-sm rounded-md" style="background-color: #F87171">
                          <h3 class="text-xl">eYIC</h3>
                          <a href="/eyic" target="_blank" class="mb-2 text-md font-bold text-gray-700 text-center">e-Yantra Innovation Challenge</a>
                          <hr class="border-b-2 border-gray-700">
                          <div class="flex justify-center">
                            <img class="h-48" src="{!!asset('img/robot/eyic.png')!!}">
                          </div>
                          <hr class="border-b-2 border-gray-700">
                          <p class="mt-2 text-justify">
                            A unique Innovation Challenge where participants are mentored in Innovation & Entrepreneurship skills. e-Yantra provides platforms that accelerate the building of prototype solutions to real problems.
                          </p>
                        </div>
                      </div>

                      <!-- elsi -->
                      <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                        <div class="h-full p-5 shadow-sm rounded-md" style="background-color: #F87171">
                          <h3 class="text-xl">eLSI</h3>
                          <a href="/elsi" target="_blank" class="mb-2 text-md font-bold text-gray-700 text-center">e-Yantra Lab Set-up Initiative</a>
                          <hr class="border-b-2 border-gray-700">
                          <div class="flex justify-center">
                            <img class="h-48" src="{!!asset('img/robot/elsi.png')!!}">
                          </div>
                          <hr class="border-b-2 border-gray-700">
                          <p class="mt-2 text-justify">
                            An Initiative to train teachers and institutions by establishing a culture of “Project Based Learning” and solving real problems using technology hosted in a physical lab.
                          </p>
                        </div>
                      </div>
                    </div>

                    <!-- row 2 -->
                    <div class="flex flex-wrap flex-col md:flex-row gap-2 lg:gap-8 mt-4 lg:mt-8">
                      <!-- eysrc -->
                      <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                        <div class="h-full p-5 shadow-sm rounded-md" style="background-color: #F87171">
                          <h3 class="text-xl">eYSRC</h3>
                          <a href="/eysrc" target="_blank" class="mb-2 text-md font-bold text-gray-700 text-center">e-Yantra School Robotics Competition</a>
                          <hr class="border-b-2 border-gray-700">
                          <div class="flex justify-center">
                            <img class="h-48" src="{!!asset('img/robot/eysrc.png')!!}">
                          </div>
                          <hr class="border-b-2 border-gray-700">
                          <p class="mt-2 text-justify">
                            The junior version of the e-Yantra Robotics Competition targeted at school children internationally. Currently designed for students from standards 8th to 12th (13-17 years). 
                          </p>
                        </div>
                      </div>

                      <!-- eymooc -->
                      <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                        <div class="h-full p-5 shadow-sm rounded-md" style="background-color: #F87171">
                          <h3 class="text-xl">eYMOOC</h3>
                          <a href="//mooc.e-yantra.org" target="_blank" class="mb-2 text-md font-bold text-gray-700 text-center">e-Yantra MOOC</a>
                          <hr class="border-b-2 border-gray-700">
                          <div class="flex justify-center">
                            <img class="h-48" src="{!!asset('img/robot/eyrdc.png')!!}">
                          </div>
                          <hr class="border-b-2 border-gray-700">
                          <p class="mt-2 text-justify">
                            e-Yantra MOOC is an online platform developed to offer Massive Open Online Courses (MOOCs) for students / working professionals from varying backgrounds.
                          </p>
                        </div>
                      </div>

                      <!-- eFsi -->
                      <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                        <div class="h-full p-5 shadow-sm rounded-md" style="background-color: #F87171">
                          <h3 class="text-xl">eFSI</h3>
                          <a href="/efsi" target="_blank" class="mb-2 text-md font-bold text-gray-700 text-center">e-Yantra Farm Set-up Initiative</a>
                          <hr class="border-b-2 border-gray-700">
                          <div class="flex justify-center">
                            <img class="h-48" src="{!!asset('img/robot/efsi.png')!!}">
                          </div>
                          <hr class="border-b-2 border-gray-700">
                          <p class="mt-2 text-justify">
                            An Initiative deals with developing know-how for building smart agriculture projects i.e Test Beds for addressing real world problems.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

            <!-- What makes us unique -->

            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">What makes us unique</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <!-- right coloum -->
                    <div class="flex flex-wrap">
                        <div class="w-6/6 sm:w-2/3 p-6 text-gray-700 text-xl lg:text-2xl">
                                <ul class="list-disc leading-loose">
                                  <li>We bring a project based component into engineering education - i.e. “learn by doing”</li>
                                  <li>Domain specific training to build real-world problem solving abilities</li>
                                  <li>Create a sustainable ecosystem with  students and faculty</li>
                                  <li>The goal is for students to solve real problems, to do startups and be inspired to pursue higher level R&D skills</li>
                                  <li>We have established robotics labs in more than 400 colleges across India</li>
                                </ul>
                        </div>
                        <div class="w-full sm:w-1/3 md:pt-2"><!-- http://epic.e-yantra.org/img/FOSS.gif -->
                            <img class="w-full md:w-2/2 mx-auto lg:mt-12" src="{!!asset('img/wordcloud.png')!!}" height="450" width="400">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->


            <!-- Technology Stack -->
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">Technology Stack</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <div class="grid grid-cols-9 divide-x sm:divide-y-3 justify-center">
                      <div><img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/3d-printer.png" alt="Man looking at item at a store"></div>
                      <div><img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/imageprocessing.png" alt="Man looking at item at a store"></div>
                      <div><img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/iot.png" alt="Man looking at item at a store"></div>

                      <div><img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/embedded.png" alt="Man looking at item at a store"></div>
                      <div><img class="h-12  w-1/2 object-cover md:h-full md:w-24" src="/img/machinelearning.png" alt="Man looking at item at a store"></div>
                      <div><img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/python.png" alt="Man looking at item at a store"></div>

                      <div><img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/drone.png" alt="Man looking at item at a store"></div>
                      <div><img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/ag.png" alt="Man looking at item at a store"></div>
                      <div><img class="h-12 w-1/2 object-cover md:h-full md:w-24" src="/img/blender.png" alt="Man looking at item at a store"></div>
                    </div>
                </div>
            </section>
            <!-- End Section -->


            <!-- Testimonials -->
            <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
                @include('carousel')
            </section>
            <!-- End Section -->

@stop