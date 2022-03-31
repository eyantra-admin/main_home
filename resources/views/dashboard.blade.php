@extends('layout.main')
@section('content')
<div class="mt-24">
    <div class name="header">
        <!-- Tabs -->
      <ul id="tabs" class="inline-flex pt-4 px-2 w-full border-b text-xl bg-red-200">
          
          <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first">Play Games</a></li>
          
          
      </ul>
    </div>
        

    <div class="rounded border border-green-200 container mx-auto mt-4">
      
      <!-- Tab Contents -->
      <div id="tab-contents">
       
        
        <div id="first" >
         <div class="bg-blue-100 py-4 text-xl px-4 border-l-4 border-blue-400 flex place-content-between rounded-r-md">
                <p>
                  <b>For Linux and macOS users:</b>: <br>
                    Please follow these steps if you are unable to run the game, <br>

                    <b>1:</b> Open the Terminal app in the folder where the game is downloaded.<br>
                    <b>2:</b> Run the command <b>chmod u+x {Filename}</b><br>
                    <b>3:</b> Start the game using the command <b>./{Filename)</b><br>
                  </p>
                
            </div>
         <div class="container">
            <div class="container mx-auto p-6 grid grid-cols-3 gap-6">

                @foreach($games as $gaming)
                    <div class="col-span-1 flex flex-col bg-green-200 border-2 p-4 rounded-md">
                        <h2 class="mb-2 font-bold text-xl text-green-800 text-center">
                          Team ID: {{$gaming->team_id}} - {{$gaming->game_name}}
                        </h2>
                        <div class="border-b-2 border-green-400 mx-4"></div>
                        <img
                          src="{{$gaming->screenshot}}"
                          alt="image"
                          class="w-full"
                        />                        
                        <div class="mb-4 flex flex-wrap text-center">
                            @if($gaming->win_download)
                            <a
                             href="{{$gaming->win_download}}"
                             class="
                             inline-block
                             border border-black
                             text-base text-body-color
                             font-medium
                             hover:border-primary hover:bg-primary hover:text-white
                             transition
                             "
                            >
                                <img
                                  src="/img/windows.png"
                                  alt="image"
                                  class="h-12 w-12"
                                />
                            </a>
                            @endif
                            @if($gaming->linux_download)
                            <a
                                 href="{{$gaming->linux_download}}"
                                 class="
                                 inline-block
                                 border border-black
                                 text-base text-body-color
                                 font-medium
                                 hover:border-primary hover:bg-primary hover:text-white
                                 transition
                                 "
                            >
                              <img
                              src="/img/linux.png"
                              alt="image"
                              class="h-12 w-12"
                              />
                            </a>
                            @endif
                            @if($gaming->mac_download)
                            <a
                             href="{{$gaming->mac_download}}"
                             class="
                             inline-block
                             border border-black
                             text-base text-body-color
                             font-medium
                             hover:border-primary hover:bg-primary hover:text-white
                             transition
                             "
                            >
                              <img
                              src="/img/mac.png"
                              alt="image"
                              class="h-12 w-12"
                              />
                            </a>
                            @endif
                        </div>
                        
                    </div>
                @endforeach                
            </div>          
        </div>
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
