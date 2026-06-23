<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'category',
        'level',
        'duration_hours',
        'total_weeks',
        'price',
        'status',
    ];
}
