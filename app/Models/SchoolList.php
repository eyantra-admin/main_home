<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolList extends Model
{
    use HasFactory;
    protected $connection = 'school_db';
    protected $table = 'school_list';

}
