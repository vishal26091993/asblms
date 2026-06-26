<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StudyMaterialController extends Controller
{
    public function index()
    {
        return view('admin.materials.index');
    }
}
