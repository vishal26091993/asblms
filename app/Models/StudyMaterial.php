<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyMaterial extends Model
{
    protected $fillable = [
        'program_id',
        'title',
        'description',
        'type',
        'file',
        'video_url',
        'week_no',
        'sort_order',
        'status',
    ];

    public function program()
    {
        return $this->belongsTo(
            Program::class
        );
    }
}
