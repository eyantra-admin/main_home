@extends('layout.events')
@section('content')
<div class="mt-32">
        

    <div class="rounded border border-green-200 container mx-auto mt-4">
      <!-- Tabs -->
      <ul id="tabs" class="inline-flex pt-4 px-2 w-full border-b text-xl bg-green-400">
          <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first">Auditorium</a></li>
          <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Technical Exhibition</a></li>
          <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#third">Play Games</a></li>
      </ul>

      <!-- Tab Contents -->
      <div id="tab-contents">
        <div id="first" class="p-4">
          <!-- day 1 -->
          <div class="container mx-auto overflow-hidden mt-4">
            <div class="bg-green-200 py-4 text-xl px-4 border-l-4 border-green-900 flex place-content-between">
                <p><span class="font-bold">Day 1 - Friday, February 11th, 2022</span></p>
                <a href="#" class="bg-blue-400 rounded-md text-md py-2 px-4">Join Us!</a>
            </div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">02:00 - 02:15 PM</time> <span class="pl-4">Inauguration of the event</span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">02:15 - 03:25 PM</time> <span class="pl-4">Judges Interaction (4 Teams)</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">03:25 - 03:50 PM</time> <span class="pl-4">Keynote Prof. Ian Page - "How Technology could contact Children at School?"</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">03:50 - 04:15 PM</time> <span class="pl-4">Panel Discussion</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>
            
            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">03:50 - 04:15 PM</time> <span class="pl-4">Panel Discussion</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">04:15 - 04:40 PM</time> <span class="pl-4">Talk Prof. Shilpa Ranade - "Creating Content For, With and About Children!"</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">04:40 - 05:05 PM</time> <span class="pl-4">Panel Discussion </span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">05:05 - 05:10 PM</time> <span class="pl-4">Vote of Thanks</span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>
          </div>

          <!-- day 2 -->
          <div class="container mx-auto overflow-hidden mt-4">
            <div class="bg-green-200 py-4 text-xl px-4 border-l-4 border-green-900 flex place-content-between">
                <span class="font-bold">Day 2 - Saturday, February 12th, 2022</span>
                <a href="#" class="bg-blue-400 rounded-md text-md py-2 px-4">Join Us!</a>
            </div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">02:00 - 02:05 PM</time> <span class="pl-4">Inauguration of the event</span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">02:00 - 02:05 PM</time> <span class="pl-4">Inauguration of the event</span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">02:00 - 02:05 PM</time> <span class="pl-4">Inauguration of the event</span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">02:00 - 02:05 PM</time> <span class="pl-4">Inauguration of the event</span></p>          
                
            </div>
          </div>
        </div>
        <div id="second" class="hidden p-4">
          <div class="container mx-auto overflow-hidden mt-4">
            <div class="bg-green-200 py-4 text-xl px-4 border-l-4 border-green-900 flex place-content-between">
                <p><span class="font-bold">Day 1 - Friday, February 11th, 2022</span></p>
                <a href="#" class="bg-blue-400 rounded-md text-md py-2 px-4">Join Us!</a>
            </div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">02:00 - 02:15 PM</time> <span class="pl-4">Inauguration of the event</span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">02:15 - 03:25 PM</time> <span class="pl-4">Judges Interaction (4 Teams)</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">03:25 - 03:50 PM</time> <span class="pl-4">Keynote Prof. Ian Page - "How Technology could contact Children at School?"</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">03:50 - 04:15 PM</time> <span class="pl-4">Panel Discussion</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>
            
            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">03:50 - 04:15 PM</time> <span class="pl-4">Panel Discussion</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">04:15 - 04:40 PM</time> <span class="pl-4">Talk Prof. Shilpa Ranade - "Creating Content For, With and About Children!"</span></p>              
               
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">04:40 - 05:05 PM</time> <span class="pl-4">Panel Discussion </span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>

            <div class="flex place-content-between text-lg mt-4 px-4">
                <p><time class="border-gray-500 pr-4 border-r-2">05:05 - 05:10 PM</time> <span class="pl-4">Vote of Thanks</span></p>              
                
            </div>
            <div class="border-b-2 border-gray-200 my-4"></div>
          </div>
        </div>
        <div id="third" class="hidden p-4">
          Third tab
        </div>        
      </div>
    </div>    
        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        let tabsContainer = document.querySelector("#tabs");

let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

console.log(tabTogglers);

tabTogglers.forEach(function(toggler) {
  toggler.addEventListener("click", function(e) {
    e.preventDefault();

    let tabName = this.getAttribute("href");

    let tabContents = document.querySelector("#tab-contents");

    for (let i = 0; i < tabContents.children.length; i++) {
      
      tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");  tabContents.children[i].classList.remove("hidden");
      if ("#" + tabContents.children[i].id === tabName) {
        continue;
      }
      tabContents.children[i].classList.add("hidden");
      
    }
    e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
  });
});
        
    </script>

@stop