@extends('layout.main')
@section('content')
<section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
     <div class="px-4 py-6 rounded-md lg:text-xl md:text-lg text-gray-700 lg:ml-24 lg:mr-24">
           <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">e-Yantra Innovation Challenge (eYIC)</h1>

           <!-- right coloum -->
          <div class="flex flex-wrap">
               <div class="w-6/6 sm:w-2/3">
                    <p class="font-bold"><i class="fas fa-file-chart-column"></i> What is eYIC ? </p><br>
                    <p>e-Yantra Innovation Challenge: a competition that trains you in Innovation & Entrepreneurship</p><br><br>
                    <p class="font-bold">Purpose:</p>
                    <ul class="list-disc leading-loose m-6">
                         <li>Theme based innovation challenge</li>
                         <li>"Project Based Learning" to solve real-world problems</li>
                         <li>Domain specific training</li>
                         <li>Effectively utilise e-Yantra Labs in College/University</li>
                         <li>Platform to pitch proposals to potential incubators</li>
                         <li>Encourage startup culture</li>
                         <li>Create sustainable innovation ecosystem in college</li>
                    </ul>
               </div>
               <!-- <div class="lg:w-1/3 sm:w-1/3 md:pt-12">
                    <img class="mx-auto" src="">
               </div> -->
          </div>          

          <div class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            <div class="container w-full mx-auto">
              <!-- Heading start -->
              <header class="text-center mx-auto mb-8 lg:px-20">
                <h2 class="text-2xl leading-normal mb-2 font-bold text-center text-red-400">CAN I JOIN IN?</h2>                
                <p class="text-gray-500 leading-relaxed font-bold text-xl mx-auto pb-2">Participation Criteria</p>
              </header>
              <!-- End heading -->
              <!-- row -->
              <div class="flex flex-wrap flex-row -mx-4 text-center">
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                  <!-- service block -->
                  <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                      <!-- icon -->
                      <img class="mx-auto w-1/2" src="{!!asset('img/eyic/2.svg')!!}">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">OPEN TO ALL</h3>
                    <p class="text-gray-500">Students from all streams and disciplines. <br>Currently enrolled in any degree program at undergraduate, postgraduate and PhD level</p>
                  </div>
                  <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                  <!-- service block -->
                  <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                      <!-- icon -->
                      <img class="mx-auto w-1/2" src="{!!asset('img/eyic/20.svg')!!}">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">YOUR TEAM</h3>
                    <p class="text-gray-500">Must have min. 2 and a max 4 members and each student can join only 1 team. 1 guiding faculty can be onbaorded in a team as a member, by choice</p>
                  </div>
                  <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <!-- service block -->
                  <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                      <!-- icon -->
                      <img class="mx-auto w-1/2" src="{!!asset('img/eyic/9.svg')!!}">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">MULTI-DESCIPLINARY</h3>
                    <p class="text-gray-500">Students from different institutions and domains can also collaborate together as a team by choice</p>
                  </div>
                  <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <!-- service block -->
                  <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                      <!-- icon -->
                      <img class="mx-auto w-1/2" src="{!!asset('img/eyic/5.svg')!!}">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">LEADER</h3>
                    <p class="text-gray-500">1 member of each team should be designed as a team leader, solely for purpose of maintaining all communication with e-Yantra</p>
                  </div>
                  <!-- end service block -->
                </div>                
              </div>
              <!-- end row -->
            </div>
          </div>


          <div class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
            <div class="container w-full mx-auto">
              <!-- Heading start -->
              <header class="text-center mx-auto mb-8 lg:px-20">
                <h2 class="text-2xl leading-normal mb-2 font-bold text-center text-red-400">NOT ANOTHER RANDOM COMPETITION</h2>                
                <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2 text-bold">Helping You, Help the World Around You</p>
              </header>
              <!-- End heading -->
              <!-- row -->
              <div class="flex flex-wrap flex-row -mx-4 text-center">
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                  <!-- service block -->
                  <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                      <!-- icon -->
                      <img class="mx-auto w-1/2" src="{!!asset('img/eyic/14.svg')!!}">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">CHANELIZE YOUR IDEAS & ENERGY</h3>
                    <p class="text-gray-500">(Un)learn and train yourself from scratch through our MOOCs provided by domain experts. Remember to never be afraid and that no idea is too small to have an impact!</p>
                  </div>
                  <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                  <!-- service block -->
                  <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                      <!-- icon -->
                      <img class="mx-auto w-1/2" src="{!!asset('img/eyic/8.svg')!!}">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">FULFILL YOUR CHANGEMAKER DREAM</h3>
                    <p class="text-gray-500">Nuture your inner calling to help people in the world around you through our technical and entrepreneurial training.</p>
                  </div>
                  <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <!-- service block -->
                  <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                      <!-- icon -->
                      <img class="mx-auto w-1/2" src="{!!asset('img/eyic/4.svg')!!}">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">INDUSTRY EXPOSURE</h3>
                    <p class="text-gray-500">Get exposed to leading domain experts at our regional entrepreneurship conclave.</p>
                  </div>
                  <!-- end service block -->
                </div>
                <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/4 lg:px-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <!-- service block -->
                  <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="inline-block text-gray-900 mb-4">
                      <!-- icon -->
                      <img class="mx-auto w-1/2" src="{!!asset('img/eyic/13.svg')!!}">
                    </div>
                    <h3 class="text-lg leading-normal mb-2 font-semibold text-black">STARTUP</h3>
                    <p class="text-gray-500">Believe in yourself when no one else will. If you make it to the finals, stand a chance to pitch your product or service ideas to incubators. Give back to society as a social changemaker!</p>
                  </div>
                  <!-- end service block -->
                </div>                
              </div>
              <!-- end row -->
            </div>
          </div>


          <p class="font-bold mt-8 text-center">For More Information on eYIC, please 
           <a href="https://eyic.e-yantra.org/" target="_blank" class="bg-blue-400 rounded-md p-2">
             Click Me!!
           </a>
         </p>
     </div><!-- end container -->
</section>
@stop

