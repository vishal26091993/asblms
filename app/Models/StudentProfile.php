<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    protected $fillable = [
        'user_id',
        'photo',
        'mobile',
        'dob',
        'gender',
        'college_name',
        'course',
        'specialization',
        'passing_year',
        'address',
    ];
}
