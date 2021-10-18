@extends('layout.main')
@section('content')
  <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center ml-6 mr-6 bg-gray-200 justify-center" data-aos="fade-up" data-aos-duration="1500">
    <div class="flex flex-wrap justify-center" id="tabs-id">
      <div class="w-full lg:w-6/12 px-4">
        <!-- <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">e-Yantra Publications</h1> -->
        <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-32  font-bold leading-tight text-center text-gray-800">Publications</h1>
      </div>

      <div class="container mx-auto md:max-w-6xl mt-8">
          <!-- <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
            <li class="-mb-px mr-2 mt-2 last:mr-0 flex-auto text-center">
              <a class="text-lg font-bold px-5 py-3 shadow-lg rounded block leading-normal text-gray-700 bg-red-400" onclick="changeAtiveTab(event,'tab-intjournal')">
                <i class="fas fa-cog text-base mr-1"></i>  International Journals
              </a>
            </li>
            <li class="-mb-px mr-2 mt-2 last:mr-0 flex-auto text-center">
              <a class="text-lg font-bold px-5 py-3 shadow-lg rounded block leading-normal text-gray-700 bg-white font-bold" onclick="changeAtiveTab(event,'tab-intconference')">
                <i class="fas fa-briefcase text-base mr-1"></i>International Conferences
              </a>
            </li>
            
          </ul> -->

        <div class="tab-content tab-space lg:mt-8"> 
          <!-- JOURNAL PAPERS -->
          <!-- row 1 -->
          



          <!-- row 2 -->
          <!-- CONFERENCE PAPERS -->
         <!--  <div class="hidden" id="tab-intconference"> -->
            <!-- conf 1 -->
            <div class="flex-1 mx-4 lg:mx-0">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                 1.  S. Jadhav, K. Karia, P. Trimukhe, S. Jena and K. Arya, PBL Approach in Online Robotics Competition in Resource-Poor Environments: Maze Solver Robot, 2021 IEEE Global Engineering Education Conference (EDUCON), 2021, pp. 492-498. <a href="https://doi.org/10.1109/EDUCON46332.2021.9453995" class="text-xl font-medium text-indigo-500" target="_blank">View Paper</a>
                </p>
              </div>
              <!-- journal 1 -->

              <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                <div class="p-5 shadow-sm rounded-md bg-white m-4">
                  <p class="mt-2 text-justify text-gray-700 text-lg">
                    2. Biswas, R., Arya, K., Fernandes, V., & Shah, T. (2021). Find A Loo: an app for sanitation governance. Information Communication and Society, 24(11), 1586-1602.  <a href="https://doi.org/10.1080/1369118X.2020.1716038" class="text-xl font-medium text-indigo-500">View Paper</a>
                  </p>
                </div>
              </div>
          
         
            <!-- conf 2 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  3.  Bhat, M., Mahto, G., Kesaria, S, Fernandes, V., & Arya, K., Real time gesture control UAV with a low resource framework, 2021 International Symposium of Asian Control Association on Intelligent Robotics and Industrial Automation (IRIA), 2021, IIT Goa.
                </p>
              </div>
            </div> 

            <!-- conf 3 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  4. Mahangade, S., Gautam, A., Gupta, V., Madan, R., & Arya., K., An experimental comparison of visual SLAM systems, 2021 International Symposium of Asian Control Association on Intelligent Robotics and Industrial Automation (IRIA), 2021, IIT Goa.
                </p>
                
              </div>
            </div> 

            <!-- journal 2-->
              <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                <div class="p-5 shadow-sm rounded-md bg-white m-4">
                  <p class="mt-2 text-justify text-gray-700 text-lg">
                    5.  Biswas, R., Arya, K., & Deshpande, S. (2020). More toilet infrastructures do not nullify open defecation: a perspective from squatter settlements in megacity Mumbai. Applied Water Science, 10, 96.  <a href="https://doi.org/10.1007/s13201-020-1169-4" class="text-xl font-medium text-indigo-500">View Paper</a>
                  </p>
                </div>
              </div> 

            <!-- conf 4 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  6. Panwar, A., Chauhan, A., & Arya, K. (2020). Analyzing Learning Outcomes for a Massive Online Competition through a Project-Based Learning Engagement. 2020 IEEE Global Engineering Education Conference (EDUCON), 1246–1251. <a href="https://doi.org/10.1109/EDUCON45650.2020.9125379" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
                
              </div>
            </div> 

            <!-- conf 5 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  7.  Sarkar, A., & Arya, K. (2020). Teaching Marker-based Augmented Reality in a PBL Based Online Robotics Competition. 2020 IEEE 20th International Conference on Advanced Learning Technologies (ICALT), 338–340. 
                  <a href="https://doi.org/10.1109/ICALT49669.2020.00108" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>               
              </div>
            </div> 

            <!-- conf 6 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  8. Karthik P., Kumar K. Fernandes V., & Arya K. (2020). Reinforcement Learning for Altitude Hold and Path Planning in a Quadcopter. 2020 6th International Conference on Control, Automation and Robotics (ICCAR), 463–467. <a href="https://doi.org/10.1109/ICCAR49639.2020.9108104" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div> 

            <!-- conf 7 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  9. Pocker, F., Madan, R., & Arya, K. (2020). Learning autonomous path planning and navigation of nano-drone in a PBL focused online robotics competition. EpiSTEME8.
                </p>
              </div>
            </div>

            <!-- conf 8 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  10. Biswas, R., & Arya, K. (2020). A Decision-Support Work-book for Choosing a Sanitation Technology. International Conference on Urban Science and Engineering (ICUSE) 2020.
                </p>
              </div>
            </div>

            <!-- journal 3 -->
              <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
                <div class="p-5 shadow-sm rounded-md bg-white m-4">
                  <p class="mt-2 text-justify text-gray-700 text-lg">
                    11.  Biswas, Rathin, Jana, A., Arya, K., & Ramamritham, K. (2019). A Good-Governance Framework for Urban Management. Journal of Urban Management, 8(2), 225–236.  <a href="https://doi.org/10.1016/j.jum.2018.12.009" class="text-xl font-medium text-indigo-500">View Paper</a>
                  </p>
                </div>
              </div>

            <!-- conf 9 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  12.  Ekatpure, R., Jadhav, S., Karia, K., & Arya, K. (2019). Musical Mimicry to Learn Audio Processing. 2019 IEEE Tenth International Conference on Technology for Education (T4E), 214–217.<a href="https://doi.org/10.1109/T4E.2019.00048" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- conf 10 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  13. Sabanwar, V., & Arya, K. (2019). Motivation as Basis for Building Infrastructure for Hardware MOOCs. 2019 IEEE International Conference on Engineering, Technology and Education (TALE), 1–6.<a href="https://doi.org/10.1109/TALE48000.2019.9226020" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- conf 11 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  14. Belapurkar, G., Chauhan, A., Panwar, A., Fernandes, V., & Arya, K. (2019). Automated Theme Allotment to Optimise Learning Outcomes in Robotic Competition. 2019 IEEE International Conference on Engineering, Technology and Education (TALE), 1–6.<a href="https://doi.org/10.1109/TALE48000.2019.9225870" class="text-xl font-medium text-indigo-500"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- journal 4 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  15.  BISWAS, R., ARYA, K., & Deshpande, S. (2018). Sanitation planning for squatter settlements as urban water management in Mumbai. Urban Water Journal, 15(05), 470–478.  <a href="https://doi.org/10.1080/1573062X.2018.1509100" class="text-xl font-medium text-indigo-500">View Paper</a>
                </p>
              </div>
            </div> 

            <!-- conf 12 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                 16. Karia, K., Bessariya, R., Lala, K., & Arya, K. (2018). Learning while Competing-3D Modeling & Design. 2018 IEEE Tenth International Conference on Technology for Education (T4E), 93–96.<a href="https://doi.org/10.1109/T4E.2018.00026" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- conf 13 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  17. Biswas, Rathin, Arya, K., & Deshpande, S. (2018). Root-cause behind poor public-sanitation: A case of developing country. Elsevier Urban Transition 2018, Sitges, Barcelona, Spain
                </p>
              </div>
            </div>

            <!-- conf 14 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  18. Biswas, Rathin, & Arya, K. (2018). Addressing sanitation issues through IoT based platform. International Water Association (IWA) Reuse 2018, Phuket.
                </p>
              </div>
            </div>

            <!-- conf 15 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  19. Biswas, R., Arya, K. & Deshpande, S., (2017) Deriving pragmatic factors behind geo-spatial variation of public sanitation relating to health: A case from a mega-city in lower-middle income developing country, American Geophysical Union (AGU) Fall Meeting, AGU, 11-15 December 2017, New Orleans, United States of America. <a href="https://ui.adsabs.harvard.edu/#abs/2017AGUFM.H41E1499B/abstract" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- conf 16 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                 20. Biswas, R., Punamiya, K. Arya, K. & Lala, K., (2016) Powering from waste: a study of green energy in IIT Bombay Campus, India International Science Festival (IISF) - Young Scientists Conclave (YSC), Government of India - Ministry of Science & Technology and Earth Sciences, 8-11 December 2016, CSIR National Physical Laboratory, New Delhi, India
                </p>
              </div>
            </div> 

            <!-- conf 17 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  21. Krithivasan, S., Gupta, S., Shandilya, S., Arya, K., & Lala, K. (2016). Auto-Tagging for Massive Online Selection Tests: Machine Learning to the Rescue. In 2016 IEEE Eighth International Conference on Technology for Education (T4E) (pp. 204-207). IEEE. <a href="https://doi.org/10.1109/T4E.2016.050" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- conf 18 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  22. Krithivasan, S., Shandilya, S., Shakya, S., Arya, K., & Lala, K. (2016). Building Inclusiveness in a PBL Based Online Robotics Competition: Challenges and Outcomes. In 2016 International Conference on Learning and Teaching in Computing and Engineering (LaTICE) (pp. 9-13). IEEE. <a href="https://doi.org/10.1109/LaTiCE.2016.39" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- conf 19 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  23. Lala, K., Krithivasan, S., & Arya, K., (2015) e-Yantra Summer Internship Program (eYSIP): a Priceless Prize for Students, Student Driven Research for Inspired Learning in Science and Technology, 16 - 17 October 2015.
                </p>
              </div>
            </div>

            <!-- conf 20 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  24. Krithivasan, S., Shandilya, S., Lala, K., & Arya, K. (2014). Massive Project Based Learning through a Competition: Impact of and Insights from the e-Yantra Robotics Competition (eYRC--2013). In 2014 IEEE Sixth International Conference on Technology for Education (pp. 156-163). IEEE.<a href="https://doi.org/10.1109/T4E.2014.13" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- conf 21 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">     
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  25. Krithivasan, S., Lala, K., Arya, K., Shandilya, S., Jain, S., Manavar, P., & Patii, S. (2014). e-yantra lab setup initiative: Sustainable knowledge creation and scalable infrastructure creation at engineering colleges. In 2014 IEEE Frontiers in Education Conference (FIE) Proceedings (pp. 1-8). IEEE. 
                  <a href="https://doi.org/10.1109/FIE.2014.7044455" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>

            <!-- conf 22 -->
            <div class="flex-1 mx-4 lg:mx-0 transition duration-500 ease-in-out hover: transform hover:-translate-y-1 hover:scale-110">
              <div class="p-5 shadow-sm rounded-md bg-white m-4">
                <p class="mt-2 text-justify text-gray-700 text-lg">
                  26. Krithivasan, S., Shandilya, S., Arya, K., Lala, K., Manavar, P., Patii, S., & Jain, S. (2014). Learning by competing and competing by learning: experience from the e-yantra robotics competition. In 2014 IEEE Frontiers in Education Conference (FIE) Proceedings (pp. 1-8). IEEE.<a href="https://doi.org/10.1109/FIE.2014.7044136" class="text-xl font-medium text-indigo-500" target="_blank"> View Paper</a>
                </p>
              </div>
            </div>
            </div>
          <!-- </div> -->

          
          

            <hr class="border-b-2 border-gray-700 mt-8">

            <div class="w-full px-4 text-center">
              <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">Working Papers</h1>
            </div>

              <!-- working paper 1 -->
              <div class="flex-1 mx-4 lg:mx-0 mt-8">
                <div class="p-5 shadow-sm rounded-md bg-white m-4">
                  <p class="mt-2 text-justify text-gray-700 text-lg">
                    1. Chatterjee, O., Waikar, A., Kumar, V., Ramakrishnan, G., & Arya, K. A Weakly Supervised Model for Solving Math word Problems<br>
                    2. Biswas, R., Sabanwar, V., & Arya, K., The nexus between work and stress among young academics.</br>
                    3. Sabanwar, V., Pandey, A., Biswas, R., & Arya, K., Easy or Difficult! The Art of Keeping MOOCs Challenging Yet Simple.</br>
                    4.  Biswas, R., VishnuRadhan, R., Arya, K., Harpude, A., Jaiswal, K. & Ramamritham, K., Low cost, environmental friendly e-sanitation infrastructure for urban agglomerations. </br>
                    5. Biswas, R., Arya, S., & Arya, K., A scientific rationale-based framework to measure ‘the risk of covid-19 exposure’ through self-assessment.</br>
                    6. Manjrekar, O., Biswas, R., Agrawal, A., Barandwal, N., Gupta, A., Chaudhari, P., Mishra, S., Anavardekar, K., Fernandes, V. & Arya., K, A comprehensive easy-to-use application to fight communicable disease like COVID-19.</br>  
                    7. Nayek, A., Vermora, P., Hruthwik, K., Dubey, A., Pandey, A., & Arya, K., Self-balancing cycle bot using reaction wheel</br>
                    8. Jena, S., Ranade, G., Sharma, R., & Arya, K., Integrating Industry 4.0 in engineering education during a global pandemic: Approach and Learning Efficacy</br>
                    9. Narvekar, S., Gupta, V., Atar, S., Sadananda, A., Singh, S., & Arya, K., Learning Efficacy and Effect of Scaffolding in Online Engineering Education during COVID-19 Pandemic</br>
                    10. Sabanwar, V., Trimukhe, P., Gudla, A., Kamone, I., & Arya, K., The learning must go on: Our experience of keeping participants engaged in an online robotics competition during COVID-19 lockdown</br>
                    11. Sarkar, A., Karia, K., Kumar, A., Furtado, A., Pandey, A., & Arya, K., Can complex skills be taught at scale using existing resources in diverse environments under pandemic conditions?</br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@stop


<!-- <script type="text/javascript">
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
</script> -->