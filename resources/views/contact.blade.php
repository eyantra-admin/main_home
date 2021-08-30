<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Yantra</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/modal-video.min.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style type="text/css">
            html{
                scroll-behavior: smooth;
                overflow-y: scroll;
            }
            .gradient {
                background:linear-gradient(90deg,#ec0d0d 0%, #c5b7b8 100%);
            }
            .writing {
                background:linear-gradient(90deg,#e5e5e5 0%, #e5e5e5 100%);
                font: Raleway;
                font-weight: normal;
                font-size: x-large;
                line-height: 2;
                font-weight: 600;
                color: #292524;
            }
            .writingtext {
                font: Raleway;
                font-weight: normal;
                font-size: x-large;
                line-height: 2;
                font-weight: 600;
                color: #292524;
            }
            
            .video-thumbnail {
                  position: relative;
                  display: inline-block;
                  cursor: pointer;
                  margin: 30px;

                  &:before {
                    position:absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    -webkit-transform: translate(-50%, -50%);
                    content: "\f01d";
                    font-family: FontAwesome;
                    font-size: 100px;
                    color: #fff;
                    opacity: .8;
                    text-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5);
                }
                &:hover:before {
                    color: #eee;
                }


                html, body {
    margin: 0px;
    padding: 0px;
    background: url("http://digital.bnint.com/filelib/s9/photos/white_wood_4500x3000_lo_res.jpg");
}

.carousel {
    position: relative;
    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
    margin-top: 26px;
}

.carousel-inner {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.carousel-open:checked + .carousel-item {
    position: static;
    opacity: 100;
}

.carousel-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
}

.carousel-item img {
    display: block;
    height: auto;
    max-width: 100%;
}

.carousel-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
}

.carousel-control.prev {
    left: 2%;
}

.carousel-control.next {
    right: 2%;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.8);
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1,
#carousel-2:checked ~ .control-2,
#carousel-3:checked ~ .control-3 {
    display: block;
}

.carousel-indicators {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
}

.carousel-indicators li {
    display: inline-block;
    margin: 0 5px;
}

.carousel-bullet {
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 35px;
}

.carousel-bullet:hover {
    color: #aaaaaa;
}

#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
    color: #428bca;
}

