		<!doctype html>
<html lang="en">
@yield('styles')
<body>
	@include('includes.header')
	@yield('content')
	@include('includes.footer')
</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
@yield('javascript')
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-65584389-1', 'auto');
	ga('send', 'pageview');

</script>
</html>


		<script type="text/javascript" src="{{ url('js/app.js') }}"></script>
        <script src="{{url('js/jquery-modal-video.min.js')}}"></script>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script type="text/javascript">
            //video model
            $(".js-modal-btn").modalVideo();
            //Javascript to toggle the menu
            /*document.getElementById('nav-toggle').onclick = function(){
                document.getElementById("nav-content").classList.toggle("hidden");
            }*/
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
