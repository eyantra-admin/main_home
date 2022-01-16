<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSahodaya extends Model
{
    use HasFactory;
    protected $connection = 'school_db';
    protected $table = 'school_sahodaya';
    protected $fillable = ['school_name', 'district', 'state', 'full_name', 'email', 'contact', 'designation'];
}
