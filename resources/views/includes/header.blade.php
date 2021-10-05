<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-Yantra</title>
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600" rel="stylesheet">
        <link href="{{ asset('css/modal-video.min.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
        <style type="text/css">
            html{
                scroll-behavior: smooth;
                overflow-y: scroll;
            }
            body {
              font-family: 'Quicksand', sans-serif;
              font-weight: 400;
            }

            h1, h2, h3, h4, h5, h6 {
              font-weight: 600;
            }
            #menu-toggle:checked+#menu {
              display: block;
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





                    @import url(https://fonts.googleapis.com/css?family=PT+Sans+Narrow);
                    * {
                      -webkit-box-sizing: border-box;
                      -moz-box-sizing: border-box;
                      box-sizing: border-box;
                    }


                    .sectionClass {
                      padding: 20px 0px 50px 0px;
                      position: relative;
                      display: block;
                    }

                    .fullWidth {
                      width: 100% !important;
                      display: table;
                      float: none;
                      padding: 0;
                      min-height: 1px;
                      height: 100%;
                      position: relative;
                    }


                    .sectiontitle {
                      background-position: center;
                      margin: 30px 0 0px;
                      text-align: center;
                      min-height: 20px;
                    }

                    .sectiontitle h2 {
                      font-size: 30px;
                      color: #222;
                      margin-bottom: 0px;
                      padding-right: 10px;
                      padding-left: 10px;
                    }


                    .headerLine {
                      width: 160px;
                      height: 2px;
                      display: inline-block;
                      background: #101F2E;
                    }


                    .projectFactsWrap{
                        display: flex;
                      margin-top: 30px;
                      flex-direction: row;
                      flex-wrap: wrap;
                    }


                    #projectFacts .fullWidth{
                      padding: 0;
                    }

                    .projectFactsWrap .item{
                      width: 25%;
                      height: 100%;
                      padding: 50px 0px;
                      text-align: center;
                    }

                    .projectFactsWrap .item:nth-child(1){
                      background: rgb(16, 31, 46);
                    }

                    .projectFactsWrap .item:nth-child(2){
                      background: rgb(18, 34, 51);
                    }

                    .projectFactsWrap .item:nth-child(3){
                      background: rgb(21, 38, 56);
                    }

                    .projectFactsWrap .item:nth-child(4){
                      background: rgb(23, 44, 66);
                    }

                    .projectFactsWrap .item p.number{
                      font-size: 40px;
                      padding: 0;
                      font-weight: bold;
                    }

                    .projectFactsWrap .item p{
                      color: rgba(255, 255, 255, 0.8);
                      font-size: 24px;
                      margin: 0;
                      padding: 10px;
                      font-family: 'Open Sans';
                    }


                    .projectFactsWrap .item span{
                      width: 60px;
                      background: rgba(255, 255, 255, 0.8);
                      height: 2px;
                      display: block;
                      margin: 0 auto;
                    }


                    .projectFactsWrap .item i{
                      vertical-align: middle;
                      font-size: 50px;
                      color: rgba(255, 255, 255, 0.8);
                    }


                    .projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
                      color: white;
                    }

                    .projectFactsWrap .item:hover span{
                      background: white;
                    }

                    @media (max-width: 786px){
                      .projectFactsWrap .item {
                         flex: 0 0 50%;
                      }
                    }

                    /* AUTHOR LINK */


                    footer{
                      z-index: 100;
                      padding-top: 50px;
                      padding-bottom: 50px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                    }

                    footer p {
                    color: rgba(255, 255, 255, 0.8);
                      font-size: 16px;
                      opacity: 0;
                      font-family: 'Open Sans';
                      width: 100%;
                        word-wrap: break-word;
                      line-height: 25px;
                      -webkit-transform: translateX(-200px);
                      transform: translateX(-200px);
                      margin: 0;
                      -webkit-transition: all 250ms ease;
                      -moz-transition: all 250ms ease;
                      transition: all 250ms ease;
                    }

                    footer .authorWindow a{
                      color: white;
                      text-decoration: none;
                    }

                    footer p strong {
                        color: rgba(255, 255, 255, 0.9);
                    }

                    .about-me-img {
                      width: 120px;
                      height: 120px;
                      left: 10px;
                      /* bottom: 30px; */
                      position: relative;
                      border-radius: 100px;
                    }


                    .about-me-img img {
                    }


                    .authorWindow{
                      width: 600px;
                      background: #75439a;
                      padding: 22px 20px 22px 20px;
                      border-radius: 5px;
                      overflow: hidden;
                    }

                    .authorWindowWrapper{
                      display: none;
                      left: 110px;
                      top: 0;
                      padding-left: 25px;
                      position: absolute;
                    }





                    .trans{
                      opacity: 1;
                      -webkit-transform: translateX(0px);
                      transform: translateX(0px);
                      -webkit-transition: all 500ms ease;
                      -moz-transition: all 500ms ease;
                      transition: all 500ms ease;
                    }

                    @media screen and (max-width: 768px) {
                        .authorWindow{
                             width: 210px;
                        }

                        .authorWindowWrapper{
                                 bottom: -170px;
                      margin-bottom: 20px;
                        }

                        footer p{
                              font-size: 14px;
                        }
                    }

                     .dropdown:hover .dropdown-menu {
                      display: block;
                    }
        </style>
    </head>

    <header>
        <nav class="fixed w-full z-30 top-0 flex items-center justify-between flex-wrap p-6 bg-white">
          <div class="flex items-center flex-shrink-0 text-gray-600 mr-6">
            <Link href="/">
            <a class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase" href="/">
              <img src="{!! asset('img/logo.svg') !!}" alt="e-Yantra" class="w-48 md:w-56" />
            </a>
          </Link>
        </div>

        <label class="block lg:hidden cursor-pointer flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-gray-600 hover:border-gray" for="menu-toggle"><svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden w-full block flex-grow lg:flex lg:items-center lg:w-auto justify-end" id="menu">
          <div class="text-sm lg:flex-col">
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
              <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl" href="/">About Us</a>
              </li>
              <!-- <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl" href="/">Competitions</a>
            
                    <ul class="absolute left-0 top-0 mt-10 p-2 rounded-lg shadow-lg bg-gray-600 z-10 hidden group-hover:block">
                        <svg class="block fill-current text-white w-4 h-4 absolute left-0 top-0 ml-3 -mt-3 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path></svg>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/index.php?action=admin;area=featuresettings">
                                <span class="">Funzioni ed opzioni</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/index.php?action=admin;area=packages">
                                <span class="">Gestore Pacchetti</span>
                            </a>
                        </li>
                        <li class="p-1 whitespace-no-wrap rounded-full text-sm md:text-base text-gray-600 hover:text-gray-800 hover:bg-gray-100">
                            <a class="px-2 py-1" href="http://www.italiansubs.local:8081/forum/index.php?action=admin;area=permissions">
                                <span class="">Permessi</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
              <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl" href="gallery">Gallery</a>
              </li>
              <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl" href="team">Our Team</a>
              </li>
              <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl" href="publications">Publications</a>
              </li>
              <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <a class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl" href="contact">Contact Us</a>
              </li>
               <li class="mr-3 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                    <!-- Dropdown toggle button -->
                    <button @mouseover="open = true" class="flex items-center block p-2 bg-white rounded-md ">
                        <span class="inline-block px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl">Initiatives</span>
                        <svg class="w-6 h-6 text-white text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.3000ms
                        class="absolute right-0 w-48 mt-2 bg-white rounded-md shadow-xl">
                        <a href="/elsi"
                            class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl">
                            eLSI
                        </a>
                        <a href="/eyrc"
                            class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl">
                            eYRC
                        </a>
                        <a href="/eyic"
                            class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl">
                            eYIC
                        </a>
                       
                        <!-- <a href="/eyrdc"
                            class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl">
                            eYRDC
                        </a> -->
                        <a href="/efsi"
                            class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl">
                            eFSI
                        </a>
                         <a href="/eysrc"
                            class="inline-block py-2 px-4 text-gray-400 text-red-500 no-underline hover:text-red-800 hover:text-underline font-bold text-xl">
                            eYSRC
                        </a>
                    </div>
                </div>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
