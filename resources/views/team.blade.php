@extends('layout.main')
@section('content')
<div class="flex-row items-center justify-center text-center bg-gray-200 mt-4 ml-6 mr-6 mx-auto  md:pt-24" data-aos="fade-up" data-aos-duration="3000">
  <h1 class="w-full text-4xl font-bold leading-tight text-center text-gray-800">Our Team</h1>
        <section class="m-2 font-sans leading-normal flex justify-center data-aos="fade-up" data-aos-duration="3000">
          <!-- card container -->
          <div class="max-w-lg shadow-lg rounded overflow-hidden m-4 sm:flex">

            <div class="h-48 sm:h-auto sm:w-48 md:w-64 lg:w-4/3 lg:h-full flex-none bg-cover bg-center rounded rounded-t sm:rounded sm:rounded-l text-center overflow-hidden" style="background-image: url('/img/avatar/core/above/kaviarya.jpg'); width: 220px; height: 220px">
            </div>
            
             <div class="px-6 py-4">
              <h2 class="mb-2 font-black">Prof. Kavi Arya</h2>
              <p class="mb-4 text-grey-dark text-sm">
                D.Phil.(Oxon.)<br>
                Professor<br>
                Principal Investigator,e-Yantra <br>
                CSE Department, <br>
                IIT Bombay
               </p>
            </div>
          </div>
        </section>
</div>
    <div class="container-fluid  mx-auto flex flex-col md:flex-row items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center">
      <section class="container-fluid  mx-auto flex flex-col md:flex-row items-center ml-6 mr-6 bg-gray-200 md:pt-6 justify-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div>
            <h1 class="text-center text-3xl font-semibold pb-3">Core Team</h1>
              <div class="flex flex-wrap">
              <?php
                   $files = glob("img/avatar/core/*.*");
                  for ($i=0; $i<count($files); $i++)
                  {
                      $path = $files[$i];
                      $pathpieces = explode("/", $path);

                      $filename = $pathpieces[3];

                      $member = explode("~", substr("$filename", 2, -4));

                      $displayname = str_replace("_"," ","$member[0]");
                      $displaytitle = str_replace("_"," ","$member[1]");

                      // echo '<div class="flex flex-wrap">';
                      echo '<div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">';
                      echo '<div class="px-6 pt-6">';
                      echo '<img src="',$path,'" alt="',$displayname,'" class="shadow-lg rounded-full max-w-full mx-auto"/>';
                      echo '<div class="pt-6 text-center">';
                      echo '<h5 class="text-xl font-bold text-gray-700">',$displayname,'</h5>';
                      echo '<p class="mt-1 text-sm text-gray-500 font-semibold">',$displaytitle,'</P>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                  }
                ?>
              </div>
          </div>
        </div>
      </div>
      </section>
    </div>
    <div class="container-fluid  mx-auto flex flex-col md:flex-row items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center">
      <section class="container-fluid  mx-auto flex flex-col md:flex-row items-center ml-6 mr-6 bg-gray-200 md:pt-6 justify-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div>
            <h1 class="text-center text-3xl font-semibold pb-3">Alumni</h1>
              <div class="flex flex-wrap">
              <?php
                   $files = glob("img/avatar/alumni/*.*");
                  for ($i=0; $i<count($files); $i++)
                  {
                      $path = $files[$i];
                      $pathpieces = explode("/", $path);

                      $filename = $pathpieces[3];

                      $member = explode("~", substr("$filename", 2, -4));

                      $displayname = str_replace("_"," ","$member[0]");
                      $displaytitle = str_replace("_"," ","$member[1]");

                      // echo '<div class="flex flex-wrap">';
                      echo '<div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">';
                      echo '<div class="px-6 pt-6">';
                      echo '<img src="',$path,'" alt="',$displayname,'" class="shadow-lg rounded-full max-w-full mx-auto"/>';
                      echo '<div class="pt-6 text-center">';
                      echo '<h5 class="text-xl font-bold text-gray-700">',$displayname,'</h5>';
                      echo '<p class="mt-1 text-sm text-gray-500 font-semibold">',$displaytitle,'</P>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                  }
                ?>
              </div>
          </div>
        </div>
      </div>
      </section>
    </div>
@stop