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
<footer class="bg-gray-300 mt-8">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex">
            <div class="w-full -mx-6 lg:w-2/5">
                <div class="px-6">
                    <a href="https://e-yantra.org" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none text-center">
                        <div class="inline-flex items-center">
                            <img src="{!!asset('img/footer_iitb_eyantra.png')!!}" class="d-inline-block align-top img-fluid h-18 w-60" alt="e-Yantra">
                        </div>
                    </a>

                    <div class="max-w-md mt-2 text-gray-500 dark:text-gray-400">
                        e-Yantra is a project sponsored by <a class="text-blue-600" href="http://mhrd.gov.in/" target="_blank"> MoE</a> through the <a class="text-blue-600" href="//mhrd.gov.in/technology-enabled-learning-0" target="_blank">National Mission on Education through ICT (NMEICT)</a>
                    </div>

                    <div class="flex mt-4 -mx-2 rounded-social-buttons items-center text-center">
                        <a class="social-button facebook" href="https://www.facebook.com/eyantra" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-button twitter" href="https://twitter.com/eyantra_iitb" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-button linkedin" href="https://www.linkedin.com/company/e-yantraiitb/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a class="social-button youtube" href="https://www.youtube.com/user/eyantra" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="social-button instagram" href="https://www.instagram.com/eyantra/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="mt-6 lg:mt-0 lg:flex-1">
                <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4">
                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">Competitions</h3>
                        <a href="//portal.e-yantra.org" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">eYRC</a>
                        <a href="//eyic.e-yantra.org" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">eYIC</a>
                        <a href="//eysrc.e-yantra.org" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">eYSRC</a>
                    </div>

                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">Resources</h3>
                        <a href="//mooc.e-yantra.org" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">MOOC</a>
                        <a href="//content.e-yantra.org" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">eYRDC</a>
                    </div>

                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">Others</h3>
                        <a href="#" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">eLSI</a>
                        <a href="//efsi.e-yantra.org" class="block mt-2 text-sm text-gray-600 dark:text-gray-400 hover:underline">eFSI</a>
                    </div>

                    <div>
                        <h3 class="text-gray-700 uppercase dark:text-white">Contact</h3>
                        <span class="block mt-2 text-sm text-gray-600">ERTS Lab,</span>
                        <span class="block mt-2 text-sm text-gray-600">First Floor, KReSIT Building,</span>
                        <span class="block mt-2 text-sm text-gray-600"> CSE Dept, IIT Bombay, Powai </span>
                        <span class="block mt-2 text-sm text-gray-600"> Mumbai-400076, Maharashtra, India.</span>
                    </div>
                </div>
            </div>
        </div>

        <hr class="h-px my-6 bg-gray-800 border-none dark:bg-gray-700">
        <div class="text-center text-gray-800 dark:text-white">Copyright © {!!date('Y')!!} <a class="text-gray-100 font-bold" href="//e-yantra.org" target="_blank">e-Yantra</a>. All rights reserved.
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