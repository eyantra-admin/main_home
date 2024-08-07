<?php 

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailable;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Response;
use Log;
use Hash;
use Input;
use Redirect;
use DB;
use Validator;
use Storage;
use Mail;
use Inertia\Inertia;
use App\Models\Colleges;
use App\Models\CountryState;
use App\Models\SchoolSahodaya;
use App\Models\SchoolList;
use App\Mail\RegistrationSuccess;
use App\Models\Designation;
use App\Models\GamesList;
use App\Mail\LogCredentials;
use Carbon\Carbon;
use Exception;

class HomeController extends Controller
{

    
    //show elsi page
    public function elsiFamily(){
        $countries = DB::table('countries')->where('active','=', 1)->orderBy('country_name', 'asc')->get();
        return view('elsi')->with('countries', $countries);
    }//end

    //show lab ranking page
    public function labranking(){
        $states = Colleges::select('state')->where('IS_eLSI', 1)->distinct('state')->get();
        
        return view('labranking')->with('states', $states);
    }//end

    public function getStateLab(Request $request)
    {
        $data['college_name'] = Colleges::where('state', $request->state)->where('IS_eLSI', 1)
            ->orderBy('college_name','asc')->get(["college_name","id"]);
        return response()->json($data);
    }

    public function elsi_labranking(Request $request)
    {
        $data = Colleges::where('college_name', $request->college_name)
            ->get(['college_name','labrank', 'grade']);

            $getdata = ['lab_list' => $data];
            return response()->json($getdata);
    }

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

    public function eysip(){
        $year = DB::table('eysip_projects')->select('year')->orderBy('year', 'desc')->distinct()->get();
        return view('eysip')->with('year', $year);
    }//end

