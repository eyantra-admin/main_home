@extends('layout.main')
@section('content')
<section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
     <div class="px-4 py-6 rounded-md lg:text-xl md:text-lg text-gray-700 lg:ml-24 lg:mr-24">
           <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">e-Yantra Products</h1>

           <!-- right coloum -->
          <div class="flex flex-wrap">
               <div class="w-6/6 sm:w-2/3">
                    <p>e-Yantra is rigorously working on developing products that can accomplish certain tasks.</p><br><br>
                    <p class="font-bold"><i class="fas fa-file-chart-column"></i> eYFi-Mega</p>
                    <ul class="list-disc leading-loose m-6">
                         <li>ATmega2560 and ESP32 based development board</li>
                         <li>12.5 W of Output Power</li>
                         <li>Wi-Fi compatible</li>
                         <li>Bluetooth Low Energy</li>
                         <li>Over-The-Air Update</li>
                         <li>Compatible with FreeRTOS</li>
                         <li>Arduino Programming Language Compatible</li>
                         <li>On-Board File Storage</li>
                         <li>Awesome Support</li>
                    </ul>
                    <hr class="border-b-1 border-gray-600 mt-4">
                    <h2 class="text-xl text-left text-gray-700 px-2"><i class="fas fa-file-chart-column"></i> &nbsp; Download eYFi-Mega documentations</h2>
                    <p class="font-bold mt-4 text-left">
                         <a href="/hardware_doc" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 rounded inline-flex items-center">
                           <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                           <span>Hardware manual</span>
                         </a>
                         <a href="/software_doc" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 mt-2 rounded inline-flex items-center">
                           <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                           <span>Software manual</span>
                         </a>
                    </p>
                    <hr class="border-b-1 border-gray-600 mt-8">
               </div>
               <div class="lg:w-1/4 lg:h-auto sm:w-1/3 md:pt-12">
                    <img class="mx-auto" src="{!!asset('img/mega.png')!!}">
               </div>
          </div>

           <!-- left coloum -->
          <div class="flex flex-wrap sm:flex-row">
               <div class="w-full md:w-1/2 p-6 mt-6 lg:mt-36">
                    <img class="w-full mx-auto" src="{!!asset('img/lfa.png')!!}">
               </div>
               <div class="w-full sm:w-1/2 lg:mt-12 lg:pl-8">
                    <div class="align-middle">
                        <p class="font-bold"><i class="fas fa-file-chart-column"></i> Line Follower Array </p>
                         <ul class="list-disc leading-loose m-6">
                              <li>8 sensor eyes (QRE1113)</li>
                              <li>I2C interface</li>
                              <li>Adjust IR brightness on the fly with a knob</li>
                              <li>Switch IR on and off with software</li>
                              <li>Switch visual indicators on and off with software</li>
                              <li>Invert dark/light sight with software</li>
                              <li>Based on the MCP23017 I/O Expander</li>
                         </ul>
                         <hr class="border-b-1 border-gray-600 mt-4">
                         <h2 class="text-xl text-left text-gray-700 px-2"><i class="fas fa-file-chart-column"></i> &nbsp; Download eY-LFA Hookup Guide</h2>
                         <p class="font-bold mt-4 text-left">
                              <a href="/eylfa_doc" class="bg-red-400 hover:bg-red-300 text-gray-800 text-sm font-bold py-2 px-4 rounded inline-flex items-center">
                              <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                              <span>eY-LFA Hookup Guide</span>
                              </a>
                         </p>
                         <hr class="border-b-1 border-gray-600 mt-8">
                   </div>
               </div>
          </div>


          <p class="font-bold mt-4 text-center">Developed by e-Yantra at IIT Bombay, India </p>
     </div><!-- end container -->
</section>
@stop

