@extends('layout.main')
@section('content')
    <div class="container-fluid  mx-auto flex flex-col md:flex-row items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center">
      <!-- <section class="pb-48">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center text-center mb-24">
          <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold">Our Team</h2>
          </div>
        <div>
        <div class="flex flex-wrap">
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/1.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Sachin Patil</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Web Developer
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/2.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Bhuvna Ganesh</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Marketing Specialist
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/3.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Subrat Jena</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  UI/UX Designer
                </p>
                
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/4.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Ashish Kochher</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Founder and CEO
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="flex flex-wrap mt-6">
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/5.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Deepa Avudiappan</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Web Developer
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/6.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Ajit Harpude</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Marketing Specialist
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/7.png"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Simranjeet Singh</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  UI/UX Designer
                </p>
                
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="./assets/img/8.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Uma Sharma</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Founder and CEO
                  </p>
                </div>
              </div>
          </div>
        </div>
        
        <div class="flex flex-wrap mt-6">
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/9.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Avinash Dubey</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Web Developer
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/10.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Kalind Karia</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Marketing Specialist
                </p>
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/11.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Andrea Furtado</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  UI/UX Designer
                </p>
                
              </div>
            </div>
          </div>
          <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                alt="..."
                src="./assets/img/12.jpg"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">Sourav Jena</h5>
                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                  Founder and CEO
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section> -->
    


      <section class="container-fluid  mx-auto flex flex-col md:flex-row items-center ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="3000">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
                 <h1 class="w-full text-4xl font-bold leading-tight text-center text-gray-800">Our Team</h1>
            </div>
            <div>
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

@stop