<style type="text/css">
    textarea {
    resize: none;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  white-space: nowrap;
}

@charset "UTF-8";

.svg-inline--fa {
  vertical-align: -0.200em;
}

.rounded-social-buttons {
  text-align: center;
}

.rounded-social-buttons .social-button {
  display: inline-block;
  position: relative;
  cursor: pointer;
  width: 3.125rem;
  height: 3.125rem;
  border: 0.125rem solid transparent;
  padding: 0;
  text-decoration: none;
  text-align: center;
  color: #fefefe;
  font-size: 1.5625rem;
  font-weight: normal;
  line-height: 2em;
  border-radius: 1.6875rem;
  transition: all 0.5s ease;
  margin-right: 0.25rem;
  margin-bottom: 0.25rem;
}

.rounded-social-buttons .social-button:hover, .rounded-social-buttons .social-button:focus {
  -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
          transform: rotate(360deg);
}

.rounded-social-buttons .fa-twitter, .fa-facebook-f, .fa-linkedin, .fa-youtube, .fa-instagram {
  font-size: 25px;
}

.rounded-social-buttons .social-button.facebook {
  background: #3b5998;
}

.rounded-social-buttons .social-button.facebook:hover, .rounded-social-buttons .social-button.facebook:focus {
  color: #3b5998;
  background: #fefefe;
  border-color: #3b5998;
}

.rounded-social-buttons .social-button.twitter {
  background: #55acee;
}

.rounded-social-buttons .social-button.twitter:hover, .rounded-social-buttons .social-button.twitter:focus {
  color: #55acee;
  background: #fefefe;
  border-color: #55acee;
}

.rounded-social-buttons .social-button.linkedin {
  background: #007bb5;
}

.rounded-social-buttons .social-button.linkedin:hover, .rounded-social-buttons .social-button.linkedin:focus {
  color: #007bb5;
  background: #fefefe;
  border-color: #007bb5;
}

.rounded-social-buttons .social-button.youtube {
  background: #bb0000;
}

.rounded-social-buttons .social-button.youtube:hover, .rounded-social-buttons .social-button.youtube:focus {
  color: #bb0000;
  background: #fefefe;
  border-color: #bb0000;
}

.rounded-social-buttons .social-button.instagram {
  background: #125688;
}

.rounded-social-buttons .social-button.instagram:hover, .rounded-social-buttons .social-button.instagram:focus {
  color: #125688;
  background: #fefefe;
  border-color: #125688;
}
</style>
 <footer class="bg-gray-600 mx-6">
<div class="container mx-auto px-8"><!-- class="w-full flex flex-col md:flex-row py-6" -->
   <div class=" px-4 sm:px-6 text-gray-800 sm:grid md:grid-cols-4 sm:grid-cols-2 mx-auto">
     <div class="p-5">
          <img  src="{!! asset('img/iitblogo.png') !!}">
            <!-- <div class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col
              max-w-screen-lg items-center">
              <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                 <a href="/https://twitter.com/eyantra_iitb" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-600 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                       <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                          5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                          -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                          0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                          -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                          0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                          -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                          0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                          -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                          -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                          1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                          -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                          6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                          0.771,-0.67 1.054,-1.093Z"></path>
                    </svg>
                 </a>
                 <a href="https://www.linkedin.com/company/e-yantraiitb/" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                       <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                          5.373,-12 12,-12c6.627,0 12,5.373
                          12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                          0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                          -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                    </svg>
                 </a>
                 <a href="https://www.linkedin.com/company/e-yantraiitb/" target="_blank" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                       <g id="Layer_1">
                          <circle id="Oval" cx="12" cy="12" r="12"></circle>
                          <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                             -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                             -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                             -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                             -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                             0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                             2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                             1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                             0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                             -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                             -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                             -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                             0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                             0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                       </g>
                    </svg>
                 </a>
                 <a href="https://www.facebook.com/eyantra" target="_blank" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                       <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                          3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                          -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                          -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                          -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                          0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                          3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                          -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                          -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                          1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                          -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                          -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                          0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                          0.4,1.5l0,4.5l2.9,0Z"></path>
                    </svg>
                 </a>
                 <a href="/https://twitter.com/eyantra_iitb" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                       <path id="instagram" d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                          -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                          -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                          0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                          0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                          -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z"></path>
                    </svg>
                 </a>
              </div>
            </div>-->
      </div>
     <div class="p-5">
        <img src="{!! asset('img/mhrd.png') !!}">
     </div>
      
      <div class="p-5">
         <div class="text-2xl uppercase text-white font-bold">Our Initiatives</div>
         <a class="my-3 text-gray-800 font-bold" href="e-yantra.org">eLSI </a><br>
         <a class="my-3 font-bold" href="/portal.e-yantra.org">eYRC</a><br>
         <a class="my-3 font-bold" href="eyic.e-yantra.org">eYIC </a> <br>
         <a class="my-3 font-bold" href="content.e-yantra.org">eYRDC </a> <br>
         <a class="my-3 font-bold" href="mooc.e-yantra.org">MOOC </a> <br>
         <a class="my-3 font-bold" href="eysrc.e-yantra.org">eYSRC </a> <br>
         <a class="my-3 font-bold" href="efsi.e-yantra.org">eFSI </a> <br>
      </div>
      <div class="p-5">
         <div class="text-2xl uppercase text-white font-bold">Contact us</div>
         <a class="my-3 font-bold" href="/#">ERTS Lab,<br>First Floor, KReSIT Building,<br> CSE Dept, <br>IIT Bombay, <br>Powai, Mumbai-400076,<br> Maharashtra, India.<span class="text-teal-600 text-xs p-1"></span></a><br>
         <a class="my-3 font-bold" href="/#">support@e-yantra.org <span class="text-teal-600 text-xs p-1"></span></a> 
      </div>
   </div>
</div>
<div class="bg-gray-600 pt-2">
    <div class="rounded-social-buttons items-center text-center">
        <a class="social-button facebook" href="https://www.facebook.com/eyantra" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a class="social-button twitter" href="https://twitter.com/eyantra_iitb" target="_blank"><i class="fab fa-twitter"></i></a>
        <a class="social-button linkedin" href="https://www.linkedin.com/company/e-yantraiitb/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a class="social-button youtube" href="https://www.youtube.com/user/eyantra" target="_blank"><i class="fab fa-youtube"></i></a>
        <a class="social-button instagram" href="https://www.instagram.com/eyantra/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div> 
    <div class="w-full py-6 text-center text-gray-500">
        <hr class="mb-5">
            Copyright © {!!date('Y')!!} <a class="text-gray-100 font-bold" href="//e-yantra.org" target="_blank">e-Yantra</a>. All rights reserved. <br>     
    </div>
</div>
</footer>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>


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

        <script>
            $.fn.jQuerySimpleCounter = function( options ) {
                var settings = $.extend({
                    start:  0,
                    end:    100,
                    easing: 'swing',
                    duration: 400,
                    complete: ''
                }, options );

                var thisElement = $(this);

                $({count: settings.start}).animate({count: settings.end}, {
                    duration: settings.duration,
                    easing: settings.easing,
                    step: function() {
                        var mathCount = Math.ceil(this.count);
                        thisElement.text(mathCount);
                    },
                    complete: settings.complete
                });
            };

        $('#number1').jQuerySimpleCounter({end: 12,duration: 3000});
        $('#number2').jQuerySimpleCounter({end: 55,duration: 3000});
        $('#number3').jQuerySimpleCounter({end: 359,duration: 2000});
        $('#number4').jQuerySimpleCounter({end: 246,duration: 2500});

        </script>