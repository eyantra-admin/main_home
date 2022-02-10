@extends('layout.main')
@section('content')
<section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
     <div class="flex flex-wrap justify-center" id="tabs-id">
          <div class="w-full lg:w-6/12 px-4">
            <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">e-Yantra School Robotics Competition (eYSRC)</h1>
          </div>
          <div class="px-4 py-6 rounded-md lg:text-xl md:text-lg text-gray-700 lg:ml-24 lg:mr-24">
               <p class="font-bold"><i class="fas fa-eye"></i> About the Competition </p><br>
               <p>
                  e-Yantra School Robotics Competition (eYSRC) is a unique competition for young robotics enthusiasts to think, ideate and innovate out-of-the box solutions to real-world problems. e-Yantra introduces a wide variety of skills - Embedded Systems and Robotics, Programming, Computational thinking and many more to children of Grade 8th - 12th.<br><br>
               </p>

               <!-- right coloum -->
               <div class="flex flex-wrap">
                    <div class="w-6/6 sm:w-2/3 p-6">
                    <p class="font-bold"><i class="fas fa-file-chart-column"></i> Why take part in this competition?</p>
                         <ul class="list-disc leading-loose m-6">
                              <li>Develop real-world problem-solving skills.</li>
                              <li>Expand the toolkit of knowledge to take on challenges of steadily increasing difficulty level.</li>
                              <li>Integrate & apply different STEM concepts from school in exciting and stimulating problem statements.</li>
                              <li>Step by step approach to learning the concepts such as-
                              <ul>
                                   <li>- Designing Algorithms</li>
                                   <li>- Introduction to Programming - writing beautiful code</li>
                                   <li>- Hands-on activities to learn the concepts</li>
                              </ul>
                              </li>
                              <li>Encourage teamwork, team management and time management</li>
                              <li>Impart critical thinking</li>
                         </ul>
                    </div>
                    <div class="w-full sm:w-1/3 md:pt-2 mt-6">
                         <img class="w-full md:w-2/2 mx-auto" src="{!!asset('img/robot/problem_solving.png')!!}">
                    </div>
               </div>

               <p class="font-bold mt-4 text-center">For More Information on eYSRC, please 
                   <a href="http://eysrc.e-yantra.org" target="_blank" class="bg-blue-400 rounded-md p-2">
                     Click Me!!
                   </a>
               </p>
          </div>
     </div>
</section>
@stop

