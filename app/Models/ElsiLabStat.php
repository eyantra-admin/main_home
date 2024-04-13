<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class ElsiLabStat extends Model
{
    use HasFactory;

    protected $table = 'api_elsi_lab_count_yearwise';

    public function elsi_colleges()
    {
        return $this->hasMany(Colleges::class, 'state', 'state')->select('clg_code','IS_eLSI','college_name','district','city','pincode',DB::raw('YEAR(inauguration_date) as inauguration_year'))->where('IS_eLSI', 1)->orderBy('college_name','asc');
    }

}
