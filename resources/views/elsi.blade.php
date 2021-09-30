@extends('layout.main')
@section('content')
     <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="flex flex-wrap justify-center" id="tabs-id">
          <div class="w-full lg:w-6/12 px-4">
            <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">eLSI Family of Colleges</h1>
          </div>
          <div class="px-4 py-6 rounded-md lg:text-xl md:text-lg text-gray-700 lg:ml-24 lg:mr-24">
            <p class="font-bold"># What is e-Yantra Lab Set-up Initiative (eLSI) ?</p><br>
            <p>
              eLSI is an  initiative to establish  a culture of “Project Based Learning” through an e-Yantra Lab embedded in a college. We do this by training teachers and students through various e-Yantra initiatives  in technology skills and in using these skills to solve real problems using technology. <br>
            </p>
            <p> We have established robotics labs in 425+ colleges across India & Bhutan. We train a team of teachers and students from a college in Embedded Systems theory, Microcontroller programming, Software Foundation, Innovation & Entrepreneurship, etc. The teachers and students are trained to implement experiments through online MOOCs over a period of 2-3 months. At the end of the training, the participants are able to build embedded systems applications to solve practical problems.<br><br>
            We complement the existing higher education system by bringing a project based component into engineering education - i.e. “learn by doing” by training students in practical skills through competitions that last 2-6 months. These are e-Yantra Robotics Competition (eYRC) that trains in skills, e-Yantra Innovation Challenge (eYIC) that trains in the use of these skills to solve real problems and other initiatives such as Hackathons and Sprints that test their newly acquired skills.
            <p class="font-bold mt-4 text-lg">Benifits of having eLSI lab</p>
            <ul class="list-disc leading-loose m-6">
                  <li>Training of teachers and students through hands-on MOOCs</li>
                  <li>One free robotic kit (if not given already in previous workshop)</li>
                  <li>Special pricing category for all value added courses/events for its students and teachers - Typical 10% discount in eYRC, eYIC, etc.</li>
                  <li>Access to e-Yantra Resource Development Center (eYRDC) portal - Resources such as Lesson plans, Tutorials, Lectures, Generic projects, etc. which can help teachers to utilize the eLSI Lab in an effective manner</li>
                  <li>Access to other initiatives such as e-Yantra Farm Setup Initiative (eFSI) - The project develops know-how for setting up an automated agriculture project using the Internet of Things (IoT)
                  And many other value added benefits such as technical talks, MOOCs, etc.</li>
                  <li>Opportunities to take yearly subscription for free MOOCs*</li>
                  <li>Opportunities to avail free hardware kits every year*</li>
                </ul>
            </p>

            <p class="font-bold mt-4 text-center">For More Information on eLSI and to be a part of eLSI:
              <a href="http://elsi.e-yantra.org/registration/knowMoreAboutElsi" target="_blank" class="bg-blue-400 rounded-md p-2">
                Click Me!!
              </a>
            </p>
          </div>

         <div class="container mt-16 py-4 lg:w-2/3 md:6/12 mt-8 rounded mx-auto bg-white lg:text-xl md:text-lg text-gray-700">
            <div class="mt-8 px-8">
              <h2 class="text-xl text-center text-gray-700">Check our eLSI family</h2>
              <hr class="my-2">
              <form>
                <div class="form-group">
                  <label for="country" class="text-gray-700">Country</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="country-dropdown">
                  <option value="">Select Country</option>
                  @foreach ($countries as $country) 
                  <option value="{{$country->country_name}}">
                  {{$country->country_name}}
                  </option>
                  @endforeach
                  </select>
                </div>
                <div class="text-gray-700 mt-4">
                  <label for="state">State</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="state-dropdown">
                    <option value="">Select State</option>
                  </select>
                </div>   
                <div id="nolab" class="text-gray-700 mt-4"> 
                  <p>No lab available at present in above selected state.</p>
                </div>                    
                <div>
                 <div id="elsi_table" class="hidden row">
                  <div class="mt-4">
                    
                    <table id="lab_list" class="table-auto border-separate border border-gray-800 w-full"></table>
                  </div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
  <!--   </div> -->
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  document.getElementById("nolab").style.display = "none";
$('#country-dropdown').on('change', function() {
  $("#elsi_table").removeClass('show').addClass('hidden');
var country_name = this.value;
$("#state-dropdown").html('');
$.ajax({
url:"{{url('getstates')}}",
type: "POST",
data: {
country_name: country_name,
_token: '{{csrf_token()}}' 
},
dataType : 'json',
success: function(result){
$('#state-dropdown').html('<option value="">Select State</option>'); 
$.each(result.states,function(key,value){
$("#state-dropdown").append('<option value="'+value.state_name+'">'+value.state_name+'</option>');
});
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown').on('change', function() {

var state_name = this.value;
// $("#city-dropdown").html('');
$.ajax({
        url:"{{url('elsi_colleges')}}",
        type: "POST",
        data: {
          state_name: state_name,
          _token: '{{csrf_token()}}' 
        },
        dataType : 'json',
      }).done(function(data) {
      if(!data.error){
        $("#elsi_table").removeClass('show').addClass('hidden');
        $("#lab_list").empty();
        
        if(data.lab_list.length >= 1){
          $("#elsi_table").removeClass('hidden').addClass('show');
         document.getElementById("nolab").style.display = "none";
          $('#lab_list').append('<thead>\
            <tr>\
              <th class="border border-gray-600 p-2">S. No.</th>\
              <th class="border border-gray-600 p-2">College Name</th>\
              <th class="border border-gray-600 p-2">Pincode</th>\
            </tr>\
          </thead>');

          var html = '';

          for(var i = 0; i < data.lab_list.length; i++)
          {

            if(data.lab_list[i].college_name != null)
            {
              html += '<tr class="border border-gray-600 p-2">'

              html += '<td class="border border-gray-600 p-2 text-center">'+parseInt(i+1)+'</td>'

              html += '<td class="border border-gray-600 p-2">'+data.lab_list[i].college_name+'</td>'
              html += '<td class="border border-gray-600 p-2 text-center">'+data.lab_list[i].pincode+'</td>'
             }
          }//end for
          $('#lab_list').append(html);
        }//end of first if
        else
        {
          {
              document.getElementById("nolab").style.display = "block";
            }
        }
     
    }
    });

});
});
</script>


