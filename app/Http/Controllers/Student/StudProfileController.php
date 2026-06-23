<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\StudentProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudProfileController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $profile = StudentProfile::firstOrCreate([
            'user_id' => $userId,
        ]);

        return view(
            'student.profile',
            compact('profile')
        );
    }

    public function update(Request $request)
    {
        $request->validate([
            'mobile' => 'nullable|max:20',

            'college_name' => 'nullable|max:255',

            'course' => 'nullable|max:255',

            'specialization' => 'nullable|max:255',

            'photo' => 'nullable|image',
        ]);

        $profile = StudentProfile::firstOrCreate([
            'user_id' => Auth::id(),
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');

            $name = time().'.'.$file->getClientOriginalExtension();

            $file->move(
                public_path('uploads/profile'),
                $name
            );

            $profile->photo = $name;
        }

        $profile->update([
            'mobile' => $request->mobile,

            'dob' => $request->dob,

            'gender' => $request->gender,

            'college_name' => $request->college_name,

            'course' => $request->course,

            'specialization' => $request->specialization,

            'passing_year' => $request->passing_year,

            'address' => $request->address,
        ]);

        return back()
            ->with(
                'success',
                'Profile Updated Successfully'
            );
    }
}
