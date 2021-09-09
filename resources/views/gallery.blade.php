@extends('layout.main')
@section('content')
    <div class="container-fluid  mx-auto flex flex-col md:flex-row items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center">
      <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 justify-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="flex flex-wrap justify-center" id="tabs-id">
          <div class="w-full lg:w-6/12 px-4">
                 <h1 class="w-full text-4xl font-bold leading-tight text-center text-gray-800">Our Gallery</h1>
            </div>
          <div class="w-full">
            <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
              <li class="-mb-px mr-2 mt-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-700 bg-red-400" onclick="changeAtiveTab(event,'tab-eyrc')">
                  <i class="fas fa-space-shuttle text-base mr-1"></i>  eYRC
                </a>
              </li>
              <li class="-mb-px mr-2 mt-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-600 bg-white" onclick="changeAtiveTab(event,'tab-eyic')">
                  <i class="fas fa-cog text-base mr-1"></i>  eYIC
                </a>
              </li>
              <li class="-mb-px mr-2 mt-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-600 bg-white" onclick="changeAtiveTab(event,'tab-eysrc')">
                  <i class="fas fa-briefcase text-base mr-1"></i>  eYSRC
                </a>
              </li>
              <li class="-mb-px mr-2 mt-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-600 bg-white" onclick="changeAtiveTab(event,'tab-efsi')">
                  <i class="fas fa-cog text-base mr-1"></i>  eFSI
                </a>
              </li>
              <li class="-mb-px mr-2 mt-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-gray-600 bg-white" onclick="changeAtiveTab(event,'tab-workshops')">
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
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/1.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/2.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/3.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/4.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/5.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/6.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/7.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/8.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyrc/9.JPG" alt=""></div>
                      </div>
                    </section>
                  </div>
                  <div class="hidden" id="tab-eyic">
                    <section class="pt-8 px-4">
                      <div class="flex flex-wrap -mx-4">
                        <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyic/1.JPG" alt=""></div>
                        <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyic/2.JPG" alt=""></div>
                        <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyic/3.JPG" alt=""></div>
                        <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyic/4.JPG" alt=""></div>
                        <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyic/5.JPG" alt=""></div>
                        <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyic/6.JPG" alt=""></div>
                        <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyic/7.JPG" alt=""></div>
                        <div class="md:w-1/4 px-4 mb-8"><img class="rounded shadow-md" src="./assets/eyic/8.JPG" alt=""></div>
                      </div>
                    </section>
                  </div>
                  
                    <div class="hidden" id="tab-eysrc">
                    <section class="pt-8 px-4">
                      <div class="flex flex-wrap -mx-4">
                        <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="./assets/eysrc/1.PNG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="./assets/eysrc/2.PNG" alt=""></div>
                         <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="./assets/eysrc/3.PNG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="./assets/eysrc/4.PNG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="./assets/eysrc/5.PNG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="./assets/eysrc/6.PNG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="./assets/eysrc/7.PNG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8 w-full h-1/2"><img class="rounded shadow-md" src="" alt=""></div> 
                      </div>
                    </section>
                  </div>
                


                  <div class="hidden" id="tab-efsi">
                    <section class="py-8 px-4">
                      <div class="flex flex-wrap -mx-4">
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/efsi/1.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/efsi/2.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/efsi/3.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/efsi/4.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/efsi/5.JPG" alt=""></div>
                        <div class="md:w-1/3 px-4 mb-8"><img class="rounded shadow-md" src="./assets/efsi/6.JPG" alt=""></div>
                      </div>
                    </section>
                  </div>
                  <div class="hidden" id="tab-workshops">
                    <section class="py-8 px-4">
                      <div class="flex flex-wrap -mx-4">
                        <div class="hidden md:block md:w-1/2 px-4">
                          <div class="h-full w-full bg-cover rounded shadow-md" style="background-image: url('./assets/elsi/4.JPG')"></div>
                        </div>
                        <div class="md:w-1/2 h-auto px-4">
                          <div class="mb-8"><img class="rounded shadow-md" src="./assets/elsi/1.JPG" alt=""></div>
                          <div><img class="rounded shadow-md" src="./assets/elsi/2.JPG" alt=""></div>
                        </div>



                        <div class="md:w-1/2 h-auto px-4">
                          <div class="mb-8"><img class="h-full rounded shadow-md" src="./assets/elsi/3.JPG" alt=""></div>
                          <<!-- div><img class="rounded shadow-md" src="./assets/elsi/7.JPG" alt=""></div> -->
                        </div>
                        <div class="hidden md:block md:w-1/2 px-4">
                          <div class="h-full w-full bg-cover rounded shadow-md" style="background-image: url('./assets/elsi/5.JPG')"></div>
                        </div>
                      </div>
                    </section>
                  </div> 
                </div>
            </div>
          </div>
        </div>
        </div>
      </section>
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
          aElements[i].classList.remove("bg-red-400");
          aElements[i].classList.add("text-grey-400");
          aElements[i].classList.add("bg-white");
          tabContents[i].classList.add("hidden");
          tabContents[i].classList.remove("block");
        }
        element.classList.remove("text-grey-400");
        element.classList.remove("bg-white");
        element.classList.add("text-white");
        element.classList.add("bg-red-400");
        document.getElementById(tabID).classList.remove("hidden");
        document.getElementById(tabID).classList.add("block");
      }
    </script>