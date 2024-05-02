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
    	
    	$data = Colleges::where([
        		['IS_eLSI', '=', 1], 
        		['country', '=', 'India'],
        		['IS_eLSI', '=', 1],
        		[DB::Raw('YEAR(inauguration_date)'), '=', $year]	
        	])->select('state', DB::raw('count(*) as number_of_labs'))
		->groupBy('state')
		->orderBy('state', 'asc')
		->get();

		if(!$data->count()){
			return response()->json([
        		'message' => 'No data exist for year '.$year,
        		'available years' => '2013 - 2024',
        	], 404);
		}
		
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
        $data = InitiativeStat::where(['year' => $year])
        	->orderBy('initiative','asc')
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

        if(!$data->count()){
			return response()->json([
        		'message' => 'Data exist for year '.$year,
        	], 404);
		}

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
            'data' => $data,
        ]);
    }

    //get demographics
    public function getDemographic(Request $request, $year){
    	if(DemographicStat::where(['year' => $year])->exists()){        	
        	$data = DemographicStat::where(['year' => $year])
        		->orderBy('state','asc')
        		->get([
        			'year',
        			'state',
        			'eyrc_number_of_registrations',
        			'eyrc_number_of_participation',
        			'eyic_number_of_registration',
        			'eyic_number_of_participation',
        			'mooc_number_of_registration',
        			'mooc_number_of_participation',
        			'workshop_number_of_registration',
        			'workshop_number_of_participation',
        		]);
        	return response()->json([        		
        		'data' => $data,
        	]);
        } else {
        	return response()->json([
        		'message' => 'Data not available for year '.$year,
        	], 404);
        }
    }

    public function getInstituteWise(Request $request, $year){
    	if(InstituteStat::where(['year' => $year])->exists()){
	    	//$data = InstituteStat::with('college_dtl')->where(['initiative' => $initiative, 'year' => $year])->get(['clg_code','number_of_registrations']);
	    	$data = DB::table('api_institute_stat')
	    			->join('college_master_list.college_list','api_institute_stat.clg_code', '=', 'college_master_list.college_list.clg_code')
	    			->where(['year' => $year, 'country' => "India"])
	    			->select('initiative','api_institute_stat.clg_code','college_name','IS_eLSI','state','district','pincode','number_of_registrations')
	    			->orderBy('state','asc')
	    			->orderBy('college_name','asc')
	    			->orderBy('state','asc')
	    			->orderBy('initiative','asc')
	    			->get();

	    	return response()->json([	    		
	    		'data' => collect($data),
	    	]);
	    } else {
	    	return response()->json([
        		'message' => 'Given Parameter is not exist in our list',
        		'available_options' => DB::table('api_institute_stat')->distinct()->get(['initiative','year'])->toArray(),
        	], 404);
	    }	
    }

    public function getSpendingCost(Request $request, $year){
    	if(DB::table('api_spending')->where(['year' => $year])->exists()){        	
        	$data = DB::table('api_spending')
        		->select(DB::Raw("CONCAT(year, '-', year+1) as year"), 'funds_recevied', 'number_of_trained_participants', 'cost_per_participants')
        		->where(['year' => $year])
        		->orderBy('year','asc')
        		->get();
        	return response()->json([        		
        		'data' => $data,
        	]);
        } else {
        	return response()->json([
        		'message' => 'Data not available for year '.$year,
        	], 404);
        }
    }
}
