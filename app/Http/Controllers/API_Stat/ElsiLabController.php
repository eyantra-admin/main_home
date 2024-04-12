<?php

namespace App\Http\Controllers\API_Stat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DateTime;

class ElsiLabController extends Controller
{
    //
    public function elsiLabCount(Request $request, $year = null){
    	$current_year = (new DateTime)->format("Y");
    	//if year is nu
    	if($year == null || $year >= $current_year){
    		$year = $current_year - 1;
    	}

    	if($year <= 2013){
    		$year = 2013;
    	}

		$data = DB::table('api_elsi_lab_count_yearwise')
			->where(['year' => $year, 'active' => 1])
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
}
