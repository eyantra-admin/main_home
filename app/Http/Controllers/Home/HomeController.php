<?php 

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use Log;
use Input;
use Redirect;
use DB;
use Storage;
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
        return view('eyrc')->with('year', $year);
    }//end

    public function stats_yearwise(Request $request)
    {
        //get yearwise theme names
        $theme_names = DB::table('eyrc_themes')
                ->select(DB::raw('eyrc_themes.theme_name'))
                ->where('eyrc_themes.year','=', $request->year)
                ->get(); 
               
        //get yearwise stats
        $stats = DB::table('eyrc_stats')->where('eyrc_stats.year','=', $request->year)->get();

        $winners = DB::table('eyrc_winners')->where('eyrc_winners.year', '=', $request->year)->get();

        $getdata = ['theme_list' => $theme_names, 'stats_list' => $stats , 'winners_list' => $winners]; 
        return response()->json($getdata);  
    }//end

    public function publications(){
        return view('publications');
    }//end

    public function hardware_doc()
    {
        try{
           $response=Storage::disk(config('constants.StorageDriver'))->download('downloads/Hardware-Manual-of-eYFi-Mega-v0.1.pdf','Hardware-Manual-of-eYFi-Mega-v0.1.pdf', ['content-type' =>['application/pdf']]);
            ob_end_clean();
            return $response;
         }
         catch(Exception $e)
         {
            log::info($e);
           return back()->withErrors('There was some problem while downloading.');
         }
    }
    public function software_doc()
    {
        try{
           $response=Storage::disk(config('constants.StorageDriver'))->download('downloads/Software-Manual-of-eYFi-Mega-v0.1.pdf','Software-Manual-of-eYFi-Mega-v0.1.pdf', ['content-type' =>['application/pdf']]);
            ob_end_clean();
            return $response;
         }
         catch(Exception $e)
         {
            log::info($e);
           return back()->withErrors('There was some problem while downloading.');
         }
    }

    public function eylfa_doc()
    {
        try{
           $response=Storage::disk(config('constants.StorageDriver'))->download('downloads/Hookup guide for Line Follower Array v0.2.pdf','Hookup guide for Line Follower Array v0.2.pdf', ['content-type' =>['application/pdf']]);
            ob_end_clean();
            return $response;
         }
         catch(Exception $e)
         {
            log::info($e);
           return back()->withErrors('There was some problem while downloading.');
         }
    }


    public function videos(){
        $video_link = DB::table('videos')->select('video_link')->get();
        log::info($video_link);
        return view('videos')->with('video_link', $video_link);
    }//end

}

