<?php 

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Log;
use Input;
use Redirect;
use DB;
use Inertia\Inertia;
use App\Models\Colleges;

class HomeController extends Controller
{

    //show elsi page
    public function elsiFamily(){
        $countries = DB::table('countries')->where('active','=', 1)->orderBy('country_name', 'asc')->get();
        return view('elsi')->with('countries', $countries);
    }//end


    public function country()
    {
        $data['countries'] = DB::table('countries')->where('active','=', 1)->orderBy('country_name', 'asc')->get(["country_name","id"]);
        return view('country',$data);
    }
    public function getState(Request $request)
    {
        $data['states'] = DB::table('states')->where('country_name','=', $request->country_name)
            ->where('active', '=', 1)->orderBy('state_name','asc')->get(["state_name","id"]);
            
        return response()->json($data);
    }
    public function geteLSIColleges(Request $request)
    {
        $data = Colleges::where(['state' => $request->state_name, 'Inactive' => 0, 'IS_eLSI' => 1])
            ->orderBy('college_name','asc')
            ->get(['college_name','clg_code','address','country','state','pincode']);

            $getdata = ['lab_list' => $data];
            return response()->json($getdata);
    }

    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
    //----------------------eYRC-------------------------------------
    public function eyrc(){
        $year = DB::table('eyrc_themes')->select('year')->orderBy('year', 'desc')->distinct()->get();
        $teams = DB::table('eyrc_participation')
                 ->select(DB::raw('Sum(teams_registered) as number_of_teams, eyrc_participation.year'))
                ->groupBy('eyrc_participation.year')
                ->get();
        return view('eyrc')->with('year', $year)->with('teams', $teams)->with('stats', 0);
    }//end

    public function stats_yearwise(Request $request)
    {
        //get yearwise total teams count
        $teams = DB::table('eyrc_participation')
                ->select(DB::raw('Sum(teams_registered) as number_of_teams, eyrc_participation.year'))
                ->groupBy('eyrc_participation.year')
                ->where('eyrc_participation.year','=', $request->year)
                ->get();

        //get yearwise theme names
        $theme_names = DB::table('eyrc_themes')
                ->select(DB::raw('eyrc_themes.theme_name'))
                ->where('eyrc_themes.year','=', $request->year)
                ->get(); 
               
        //get yearwise stats
        $stats = DB::table('eyrc_stats')->where('eyrc_stats.year','=', $request->year)->get();

        $winners = DB::table('eyrc_winners')->where('eyrc_winners.year', '=', $request->year)->get();
        log::info($winners);

        $getdata = ['teams' => $teams, 'theme_list' => $theme_names, 'stats_list' => $stats , 'winners_list' => $winners];
        log::info($getdata);   
        return response()->json($getdata);  
    }//end

    public function publications(){
        return view('publications');
    }//end

}

