<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class StudyMaterialController extends Controller
{
    public function index()
    {
        return view('student.materials');
    }
}
