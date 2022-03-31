@extends('layout.main')
@section('content')
  <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="flex flex-wrap justify-center" id="tabs-id">
          <div class="w-full lg:w-6/12 px-4">
            <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800"> e-Yantra Summer Internship Program</h1>
          </div>
          <div class="px-4 py-6 rounded-md lg:text-xl sm:text-sm text-gray-700 lg:ml-24 lg:mr-24">
            <p>
              The aim of the e-Yantra Summer Internship Program (eYSIP) is to provide winners of the e-Yantra Robotics Competition: <br>

              <p class="font-bold mt-4 lg:text-lg sm:text-sm">What is eYSIP ?</p>
              <ul class="list-disc leading-loose m-6">
                <li>a platform with facilities and guidance to work on projects covering the varied spectrum of web-development, image processing and embedded systems.</li>
                <li>a chance to experience a research environment and put on their thinking hats.</li>
                <li>an opportunity to mold themselves into confident individuals through talks by experts, exploratory trips to nearby historical places, and interactions with eminent personalities.</li>
              </ul>
            </p>
          </div>

          <div class="container mt-8 py-4 lg:w-2/3 md:6/12 mt-8 rounded mx-auto bg-white lg:text-xl md:text-lg text-gray-700">
            <div class="mt-8 px-8">
              <h2 class="lg:text-xl sm:text-lg text-center text-gray-700">Learn more about eYSIP</h2>
              <hr class="my-2">
                <div>
                  <hr class="my-4">
                    <h2 class="text-xl text-center text-gray-700"><i class="fas fa-file-chart-column"></i> &nbsp; Year wise list of projects undertaken</h2>
                  <hr class="my-4">

                  <label for="country" class="text-gray-700">Year</label>
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="year-dropdown">
                  <option value="">Select Year</option>
                  @foreach ($year as $year) 
                  <option value="{{$year->year}}">
                  {{$year->year}}
                  </option>
                  @endforeach
                  </select>
                </div>

                <!-- PROJECTS TABLE -->
                <div>
                  <div id="theme_table" class="hidden row">
                    <div class="mt-4">
                      <table id="project_list" class="table-auto border-separate border border-gray-800 w-full"></table>
                    </div>
                  </div>
                </div>
              <!-- STATS TABLE -->
                <div>
                  <div id="stats_table" class="hidden row">
                    <hr class="my-4">
                    <h2 class="lg:text-xl text-lg text-center text-gray-700"><i class="fas fa-file-chart-column"></i> &nbsp; Statistics</h2>
                    <hr class="my-4">

                    <div class="mt-4">
                      <table id="stats_list" class="table-auto border-separate border border-gray-800 lg:w-full"></table>
                    </div>
                  </div>
                </div>

                <!-- Winners TABLE -->
                <!-- <div>
                  <div id="winners_table" class="hidden row">
                    <hr class="my-4">
                    <h2 class="lg:text-xl text-lg text-center text-gray-700"><i class="fas fa-trophy"></i> &nbsp; Winners</h2>
                    <hr class="my-4">

                    <div class="mt-4">
                      <table id="winners_list" class="table-auto border-separate border border-gray-800 lg:w-full"></table>
                    </div>
                  </div>
                </div> -->
            </div>
          </div>
        </div>
  </section>
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
$('#year-dropdown').on('change', function() {
var year = this.value;
$.ajax({
        url:"{{url('eysip_yearwise')}}",
        type: "POST",
        data: {
          year: year,
          _token: '{{csrf_token()}}' 
        },
        dataType : 'json',
      }).done(function(data) {
      if(!data.error)
      {
        //-----------theme names-----------
        $("#theme_table").removeClass('show').addClass('hidden');
        $("#project_list").empty();
        if(data.project_list.length >= 1)
        {
          $("#theme_table").removeClass('hidden').addClass('show');
          $('#project_list').append('<thead>\
            <tr>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Sr No.</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Project</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Interns</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Mentors</th>\
            </tr>\
          </thead>');

          var html = '';
          for(var i = 0; i < data.project_list.length; i++)
          {
            if(data.project_list[i].project_name != null)
            {
              html += '<tr class="border border-gray-600 p-2">'

              html += '<td class="border border-gray-600 p-2 text-center">'+parseInt(i+1)+'</td>'

              html += '<td class="border border-gray-600 p-2 text-center">'+data.project_list[i].project_name+'</td>'
              
              html += '<td class="border border-gray-600 p-2 text-center">'+data.project_list[i].interns+'</td>'
              html += '<td class="border border-gray-600 p-2 text-center">'+data.project_list[i].mentors+'</td>'
             }
          }//end for
          $('#project_list').append(html);
        }//end of data length if
        //-----------End theme names-----------

      }//end of data error if
    });
});
});
</script>