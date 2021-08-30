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