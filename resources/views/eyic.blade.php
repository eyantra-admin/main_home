@extends('layout.main')
@section('content')
<section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
     <div class="px-4 py-6 rounded-md lg:text-xl md:text-lg text-gray-700 lg:ml-24 lg:mr-24">
           <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">e-Yantra Innovation Challenge (eYIC)</h1>

           <!-- right coloum -->
          <div class="flex flex-wrap">
               <div class="w-6/6 sm:w-2/3 p-6">
                    <p class="font-bold"><i class="fas fa-file-chart-column"></i> What is eYIC ? </p><br>
                    <p>e-Yantra Innovation Challenge: a competition that trains you in Innovation & Entrepreneurship</p><br><br>
                    <p class="font-bold">Purpose:</p><br>
                    <ul class="list-disc leading-loose m-6">
                         <li>Theme driven innovation challenge</li>
                         <li>"Project Based Learning" to solve real-world problems</li>
                         <li>Domain specific training</li>
                         <li>Effectively utilise e-Yantra Labs in College/University</li>
                         <li>Platform to showcase solutions to potential incubators</li>
                         <li>Encourage startup culture</li>
                         <li>Create sustainable innovation ecosystem in college</li>
                    </ul>
               </div>
               <div class="lg:w-1/3 sm:w-1/3 md:pt-12 lg:mt-48">
                    <img class="mx-auto" src="{!!asset('img/eyic_poster.png')!!}">
               </div>
          </div>

           <!-- left coloum -->
          <div class="flex flex-wrap sm:flex-row">
               <div class="w-full md:w-1/2 p-6 mt-6">
                    <img class="w-2/3 mx-auto" src="{!!asset('img/eyic_wordcloud.png')!!}">
               </div>
               <div class="w-full sm:w-1/2 p-6">
                    <div class="align-middle">
                        <p class="font-bold"><i class="fas fa-file-chart-column"></i> Who can register for the competition? </p><br>
                         <ul class="list-disc leading-loose m-6">
                              <li>Theme driven innovation challenge</li>
                              <li>"Project Based Learning" to solve real-world problems</li>
                              <li>Domain specific training</li>
                              <li>Effectively utilise e-Yantra Labs in College/University</li>
                              <li>Platform to showcase solutions to potential incubators</li>
                              <li>Encourage startup culture</li>
                              <li>Create sustainable innovation ecosystem in college</li>
                         </ul><br><br>
                   </div>
               </div>
          </div>
     </div><!-- end container -->
</section>
@stop