#title {
    width: 100%;
    position: absolute;
    padding: 0px;
    margin: 0px auto;
    text-align: center;
    font-size: 27px;
    color: rgba(255, 255, 255, 1);
    font-family: 'Open Sans', sans-serif;
    z-index: 9999;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
}

        </style>
    </head>
    <body>
        <!-- navigation bar -->
        <header>
            <nav class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between navbar-expand-lg bg-white shadow">
                <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                  <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <Link href="/">
                      <a
                        class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                        href="/"
                      >
                        <img src="{!! asset('img/logo.svg') !!}" alt="e-Yantra" class="w-48 md:w-56" />
                      </a>
                    </Link>
                    <button
                      class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                      type="button"
                      v-on:click="setNavbarOpen"
                    >
                      <i class="fas fa-bars"></i>
                    </button>
                  </div>

                  <div class="lg:flex flex-grow items-center" :class="[navbarOpen ? 'block' : 'hidden']" id="example-navbar-warning">
                    <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    </ul>
                    <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/">About Us</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/">Event Calender</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/gallery">Gallery</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/team">Our Team</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/">Publications</a>
                        </li>
                        <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </header>
        <!-- end -->

        <!-- contact us -->
           <!--  <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">Contact Us</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <div class="flex flex-wrap text-justify">
                        <div class="w-1/2 text-gray-700 text-2xl mb-8">
                            <p>Address</p><br>
                            <p class="text-lg">
                                ERTS Lab,<br>
                                First Floor, KReSIT Building,<br>
                                IIT Bombay, Powai,<br>
                                Mumbai - 400076, Maharashtra.<br>
                                022 2576 4986<br>
                                022 25720184
                            </p> 
                        </div>
                        <div class="w-full sm:w-1/3 text-gray-700 text-2xl mb-8">
                            <p>Email Addresses for our initiatives</p><br>
                            <p class="text-lg">
                                eYRC: eyrc@e-yantra.org<br>
                                eYIC: eyic@e-yantra.org<br>
                                eYSRC: school@e-yantra.org<br>
                                eLSI: support@e-yantra.org<br>
                                eFSI: efsi@e-yantra.org
                            </p>  
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- End Section -->
            <!-- <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="container max-w-7xl mx-auto m-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15077.924545593301!2d72.9159513!3d19.1304053!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa4dcc5535605048!2sERTS%20Lab!5e0!3m2!1sen!2sin!4v1630045629215!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section> -->
        <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="3000">
                <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">Contact Us</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
            <div class="grid grid-cols-3 gap-4">
              <div class="text-gray-700 text-2xl mb-8">
                  <p>Address</p><br>
                            <p class="text-lg">
                                ERTS Lab,<br>
                                First Floor, KReSIT Building,<br>
                                IIT Bombay, Powai,<br>
                                Mumbai - 400076, Maharashtra.<br>
                                022 2576 4986<br>
                                022 25720184
                            </p> 
              </div>
              <!-- ... -->
              <div class="text-gray-700 text-2xl mb-8">
                  <p>Email Addresses for our initiatives</p><br>
                            <p class="text-lg">
                                eYRC: eyrc@e-yantra.org<br>
                                eYIC: eyic@e-yantra.org<br>
                                eYSRC: school@e-yantra.org<br>
                                eLSI: support@e-yantra.org<br>
                                eFSI: efsi@e-yantra.org
                            </p>  
              </div>
              <div class="text-gray-700 text-2xl mb-8 justify-center m-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15077.924545593301!2d72.9159513!3d19.1304053!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa4dcc5535605048!2sERTS%20Lab!5e0!3m2!1sen!2sin!4v1630045629215!5m2!1sen!2sin" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          
              </div>
            </div>
        </div>
    </section>


        <!-- footer -->
        <footer class="bg-gray-600 mx-6">
            <div class="container mx-auto px-8">
                <div class="w-full py-6">
                    <p class="text-gray-900 text-center md:text-2xl">
                        e-Yantra is a project sponsored by <a class="text-blue-600" href="http://mhrd.gov.in/" target="_blank">MoE</a> through the <a class="text-blue-600" href="//mhrd.gov.in/technology-enabled-learning-0" target="_blank">National Mission on Education through ICT (NMEICT)</a>
                    </p>
                </div>
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="w-full md:w-3/5 mb-6">
                        <img src="{!! asset('img/mhrd.png') !!}">
                    </div>
                    <div class="w-full mx-auto mb-6 text-center md:text-right md:text-lg">
                        <p>
                            <!-- facebook -->
                            <span class="mdi mdi-facebook text-orange-500"></span>
                            <a href="//www.facebook.com/eyantra" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-3">Facebook</a>
                            <!-- twitter -->
                            <span class="mdi mdi-twitter text-orange-500"></span>
                            <a href="//twitter.com/eyantra_iitb" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-3">Twitter</a>
                            <!-- linkedin -->
                            <span class="mdi mdi-linkedin text-orange-500"></span>
                            <a href="https://www.linkedin.com/company/14407133/admin/" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-3">LinkedIn</a>
                            <!-- insta -->
                            <span class="mdi mdi-instagram text-orange-500"></span>
                            <a href="//www.instagram.com/eyantra/" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-3">Insta</a>
                            <!-- youtube -->
                            <span class="mdi mdi-youtube text-orange-500"></span>
                            <a href="https://www.youtube.com/user/eyantra/videos" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500">YouTube</a>
                        </p>
                        <p class="mt-5">
                            <a href="https://www.e-yantra.org" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mr-5">e-Yantra</a>
                            <!-- elsi -->
                            <a href="https://www.e-yantra.org/elsi" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500">eLSI</a>
                            <!-- eyic -->
                            <a href="https://www.e-yantra.org/eyic" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500 mx-5">eYIC</a>
                            <!-- eyrdc -->
                            <a href="http://content.e-yantra.org/content" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-orange-500">eYRDC</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full py-6 text-center text-gray-500">
                <hr class="mb-5">
                Copyright © {!!date('Y')!!} <a class="text-blue-600" href="//e-yantra.org" target="_blank">e-Yantra</a>. All rights reserved. <br>
                <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Background vector created by freepik - www.freepik.com</a>
            </div>
        </footer><!-- end -->

        <script type="text/javascript" src="{{ url('js/app.js') }}"></script>
        <script src="{{url('js/jquery-modal-video.min.js')}}"></script>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script type="text/javascript">
            //video model
            $(".js-modal-btn").modalVideo();
            //Javascript to toggle the menu
            document.getElementById('nav-toggle').onclick = function(){
                document.getElementById("nav-content").classList.toggle("hidden");
            }
            //
            var activeclass = document.querySelectorAll('#navlist li a');
            for (var i = 0; i < activeclass.length; i++) {
                activeclass[i].addEventListener('click', activateClass);
            }

            function activateClass(e) {
                for (var i = 0; i < activeclass.length; i++) {
                    activeclass[i].classList.remove("text-pink-500","font-bold");
                }
                e.target.classList.add("text-pink-500","font-bold");
            }
        </script>
        <script>
            /*on scroll change the font-bold class*/
            var mainNavLinks = document.querySelectorAll("#navlist li a");
            var mainSections = document.querySelectorAll("body section");

            let lastId;
            let cur = [];

            window.addEventListener("scroll", event => {
                var fromTop = window.scrollY + 60;

                mainNavLinks.forEach(link => {
                    var section = document.querySelector(link.hash);
                    if(
                        section.offsetTop <= fromTop  &&
                        section.offsetTop + section.offsetHeight > fromTop
                        ){
                        link.classList.add("text-pink-500","font-bold");
                    } else {
                        link.classList.remove("text-pink-500","font-bold");
                    }
                });
            });
        </script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145861739-15"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-145861739-15');
        </script>

        <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
          AOS.init();
        </script>

    </body>
</html>
