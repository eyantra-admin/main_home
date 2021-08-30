@extends('layout.main')
@section('content')
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
        <div class="container-fluid  mx-auto flex flex-col md:flex-row items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center">
            <div class="flex flex-wrap" id="tabs-id">
              <div class="w-full">
                <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-pink-600" onclick="changeAtiveTab(event,'tab-eyrc')">
          <i class="fas fa-space-shuttle text-base mr-1"></i>  eYRC
        </a>
      </li>
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-eyic')">
          <i class="fas fa-cog text-base mr-1"></i>  eYIC
        </a>
      </li>
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-eysrc')">
          <i class="fas fa-briefcase text-base mr-1"></i>  eYSRC
        </a>
      </li>
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-efsi')">
          <i class="fas fa-cog text-base mr-1"></i>  eFSI
        </a>
      </li>
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-workshops')">
          <i class="fas fa-briefcase text-base mr-1"></i>  Workshops
        </a>
      </li>
                </ul>
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
      <div class="px-4 py-5 flex-auto">
        <div class="tab-content tab-space">
          <div class="block" id="tab-eyrc">
            <section class="pt-8 px-4">
          <div class="flex flex-wrap -mx-4">
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
          </div>
            </section>
          </div>
          <div class="hidden" id="tab-eyic">
            <section class="pt-8 px-4">
          <div class="flex flex-wrap -mx-4">
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
          </div>
            </section>
          </div>
          <div class="hidden" id="tab-eysrc">
            <section class="py-8 px-4">
          <div class="flex flex-wrap -mx-4">
            <div class="hidden md:block md:w-1/2 px-4">
              <div class="h-full w-full bg-cover rounded shadow-md" style="background-image: url('https://source.unsplash.com/random/1280x720')"></div>
            </div>
            <div class="md:w-1/2 h-auto px-4">
              <div class="mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
              <div><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            </div>
          </div>
            </section>
          </div>
          <div class="hidden" id="tab-efsi">
            <section class="py-8 px-4">
          <div class="flex flex-wrap -mx-4">
            <div class="md:w-1/2 px-4 mb-8 md:mb-0"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/2 px-4 mb-8 md:mb-0"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
          </div>
            </section>
          </div>
          <div class="hidden" id="tab-workshops">
            <section class="py-8 px-4">
          <div class="flex flex-wrap -mx-4 -mb-8">
            <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
            <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="https://source.unsplash.com/random/1280x720" alt=""></div>
          </div>
            </section>
          </div> 
        </div>
      </div>
                    </div>
              </div>
            </div>
        </div>
@stop

        <script type="text/javascript">
              function changeAtiveTab(event,tabID){
                let element = event.target;
                while(element.nodeName !== "A"){
                  element = element.parentNode;
                }
                ulElement = element.parentNode.parentNode;
                aElements = ulElement.querySelectorAll("li > a");
                tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
                for(let i = 0 ; i < aElements.length; i++){
                  aElements[i].classList.remove("text-white");
                  aElements[i].classList.remove("bg-pink-600");
                  aElements[i].classList.add("text-pink-600");
                  aElements[i].classList.add("bg-white");
                  tabContents[i].classList.add("hidden");
                  tabContents[i].classList.remove("block");
                }
                element.classList.remove("text-pink-600");
                element.classList.remove("bg-white");
                element.classList.add("text-white");
                element.classList.add("bg-pink-600");
                document.getElementById(tabID).classList.remove("hidden");
                document.getElementById(tabID).classList.add("block");
              }
        </script>