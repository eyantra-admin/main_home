<?php

namespace App\Http\Controllers\API_Stat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DateTime;
use App\Models\ElsiLabStat;
use App\Models\InitiativeStat;

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

		$data = ElsiLabStat::where(['year' => $year, 'active' => 1])
			->where('number_of_labs','>',0)
			->orderBy('state', 'ASC')
			->get(['state', 'year', 'number_of_labs']);

    	return response()->json([
    		'KPI' => 'Number of eLSI Labs Established',
    		'Category' => 'Administrative',
    		'frequency' => 'Annually',
    		'description' => 'https://e-yantra.org/elsi',
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
            ->get();

        return response()->json([
            'KPI' => 'Engagement level',
            'Category' => 'Operational',
            'frequency' => 'Annually',
            'description' => '',
            'data' => $data,
        ]);
    }
}
