<?php

namespace App\Http\Controllers\API_Stat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DateTime;
use App\Models\ElsiLabStat;
use App\Models\InitiativeStat;
use App\Models\Colleges;
use App\Models\DemographicStat;
use App\Models\InstituteStat;
use Str;

class ElsiLabController extends Controller
{
    //get elsi lab count
    public function elsiLabCount(Request $request, $year = null){
    	$current_year = (new DateTime)->format("Y");
    	//if year is nu
    	if($year == null || $year >= $current_year){
    		$year = $current_year - 1;
    	}

    	if($year <= 2013){
    		$year = 2013;
    	}

		/*$data = ElsiLabStat::where(['year' => $year, 'active' => 1])
			->where('number_of_labs','>',0)
			->orderBy('state', 'ASC')
			->get(['state', 'year', 'number_of_labs']);*/

		$data = Colleges::where([
        		['IS_eLSI', '=', 1], 
        		['country', '=', 'India'],
        		['IS_eLSI', '=', 1],
        		[DB::Raw('YEAR(inauguration_date)'), '=', $year]	
        	])->select('state', DB::raw('count(*) as number_of_labs'))
		->groupBy('state')
		->orderBy('state', 'asc')
		->get();
		
		$data->map(function ($countData) use ($year){
        	$colleges = Colleges::where([
        		['IS_eLSI', '=', 1], 
        		['state', '=', $countData['state']],
        		[DB::Raw('YEAR(inauguration_date)'), '=', $year]	
        	])->orderBy('college_name', 'asc')->get(['clg_code','college_name','district','city','pincode','address',DB::Raw('YEAR(inauguration_date) as inauguration_year')]);

		    $countData['elsi_colleges_list'] = $colleges;
		    return $countData;
		});	

    	return response()->json([    		
    		'data' => $data,
    	]);
    }

    //get elsi colleges by year and state
    public function elsiCollegeList(Request $request, $year = null, $state){
        $current_year = (new DateTime)->format("Y");
        //if year is nu
        if($year == null || $year >= $current_year){
            $year = $current_year - 1;
        }

        if($year <= 2013){
            $year = 2013;
        }

        $state = ElsiLabStat::where(['year' => $year, 'active' => 1, 'state' => $state])->first();
        $data = $state->elsi_colleges->where('IS_eLSI',1)->where('inauguration_year','=', $year);

        return response()->json([
            'KPI' => 'eLSI College List By State and Year',
            'Category' => 'Administrative',
            'frequency' => 'Annually',
            'description' => 'https://e-yantra.org/elsi',
            'data' => $data,
        ]);
    }

    //get elsi colleges by state
    public function elsiStateCollegeList(Request $request, $state){
        if(Colleges::where(['country' => 'India', 'state' => $state])->exists()){        	
        	$data = Colleges::where(['IS_eLSI' => 1, 'state' => $state, 'country' => 'India'])
        		->orderBy('inauguration_date','asc')
        		->orderBy('college_name','asc')
        		->get(['clg_code','college_name','state','district','city','pincode','address','inauguration_date']);
        	return response()->json([
        		'KPI' => 'eLSI College List By State',
        		'Category' => 'Administrative',
        		'frequency' => 'Annually',
        		'description' => 'https://e-yantra.org/elsi',
        		'total_colleges' => $data->count(),
        		'data' => $data,
        	]);
        } else {
        	return response()->json([
        		'message' => 'Given State is not exist in our list',
        	], 404);
        }        
    }

    //get initiative stats yearwise
    public function engagement_level(Request $request, $year = null){
        $current_year = (new DateTime)->format("Y");
        //if year is nu
        if($year == null || $year >= $current_year){
            $year = $current_year - 1;
        }

        if($year <= 2013){
            $year = 2013;
        }

        $data = InitiativeStat::where(['year' => $year])
            ->get([
            	'initiative',
            	'year',
            	'number_of_colleges_participated',
            	'number_of_workshop_conducted',
            	'registered_participants',
            	'trained_participants',
		      	'level_1',
		      	'level_2',
		      	'level_3',
		      	'level_4',
		  	]);

        return response()->json([            
            'data' => $data,
        ]);
    }

