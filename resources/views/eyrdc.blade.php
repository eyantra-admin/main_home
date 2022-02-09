@extends('layout.main')
@section('content')

<section class="container-fluid px-2 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
    <div class="py-6 rounded-md lg:text-xl md:text-lg text-gray-700 lg:ml-24 lg:mr-24">
        <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">e-Yantra Resource Development Center (eYRDC)</h1>

           <!-- right coloum -->
        <div class="flex flex-wrap">
            <div class="w-6/6 sm:w-2/3">
                <p>e-Yantra Resource Development Center (eYRDC) is exclusively for eLSI colleges, through which we plan to share resources for teachers in these colleges to help them use their e-Yantra labs in an effective manner.</p><br><br>
                <p class="font-bold">Currently the portal consists of following sections:</p>
                <ul class="list-disc leading-loose m-6">
                  <li><b>Lesson Plans</b> are created to help teachers conduct lessons and assign experiments that would encourage students to use the Robots and accessories from their e-Yantra labs on topics from their curriculum.</li>
                  <li><b>Tutorial section</b> contains set of modules based on different technologies which will extend the capabilities of Firebird V Robot.</li>
                  <li><b>Lecture section</b> contains many interesting lectures comprising different aspects that take student to become well rounded person.</li>
                  <li><b>I&E section</b> contains lecture series on Innovation and Entrepreneurship for the benefit of students participating in e-Yantra Ideas Competition.</li>
                  <li><b>Project section</b> contains projects based on application of new technologies. Colleges who are looking for project ideas can watch the video to get the ideas which will be helpful in making their own BE projects.</li>
                  <li><b>Generic Projects</b> contains project videos on different applications on Firebird V Robot.</li>
                  <li><b>Create Content</b> a new initiative gives an opportunity to the teacher to work on topics of his/her choice and share the content across the country through this portal.</li>
                </ul>
            </div>
            <div class="lg:w-1/3 sm:w-1/3 md:pt-12 lg:mt-48 justify-center items-center">
                <iframe class="lg:w-full lg:h-1/2" src="https://www.youtube.com/embed/8hNQIpS_VY4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div> 
         <p class="font-bold mt-4 text-center">For More Information on eYRDC:
                <a href="http://content.e-yantra.org/content" target="_blank" class="bg-blue-400 rounded-md p-2">Click Me!!
                </a>
            </p>
    </div><!-- end container -->
</section>
@stop

