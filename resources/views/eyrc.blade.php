@extends('layout.main')
@section('content')
  <section class="container-fluid px-6 py-4 mx-auto bg-cover items-center mt-4 ml-6 mr-6 bg-gray-200 md:pt-24 justify-center" data-aos="fade-up" data-aos-duration="1500">
        <div class="flex flex-wrap justify-center" id="tabs-id">
          <div class="w-full lg:w-6/12 px-4">
            <h1 class="w-full my-2 lg:text-4xl sm:text-xl mt-24 lg:mt-4  font-bold leading-tight text-center text-gray-800"> eYRC- e-Yantra Robotics Competition</h1>
          </div>
          <div class="px-4 py-6 rounded-md lg:text-xl sm:text-sm text-gray-700 lg:ml-24 lg:mr-24">
            <p>
              A unique robotics competition where participants “learn while they compete and compete while they learn.” The competition is a “hardware MOOC (Massive Online Open Course) available internationally. <br>

              <p class="font-bold mt-4 lg:text-lg sm:text-sm">What is eYRC ?</p>
              <ul class="list-disc leading-loose m-6">
                <li>A truly inclusive and international competition accommodating teams with varied level of skills from beginners to advanced teams.</li>
                <li>Our abstracted gamified problem statements (called Themes) range from a variety of skills including ROS, Machine Learning, Image Processing, 3D Designing, Embedded Systems, Functional Programming and much more.</li>
                <li>Conducted completely online over a period of 5-6 months in a “LEARNING while COMPETING” mode.</li>
                <li>An exceptional hands-on learning experience to complement and enhance your engineering curriculum.</li>
                <li>Work in team and learn “Collaboration” - a crucial 21st Century Skill</li>
                <li>Compete with International students</li>
              </ul>
            </p>
            
            <button class="bg-blue-200 rounded-md px-4 py-2">
                <a target="_blank" href="//portal.e-yantra.org">Visit eYRC Portal</a>
            </button>              
          </div>

          <div class="container mt-8 py-4 lg:w-2/3 md:6/12 mt-8 rounded mx-auto bg-white lg:text-xl md:text-lg text-gray-700">
            <div class="mt-8 px-8">
              <h2 class="lg:text-xl sm:text-lg text-center text-gray-700">Learn more about eYRC</h2>
              <hr class="my-2">
             

                <div>
                  <hr class="my-4">
                    <h2 class="text-xl text-center text-gray-700"><i class="fas fa-file-chart-column"></i> &nbsp; List of themes</h2>
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

                <!-- THEME TABLE -->
                <div>
                  <div id="theme_table" class="hidden row">
                    <div class="mt-4">
                      <table id="theme_list" class="table-auto border-separate border border-gray-800 w-full"></table>
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
                <div>
                  <div id="winners_table" class="hidden row">
                    <hr class="my-4">
                    <h2 class="lg:text-xl text-lg text-center text-gray-700"><i class="fas fa-trophy"></i> &nbsp; Winners</h2>
                    <hr class="my-4">

                    <div class="mt-4">
                      <table id="winners_list" class="table-auto border-separate border border-gray-800 lg:w-full"></table>
                    </div>
                  </div>
                </div>
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
        url:"{{url('stats_yearwise')}}",
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
        $("#theme_list").empty();
        if(data.theme_list.length >= 1)
        {
          $("#theme_table").removeClass('hidden').addClass('show');
          $('#theme_list').append('<thead>\
            <tr>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Sr No.</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Theme Name</th>\
            </tr>\
          </thead>');

          var html = '';
          for(var i = 0; i < data.theme_list.length; i++)
          {
            if(data.theme_list[i].theme_name != null)
            {
              html += '<tr class="border border-gray-600 p-2">'

              html += '<td class="border border-gray-600 p-2 text-center">'+parseInt(i+1)+'</td>'

              html += '<td class="border border-gray-600 p-2 text-center">'+data.theme_list[i].theme_name+'</td>'
             }
          }//end for
          $('#theme_list').append(html);
        }//end of data length if
        //-----------End theme names-----------
        //-----------Stats of themes-----------
        $("#stats_table").removeClass('show').addClass('hidden');
        $("#stats_list").empty();
        if(data.stats_list.length >= 1)
        {
          $("#stats_table").removeClass('hidden').addClass('show');
           $('#stats_list').append('<thead>\
            <tr>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Year</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Total Teams</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Total Colleges</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Students Registered</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Finalists</th>\
            </tr>\
           </thead>');

          var html = '';
          for(var i = 0; i < data.stats_list.length; i++)
          {
            if(data.stats_list[i].year != null)
            {
              html += '<tr class="border border-gray-600 p-1">'
              html += '<tr class="border border-gray-600 p-1">'
              html += '<td class="border border-gray-600 p-1 text-center">'+data.stats_list[i].year+'</td>'
              html += '<td class="border border-gray-600 p-1 text-center">'+data.stats_list[i].total_teams+'</td>'
              html += '<td class="border border-gray-600 p-1 text-center">'+data.stats_list[i].total_colleges+'</td>'
              html += '<td class="border border-gray-600 p-1 text-center">'+data.stats_list[i].student_registered+'</td>'
              html += '<td class="border border-gray-600 p-1 text-center">'+data.stats_list[i].finalists+'</td>'
            }
          }//end for
          $('#stats_list').append(html);
        }//end of data length if
        //-----------End STATS-----------



         //-----------Winners-----------
        $("#winners_table").removeClass('show').addClass('hidden');
        $("#winners_list").empty();
        if(data.winners_list.length >= 1)
        {
          $("#winners_table").removeClass('hidden').addClass('show');
           $('#winners_list').append('<thead>\
            <tr>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Position</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">Theme</th>\
              <th class="border border-gray-600 p-2 bg-gray-400 text-gray-800">College</th>\
            </tr>\
           </thead>');

          var html = '';
          for(var i = 0; i < data.winners_list.length; i++)
          {
            if(data.winners_list[i].year != null)
            {
              html += '<tr class="border border-gray-600 p-1">'
              html += '<tr class="border border-gray-600 p-1">'
              // html += '<td class="border border-gray-600 p-2 text-center">'+parseInt(i+1)+'</td>'
              html += '<td class="border border-gray-600 p-1 text-center">'+data.winners_list[i].position+'</td>'
              html += '<td class="border border-gray-600 p-1 text-center">'+data.winners_list[i].theme+'</td>'
              html += '<td class="border border-gray-600 p-1">'+data.winners_list[i].college+'</td>'
            }
          }//end for
          $('#winners_list').append(html);
        }//end of data length if
        //-----------End Winners-----------
      }//end of data error if
    });
});
});
</script>