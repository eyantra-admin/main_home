<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class InstituteStat extends Model
{
    use HasFactory;

    protected $table = 'api_institute_stat';

    public function college_dtl()
    {
        //return $this->hasOne(Colleges::class, 'foreign_key', 'local_key');
        return $this->hasOne(Colleges::class, 'clg_code', 'clg_code')->where(['country' => "India"])->orderBy('state', 'asc')->orderBy('college_name', 'asc')->select('clg_code','college_name','state','district');
    }
}
