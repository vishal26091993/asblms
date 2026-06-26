<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::with('studentProfile')
                        ->latest()
                        ->paginate(10);

        return view(
            'admin.students.index',
            compact('students')
        );
    }
}
