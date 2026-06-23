<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function index()
    {
        return view('student.exams');
    }
}
