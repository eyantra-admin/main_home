<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class DemographicStat extends Model
{
    use HasFactory;

    protected $table = 'api_geographic_registration';
}
