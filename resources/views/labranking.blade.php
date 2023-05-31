@extends('layout.main')
@section('content')
     <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="flex flex-wrap justify-center" id="tabs-id">
          <div class="w-full lg:w-6/12 px-4">
            <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800">eLSI - Lab Ranking Page</h1>
          </div>
         

         <div class="container mt-16 py-4 lg:w-2/3 md:6/12 mt-8 rounded mx-auto bg-white lg:text-xl md:text-lg text-gray-700">
            <div class="mt-8 px-2 lg:px-8">
              <h2 class="text-xl text-center text-gray-700">Check your College e-Yantra Lab Rank</h2>
              <hr class="my-2">
              <form>
                <div class="form-group">
                  <label for="state" class="text-gray-700">State</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="state-dropdown">
                  <option value="">Select State</option>
                  @foreach ($states as $state) 
                  <option value="{{$state->state}}">
                  {{$state->state}}
                  </option>
                  @endforeach
                  </select>
                </div>
                <div class="text-gray-700 mt-4">
                  <label for="college_name">College Name</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="college-dropdown">
                    <option value="">Select College Name</option>
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
$('#state-dropdown').on('change', function() {
  $("#elsi_table").removeClass('show').addClass('hidden');
var state = this.value;
$("#college-dropdown").html('');
$.ajax({
url:"{{url('getStateLab')}}",
type: "POST",
data: {
state: state,
_token: '{{csrf_token()}}' 
},
dataType : 'json',
success: function(result){
$('#college-dropdown').html('<option value="">Select College Name</option>'); 
$.each(result.college_name,function(key,value){
$("#college-dropdown").append('<option value="'+value.college_name+'">'+value.college_name+'</option>');
});
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#college-dropdown').on('change', function() {

var college_name = this.value;
// $("#city-dropdown").html('');
$.ajax({
        url:"{{url('elsi_labranking')}}",
        type: "POST",
        data: {
          college_name: college_name,
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
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">College Name</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Rank</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Grade</th>\
            </tr>\
          </thead>');

          var html = '';

          for(var i = 0; i < data.lab_list.length; i++)
          {

            if(data.lab_list[i].college_name != null)
            {
              html += '<tr class="border border-gray-600 p-2">'
              html += '<td class="border border-gray-600 p-2">'+data.lab_list[i].college_name+'</td>'
              html += '<td class="border text-center border-gray-600 p-2">'+data.lab_list[i].rank+'</td>'
              html += '<td class="border border-gray-600 p-2 text-center">'+data.lab_list[i].grade+'</td>'
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


