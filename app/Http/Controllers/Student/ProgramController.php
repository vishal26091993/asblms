<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where(
            'status',
            1
        )->get();

        return view(
            'student.programs',
            compact('programs')
        );
    }
}