    //get initiative stats yearwise
    public function engagement_level_initiative(Request $request, $initiative){
        if(InitiativeStat::where('initiative', $initiative)->exists()){        	
        	if(Str::lower($initiative) == "workshops"){
        		$get = [
	            	'initiative',
	            	'year',
	            	'number_of_colleges_participated',
	            	'number_of_workshop_conducted',
	            	'registered_participants',
	            	'trained_participants',
			      	'level_1 as completion_certificate',				      	
			  	];
			} elseif(Str::lower($initiative) == "mooc") {
				$get = [
	            	'initiative',
	            	'year',
	            	'number_of_colleges_participated',
	            	'registered_participants',
	            	'trained_participants',
			      	'level_1',
			      	'level_2',
			      	'level_3',
			  	];
			} else {
			  	$get = [
	            	'initiative',
	            	'year',
	            	'number_of_colleges_participated',
	            	'registered_participants',
	            	'trained_participants',
			      	'level_1',
			      	'level_2',
			      	'level_3',
			      	'level_4',
			  	];
			}     	

        	$data = InitiativeStat::where(['initiative' => $initiative])->orderBy('year','desc')->get($get);

	        return response()->json([
	            'KPI' => 'Engagement level',
	            'Category' => 'Operational',
	            'frequency' => 'Annually',
	            'description' => '',
	            'data' => $data,
	        ]);
        } else {
        	$data = InitiativeStat::distinct()->get(['initiative']);

        	return response()->json([
        		'message' => 'Given Initiative is not exist',
        		'available_initiative' => $data,
        	], 404);
        }   

    }

    //research api
    public function researchPublished(Request $request){
    	$data = DB::table('api_research_publication')->orderBy('year','desc')->get(['year','number_of_research_paper_published']);

    	return response()->json([
            'KPI' => 'Number of research publications resulting from e-Yantra projects',
            'Category' => 'Operational',
            'frequency' => 'Annually',
            'description' => 'https://e-yantra.org/publications',
            //'total_count' => $data->count(),
            'data' => $data,
        ]);
    }

    //get demographics
    public function getDemographic(Request $request, $year, $state, $initiative){
    	if(DemographicStat::where(['year' => $year, 'state' => $state, 'initiative' => $initiative])->exists()){        	
        	$data = DemographicStat::where(['year' => $year, 'state' => $state, 'initiative' => $initiative])
        		->orderBy('district','asc')
        		->get(['year','state','district','number_of_registrations']);
        	return response()->json([
        		'KPI' => 'Geographical distribution of competition participants',
        		'Category' => 'Administrative',
        		'frequency' => 'Annually',
        		'state' => Str::title($state),
        		'year' => $year,
        		'district_count' => $data->count(),
        		'data' => $data,
        	]);
        } else {
        	return response()->json([
        		'message' => 'Given Parameter is not exist in our list',
        	], 404);
        }
    }

    public function getInstituteWise(Request $request, $year, $initiative){
    	if(InstituteStat::where(['year' => $year, 'initiative' => $initiative])->exists()){
	    	//$data = InstituteStat::with('college_dtl')->where(['initiative' => $initiative, 'year' => $year])->get(['clg_code','number_of_registrations']);
	    	$data = DB::table('api_institute_stat')
	    			->join('college_master_list.college_list','api_institute_stat.clg_code', '=', 'college_master_list.college_list.clg_code')
	    			->where(['initiative' => $initiative, 'year' => $year, 'country' => "India"])
	    			->select('api_institute_stat.clg_code','college_name','state','district','number_of_registrations')
	    			->orderBy('state','asc')
	    			->orderBy('college_name','asc')
	    			->get();

	    	return response()->json([
	    		'KPI' => 'Institute wise distribution of participant',
	    		'Category' => 'Administrative',
	    		'frequency' => 'Annually',
	    		'initiative' => Str::title($initiative),
	    		'year' => $year,
	    		'data' => collect($data)->groupBy('state'),
	    	]);
	    } else {
	    	return response()->json([
        		'message' => 'Given Parameter is not exist in our list',
        		'available_options' => DB::table('api_institute_stat')->distinct()->get(['initiative','year'])->toArray(),
        	], 404);
	    }	
    }
}
