@extends('layout.main')
@section('content')
<section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
    <div class="container-fluid  mx-auto flex flex-col md:flex-row items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center">
        <div class="flex flex-wrap justify-center text-center mb-24">
            <p class="font-bold"># e-Yantra logo</p><br>
            <div>
              <div class="flex flex-wrap">
              <?php
                   $files = glob("logo/eyantra/press/*.*");
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
        <hr class="my-2">
    </div>
</section>

<section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
    <p class="font-bold text-2xl text-center"># e-Yantra logo files Download</p>
    <div class="container-fluid  mx-auto flex flex-col md:flex-row items-center mt-4 ml-6 mr-6 bg-gray-200 justify-center">

        <div class="flex flex-wrap justify-center text-center">
            <div>
              <div class="flex flex-wrap">
                <a href="/logo1PdfDownload" target="_blank" class="bg-red-200 text-2xl rounded-md p-2 m-4">
                    eyantra_logo Pdf Download
                </a>

                <a href="/logo2PdfDownload" target="_blank" class="bg-red-200 text-2xl rounded-md p-2 m-4">
                    eyantra_logo Pdf Download
                </a>

                <a href="/eyantracdrDownload" target="_blank" class="bg-red-200 text-2xl rounded-md p-2 m-4">
                    eyantra_logo CDR file
                </a>
              </div>
            </div>
        </div>
        <hr class="my-2">
    </div>
</section>


@stop



