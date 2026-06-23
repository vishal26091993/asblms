@extends('layouts.student')

@section('content')

<div class="profile-banner">

    <div>

        <h2>
            My Profile
        </h2>

        <p>
            Manage your internship account
            and academic information.
        </p>

    </div>

</div>

@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

<form method="POST"
      action="{{ route('profile.update') }}"
      enctype="multipart/form-data">

@csrf

<div class="row g-4">

  <div class="col-lg-4">

    <div class="profile-card-update">

        <div class="profile-image-wrapper">

            <img
            src="{{ $profile->photo
            ? asset('public/uploads/profile/'.$profile->photo)
            : 'https://ui-avatars.com/api/?name='.urlencode(auth()->user()->name).'&size=250&background=ff7b00&color=fff' }}"
            class="profile-photo">

            <label class="edit-photo-btn">

                <i class="bi bi-pencil-fill"></i>

                <input type="file"
                       name="photo"
                       hidden>

            </label>

        </div>

        <h4 class="student-name">

            {{ auth()->user()->name }}

        </h4>

        <div class="student-stats">

            <div>

                <strong>92%</strong>

                <span>Attendance</span>

            </div>

            <div>

                <strong>5</strong>

                <span>Exams</span>

            </div>

            <div>

                <strong>3</strong>

                <span>Certificates</span>

            </div>

        </div>

    </div>

</div>

    <div class="col-lg-8">

        <div class="glass-card">

            <h4 class="mb-4">

                Personal Details

            </h4>

            <div class="row g-3">

                <div class="col-md-6">

                    <label>Mobile</label>

                    <input
                    type="text"
                    name="mobile"
                    class="form-control"
                    value="{{ $profile->mobile }}">

                </div>

                <div class="col-md-6">

                    <label>Date Of Birth</label>

                    <input
                    type="date"
                    name="dob"
                    class="form-control"
                    value="{{ $profile->dob }}">

                </div>

                <div class="col-md-6">

                    <label>Gender</label>

                    <select
                    name="gender"
                    class="form-control">

                        <option value="">
                            Select
                        </option>

                        <option value="Male"
                        {{ $profile->gender=='Male' ? 'selected':'' }}>
                            Male
                        </option>

                        <option value="Female"
                        {{ $profile->gender=='Female' ? 'selected':'' }}>
                            Female
                        </option>

                    </select>

                </div>

            </div>

            <hr>

            <h4 class="mb-4">

                Academic Details

            </h4>

            <div class="row g-3">

                <div class="col-md-6">

                    <label>College Name</label>

                    <input
                    type="text"
                    name="college_name"
                    class="form-control"
                    value="{{ $profile->college_name }}">

                </div>

                <div class="col-md-6">

                    <label>Course</label>

                    <input
                    type="text"
                    name="course"
                    class="form-control"
                    value="{{ $profile->course }}">

                </div>

                <div class="col-md-6">

                    <label>Specialization</label>

                    <input
                    type="text"
                    name="specialization"
                    class="form-control"
                    value="{{ $profile->specialization }}">

                </div>

                <div class="col-md-6">

                    <label>Passing Year</label>

                    <input
                    type="text"
                    name="passing_year"
                    class="form-control"
                    value="{{ $profile->passing_year }}">

                </div>

                <div class="col-12">

                    <label>Address</label>

                    <textarea
                    name="address"
                    class="form-control"
                    rows="4">{{ $profile->address }}</textarea>

                </div>

            </div>

            <button
            class="hero-btn mt-4">

                Save Profile

            </button>

        </div>

    </div>

</div>

</form>

@endsection