    public function eysip_yearwise(Request $request)
    {
        //get yearwise theme names
        $project_names = DB::table('eysip_projects')
                        ->where('eysip_projects.year','=', $request->year)
                        ->get(); 
        log::info($project_names);       
        //get yearwise stats
        $stats = DB::table('eysip_projects')->where('eysip_projects.year','=', $request->year)->get();

        $getdata = ['project_list' => $project_names]; 
        return response()->json($getdata);  
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

    public function eyantra1PdfDownload()
    {
        // $response= Response::download(Config::get('constants.DOWNLOAD_LOCATION').'AtmelStudio_Guide.zip', 'atmelStudio_Guide.zip');

        $filepath = public_path('\logo\eyantra\eyantra_logo_1.pdf');
        return Response::download($filepath);
        ob_end_clean();
        return $response;   
    }

    public function eyantra2PdfDownload()
    {
        $filepath = public_path('logo\eyantra\eyantra_logo_2.pdf');
        return Response::download($filepath);
        ob_end_clean();
        return $response;   
    }

    public function eyantracdrDownload()
    {
        $filepath = public_path('logo\eyantra\eyantra_logo~cdr_file.cdr');
        return Response::download($filepath);
        ob_end_clean();
        return $response;   
    }

    //show school page
    public function school_present(){
        $countries = CountryState::select('country')->distinct('country')->orderBy('country', 'asc')->get();
        $designation = Designation::select('name')->distinct('name')->orderBy('name', 'asc')->get();
        return view('school')->with(['countries' => $countries, 'designation' => $designation]);
    }

    public function getStateSchool(Request $request)
    {
        $data['state'] = CountryState::where('country','=', $request->country)->orderBy('state','asc')->get(["state","id"]);
        return response()->json($data);
    }

    public function getSchoolName(Request $request)
    {
    
        $data['school'] = SchoolList::where('state','=', $request->state)->orderBy('school_name','asc')->get(["school_name","id"]);
        
        $state_name = CountryState::where('id','=', $request->state)->value('state');
        
        //get the state name
        
        $data['college'] = Colleges::where('state', $state_name)->orderBy('college_name','asc')->get(["college_name","id"]);
        
        // log::info($data['college'] );
        return response()->json($data);
    }



    public function school_records(Request $req)
    {
        $rules = [
            
            
            'first_name' => 'required|string',
            'email' => 'required|string|email|max:255',
            'contact' => 'required|digits_between:9,15',
            'designation'=> 'required',
            'school_name' => 'required'
            ];
            
            $messages = 
            ['email.unique' => 'Email ID already registered!',
             'first_name.required'=>'Your first name is required.',
             'school_name.required' => 'Please enter the School/College Name!'
            ];

            $validator = Validator::make($req->all(), $rules, $messages);
/*
            $validator->after(function ($validator) use ($req){
                if ($req->school_type == 1 && $req->school_name == NULL) {
                    $validator->errors()->add('school_name', 'Please Select the School/College Name!');
                }
                if ($req->school_type == 2 && $req->college_name == NULL) {
                    $validator->errors()->add('college_name', 'Please Select the College Name!');
                }
            });*/

            $validator->validate();
           
            DB::beginTransaction();
            $feed = new SchoolSahodaya;
            
            $feed->school_name = $req->school_name; 
            $feed->country = $req->country;
            $feed->district = $req->district;
            $feed->state = $req->state;
            $feed->school_name = $req->school_name;
            $feed->full_name = trim($req->first_name);
            $feed->email = strtolower($req->email);
            $feed->contact = $req->contact;
            $feed->designation = $req->designation;
            
            $feed->save();            
            DB::commit();
            $num_accs = 0;
            /*$password = Str::random(10);
            $login = new User;
            $login->name = $feed->full_name;
            $login->email = $feed->email;
            $login->password = Hash::make($password);
            $login->active = 1;

            if(!$login->save()){
                
            }*/
                    
            $mailData = [];
                    //$emailSubj = "e-Yantra, IIT-B : Login Credentials for eYRDC Portal";
            $mailData = array(
               'name'         => $feed->full_name,
               'username'     => $feed->email,
              /* 'password'     => $password,*/
            );
            
            Mail::to($feed->email)
                ->cc('master@e-yantra.org','e-Yantra IITB')
                ->send(new LogCredentials($mailData));
            SchoolSahodaya::where('email',$feed->email)->update(['reg_complete' => 12]);

            $num_accs += 1;
            return redirect()->route('school_present')->with('success', 'You have successfully registered to attend the Grand Finale. We have sent the details to you via email!');
            }

        public function dashboard() {
            $games = GamesList::where('screenshot','!=','NULL')->get();
            
            return view('dashboard')->with(['games' => $games]);;

        }

        public function login_credentials() {
            $details = SchoolSahodaya::where('email', '!=', 'NULL')->where('reg_complete', 1)->get();
            $num_accs = 0;
        
            foreach($details as $cur_teacher){
                if($cur_teacher->email != Null && !empty($cur_teacher->email)){

                    $password = Str::random(10);
                    $login = new User;
                    $login->name = $cur_teacher->full_name;
                    $login->email = $cur_teacher->email;
                    $login->password = Hash::make($password);
                    $login->active = 1;

                    if(!$login->save()){
                        
                    }

                    SchoolSahodaya::where('email',$cur_teacher->email)->update(['login_id'=>$login->id, 'reg_complete' => 12]);

                    $num_accs += 1;
                            
                    $mailData = [];
                    //$emailSubj = "e-Yantra, IIT-B : Login Credentials for eYRDC Portal";
                    $mailData = array(
                       'name'         => $cur_teacher->full_name,
                       'username'     => $login->email,
                       'password'     => $password,
                    );
                    /*Log::info($mailData);*/
                    Mail::to($login->email)
                        ->cc('master@e-yantra.org','e-Yantra IITB')
                        ->send(new LogCredentials($mailData));
                }

            }
        

        return $num_accs;
        }

        public function events(){
            $currentDate = Carbon::now();
            $live = DB::table('events')
            ->whereDate('start_date', '<=', $currentDate)
            ->whereDate('end_date', '>=', $currentDate)
            ->get();
            $upcoming = DB::table('events')
            ->whereDate('start_date', '>=', $currentDate)
            ->get();
            $done = DB::table('events')
            ->whereDate('end_date', '<=', $currentDate)
            ->orderBy('id','desc')
            ->get();
            // return $live;
            return view('events',compact('live','upcoming','done'));
        }
        public function storeEvents(Request $request){
            $validator = Validator::make($request->all(), [
                'initiative-field' => 'required|max:255',
                'status-dropdown' => 'required|integer|in:1,2,3',
                'type-field' => 'required|integer|in:1,2',
                'title-field' => 'required|max:255',
                'description-field' => 'required|max:700',
                'start-field' => 'required|date',
                'end-field' => 'required|date|after:start-field',
                'url-field' => 'required|url',
                'poster' => 'required|image|mimes:jpg,jpeg,png,webp',
                'passcode-field' => 'required|string',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
        
            if($request->input('passcode-field') != 'eY@498ntra#*tneve'){
                return redirect()->back();
            }
            DB::beginTransaction();

            try{
                $eventId = DB::table('events')->insertGetId([
                    'initiative' => $request->input('initiative-field'),
                    'status' => $request->input('status-dropdown'),
                    'title' => $request->input('title-field'),
                    'description' => $request->input('description-field'),
                    'start_date' => $request->input('start-field'),
                    'end_date' => $request->input('end-field'),
                    'type' => $request->input('type-field'),
                    'url' => $request->input('url-field'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                if ($request->hasFile('poster')) {

                    $file = $request->file('poster');
                    $filename = 'poster_' . $eventId . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('public/event_posters', $filename);
                    
                    // Update the event record with the poster path
                    DB::table('events')
                        ->where('id', $eventId)
                        ->update(['poster' => $path, 'updated_at' => now()]);
                }
                DB::commit();
            }catch(Exception $e){
                DB::rollback();

                throw $e;
            }
            
        
            return redirect()->route('events.index')->with('success', 'Event created successfully!');
        }

   //end
}

