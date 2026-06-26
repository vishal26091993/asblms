<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()
            ->paginate(10);

        return view(
            'admin.programs.index',
            compact('programs')
        );
    }
}
