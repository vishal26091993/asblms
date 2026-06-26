<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudyMaterial;

class StudyMaterialController extends Controller
{
    public function index()
    {
        $materials = StudyMaterial::with('program')
                        ->latest()
                        ->paginate(10);

        return view(
            'admin.materials.index',
            compact('materials')
        );
    }
}
