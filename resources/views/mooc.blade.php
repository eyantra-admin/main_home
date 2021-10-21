@extends('layout.main')
@section('content')
<section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
    <div class="flex flex-wrap justify-center" id="tabs-id">
            <div class="w-full lg:w-6/12 px-4">
                <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">e-Yantra MOOC</h1>
            </div>
        <div class="px-4 py-6 rounded-md lg:text-xl md:text-lg text-gray-700 lg:ml-24 lg:mr-24">
            <p class="font-bold"><i class="fas fa-eye"></i>&nbsp; Overview</p><br>
            <p>
              e-Yantra MOOC is an online platform developed to offer Massive Open Online Courses (MOOCs) for individuals from varying backgrounds. We encourage interested students / working professionals to take advantage of the courses. The modules are covered in a Task-Based Training format over a period of four weeks complete course along with a challenging activity that assesses the complete knowledge.
            </p>
            <p class="font-bold mt-4 text-lg"><i class="fas fa-bullseye-arrow"></i>&nbsp; Goals</p>
            <ul class="list-disc leading-loose m-6">
                <li>To promote a wide variety of skills like - Embedded Systems and Robotics, Software foundation, IoT, ML, ROS, etc.</li>
                <li>To prepare the students for the National level Robotics Competition.</li>
                <li>To scale the education to the larger community by having an automatic evaluation of each task.</li>
            </ul>
            <p class="font-bold mt-4 text-center">For More Information on e-Yantra Mooc's:
                <a href="https://www.mooc.e-yantra.org/" target="_blank" class="bg-blue-400 rounded-md p-2">Click Me!!
                </a>
            </p>
        </div>
    </div>
</section>
@stop



