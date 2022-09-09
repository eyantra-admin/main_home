@extends('layout.main')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
<!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
 -->
@section('content')
 
  <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
<div class="container mt-16 py-4 lg:w-2/3 md:6/12 mt-8 rounded mx-auto bg-white lg:text-xl md:text-lg text-gray-700">

            @if (count($errors) > 0)
            <div class="p-4 bg-red-200 m-4 rounded-md">
          <strong>Whoops!</strong> There were some problems with your input.<br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
              </ul>
           </div>
          @endif

          @if (session('error'))  
            <div class="bg-red-300 m-4 p-4 rounded-md">{{ session('error') }}</div>
          @endif
          @if (session('success'))  
            <div class="bg-green-300 m-4 p-4 rounded-md">{{ session('success') }}</div>
          @endif

            <div class="mt-8 px-2 lg:px-8">
              <h2 class="text-xl text-center text-gray-700">"History in 3D"<br>e-Yantra Two-Day Workshop on Blender, Photogrammetry and Handling History<span style="color: #EF4444;">Registration Form</span></h2>
              <hr class="my-2">
              <p class="text-lg" style="padding-bottom: 20px; text-align: center;">Submit the registration form to be a part of the Grand Event!</p>
              <form id="msform" method="POST" action="/school_records">
                @csrf
               <p class="py-8 font-bold">School Details</p>
                <div class="form-group">
                  <label for="country" class="text-gray-700">Country</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="country-dropdown" name="country">
                  <option value="">Select Country</option>
                  @foreach ($countries as $country)
                  <option {{ ($country->country) == 'India' ? 'selected' : '' }}  value="{{$country->country}}">
                  {{$country->country}}</option>
                  @endforeach
                  </select>
                </div>
                <!-- <div class="text-gray-700 mt-4">
                  <label for="state">State</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="state-dropdown" name="state">
                    <option value="">Select State</option>
                  </select>
                </div> <br/> -->
                
                <!-- Dropdown Status -->
             <!--    <div class="text-gray-700 mt-4">
                  <label for="school_type">Type of Insititute</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="school-type" name="school_type">
                    <option value="0">Select Type</option>
                    <option value="1">K12 / School</option>
                    <option value="2">College/Institute/University</option>
                  </select>
                </div> <br/> -->

                <!-- Hide/show School or College -->
                <!-- <div class="text-gray-700 mt-4" id="school_name">
                  <label for="school_name">School Name</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="school-dropdown" name="school_name">
                    <option value="">Select School Name</option>
                  </select>
                </div> <br/>
                <div class="text-gray-700 mt-4" id="college_name">
                  <label for="college_name">College Name</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="college-dropdown" name="college_name">
                    <option value="">Select College Name</option>
                  </select>
                </div> <br/> -->
                <!-- Hide/Show ends -->
<!-- 
                <div class="bg-blue-200 rounded-md px-4 py-2"> 
                If your school is not listed above, please fill the school details below -
                <a href="http://eyrc20.e-yantra.org/add-college" target="_blank" class="bg-red-200 text-sm rounded-md p-2 hover:bg-red-400 font-bold text-red-900">Add School</a>
                </div>
                 -->
                <div class="w-full mt-4 mb-6 md:mb-0">
                  <label class="block tracking-wide text-gray-700  mb-2" for="grid-first-name" class="validate">
                    School/College/Organization Name
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="school_name" type="text" placeholder="School/College Name">
<!--                   <p class="text-red-500 text-xs italic">Please fill out this field.</p>
 -->             </div>

                <p class="py-8 font-bold">Contact Details</p>
                <!-- Personal Information -->
                <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" class="validate">
                    Name
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="first_name" type="text" placeholder="First Name">
<!--                   <p class="text-red-500 text-xs italic">Please fill out this field.</p>
 -->                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email" class="validate">
                    Email ID
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-email" name="email" type="text" class="validate" placeholder="Enter email id.">
<!--                   <p class="text-red-500 text-xs italic">Please fill out this field.</p>
 -->                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                
              </div>
              <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-designation" class="validate">
                    Designation
                  </label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="designation-dropdown" name="designation">
                  <option value="">Select Designation</option>
                  <option value="Teacher">Teacher</option>
                  <option value="Student">Student</option>
                  <option value="Parent">Parent</option>
                  <option value="Principal">Principal</option>
                  <option value="Other">Other</option>
                  </select>
<!--                   <p class="text-red-500 text-xs italic">Please fill out this field.</p>
 -->                </div>
 <div class="w-full md:w-1/2 px-3">
                  <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-contact">
                    Contact Number
                  </label>
                  <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-contact" type="text" name="contact" placeholder="Enter Contact Number">
                </div>
              </div>  
              
                <div class="row">
                  <div class="col s12 text-center">
                    <input type ="submit" class ="bg-red-300 rounded-md px-4 py-2 border-2 border-red-500 hover:bg-red-500 font-bold text-red-900" value = "Submit"/>
                  </div>
                </div>
                
      </div>
    </form> 
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  /*Hide the college and school before*/
  $('#college_name').hide();
  $('#school_name').hide();
  //dosomthing();
  country = $('#country-dropdown option:selected').val();
  if(country === "India"){
    getState(country);
  }
});

function getState(country){
  $.ajax({
    url:"{{url('getStateSchool')}}",
    type: "POST",
    data: {
    country: country,
    _token: '{{csrf_token()}}' 
    },
    dataType : 'json',
    success: function(result){
    $('#state-dropdown').html('<option value="">Select State</option>'); 
    $.each(result.state,function(key,value){
    $("#state-dropdown").append('<option value="'+value.id+'">'+value.state+'</option>');
    });
    }
  });
}

//select state
$('#country-dropdown').on('change', function() {
  country = this.value;
  getState(country);
});//end    

/*Select School Name*/
$('#state-dropdown').on('change', function() {
state = this.value;
$.ajax({
  url:"{{url('getSchoolName')}}",
  type: "POST",
  data: {
  state: state,
  _token: '{{csrf_token()}}' 
  },
  dataType : 'json',
  success: function(result){
    console.log(result)
    $('#school-dropdown').html('<option value="">Select School Name</option>'); 
    $.each(result.school,function(key,value){
      $("#school-dropdown").append('<option value="'+value.school_name+'">'+value.school_name+'</option>');
    });
    $('#college-dropdown').html('<option value="">Select College Name</option>'); 
    $.each(result.college,function(key,value){
      $("#college-dropdown").append('<option value="'+value.college_name+'">'+value.college_name+'</option>');
    });
  }
});
});//end  

/*Type Change*/
$('#school-type').on('change', function() {
$('#college_name').hide();
$('#school_name').hide();

if (this.value == 1)
  $('#school_name').show();
else if(this.value == 2)
  $('#college_name').show();


});


</script>