<style>
    html, body {
    margin: 0px;
    padding: 0px;
}

.carousel {
    position: relative;
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
</style>


<div class="carousel">
    <div class="carousel-inner">
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item">
                      <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">Testimonials</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <div class="bg-white my-12 pb-6 w-full justify-center items-center overflow-hidden md:max-w-4xl rounded-lg shadow-sm mx-auto border-2 border-red-600 transition duration-500 ease-in-out hover:bg-grey-200 transform hover:-translate-y-1 hover:scale-110">
                <div class="relative h-28 bg-red-100 text-2xl text-center text-gray-800">
                    <p class="text-2xl text-gray-800 text-center">
                      Chetan Bhat
                    </p>
                    <p class="text-sm text-gray-600 text-center">
                      eYSIP 2020 Intern, <br> eYRC- 2019-2020
                    </p>
                </div>
                <div class="mt-16">
                  <p class="text-center text-gray-600 px-8 mt-3 text-justify">
                    “There's a small story behind our team photo that is posted on e-Yantra's social media platforms(The SR theme winners photo). After setting up the beacon LEDs and making all the connections, we crossed our fingers and gave the power supply. But it didn't work the way it was intended to work. We got really worried because, if there would have been a problem with the LED or the power supply, we would have had to replace it, which meant losing valuable time. One of my teammates noticed that we had given a jumper wire as the 5V supply wire, and he said "Let's try by using a thick wire for the supply". Hence, we changed the wire, crossed our fingers, and again gave the connection. Voila! It worked. We had studied that wires offer resistance but had never seen it in action. We were so happy when it worked that we wore the LEDs around our necks and took that photo.”</p>
                </div>
                </div>
                </div>
        </div>
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
                       <div class="container max-w-7xl mx-auto m-4">
                    <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">Testimonials</h1>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <div class="bg-white my-12 pb-6 w-full justify-center items-center overflow-hidden md:max-w-4xl rounded-lg shadow-sm mx-auto border-2 border-red-600 transition duration-500 ease-in-out hover:bg-grey-200 transform hover:-translate-y-1 hover:scale-110">
                <div class="relative h-28 bg-red-100 text-2xl text-center text-gray-800">
                    <p class="text-2xl text-gray-800 text-center">
                      Heethesh Vhavle
                    </p>
                    <p class="text-sm text-gray-600 text-center">
                      eYSIP 2017 Intern,<br>eYRC- 2014 & 2016 (1st Place), <br>eYRC- 2015 (3rd Place)
                    </p>
                </div>
                <div class="mt-16">
                  <p class="text-center text-gray-600 px-8 mt-3 text-justify">
                    “I recently graduated with a Master’s degree in Robotic Systems from Carnegie Mellon University and I’m currently working on solving perception and SLAM problems for self-driving vehicles in the Bay Area. These are some of the core problems in robotics to solve to enable future AR/VR, home robotics, and autonomous vehicle technologies. I'm extremely grateful to have been introduced to e-Yantra right from the start of my first semester as an undergraduate student, which exposed me to robotics and computer vision.<br> I strongly believe that my experience and learning from e-Yantra played a major role in shaping my career path. I still remember the times when I was excited to work on every new task that was released in eYRC. I highly appreciate all of the e-Yantra initiatives led by the team and hope it continues to grow and inspire more students over the years to come!”</p>
                </div>
                </div>
                </div>
        </div>

        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
            <div class="container max-w-7xl mx-auto m-4">
                <h1 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800">Testimonials</h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="bg-white my-12 pb-6 w-full justify-center items-center overflow-hidden md:max-w-4xl rounded-lg shadow-sm mx-auto border-2 border-red-600 transition duration-500 ease-in-out hover:bg-grey-200 transform hover:-translate-y-1 hover:scale-110">
                    <div class="relative h-28 bg-red-100 text-2xl text-center text-gray-800">
                        <p class="text-2xl text-gray-800 text-center">
                          Aayushi Gautam
                        </p>
                        <p class="text-sm text-gray-600 text-center">
                          eYSIP 2020 Intern, <br> eYRC- 2019-2020
                        </p>
                    </div>
                    <div class="mt-16">
                      <p class="text-center text-gray-600 px-8 mt-3 text-justify">
                        “The story starts from the month of September when one of our college professors called us and ordered us..yes 'ordered us' to take part in eYRC. He told us that till then no team from our college had reached finals
                        or even till stage 2 for that matter. Thus, there was huge responsibility on our shoulders.We registered for eYRC and appeared for the test. The results were announced and we were alloted the theme 'Survey and Rescue'<br>
                        We were all pumped up and worked really hard. Through those stages we saw a boost in our confidence.We started working for our final task and scored quite well but thought that the score would not suffice to qualify to the finals.
                        Quite dejected, we sat there when suddenly a mail popped! It read,
                        "It is our pleasure to inform you that you have been shortlisted for the e-Yantra Summer Internship Program (eYSIP-2020)" and three of us were ecstatic. This internship is a very precious gift to us from eYRC.”</p>
                    </div>
                </div>
            </div>
        </div>
        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
        <label for="carousel-2" class="carousel-control next control-1">›</label>
        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
        <label for="carousel-3" class="carousel-control next control-2">›</label>
        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
        <label for="carousel-1" class="carousel-control next control-3">›</label>
        <ol class="carousel-indicators">
            <li>
                <label for="carousel-1" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-2" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-3" class="carousel-bullet">•</label>
            </li>
        </ol>
    </div>
</div>