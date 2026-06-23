@extends('layouts.student')

@section('content')

<div class="hero-card">

    <div>

        <span class="hero-tag">
            🚀 Internship Program
        </span>

        <h1>
            Welcome Back,
            {{ auth()->user()->name }}
        </h1>

        <p>
            Continue your learning journey and
            unlock internship certificates.
        </p>

        <button class="hero-btn">

            Continue Learning

        </button>

    </div>

    <div class="hero-progress">

        <div class="progress-circle">

            <span>
                75%
            </span>

        </div>

        <h5>
            Internship Completed
        </h5>

    </div>

</div>

<div class="row g-4 mt-1">

    <div class="col-md-3">
        <div class="mini-card card-orange">
            <i class="bi bi-calendar-check"></i>
            <h3>92%</h3>
            <span>Attendance</span>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mini-card card-teal">
            <i class="bi bi-journal-bookmark"></i>
            <h3>18</h3>
            <span>Materials</span>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mini-card card-purple">
            <i class="bi bi-patch-question"></i>
            <h3>5</h3>
            <span>Exams</span>
        </div>
    </div>

    <div class="col-md-3">
        <div class="mini-card card-green">
            <i class="bi bi-award"></i>
            <h3>3</h3>
            <span>Certificates</span>
        </div>
    </div>

</div>

<div class="row mt-4 g-4">

    <div class="col-lg-8">

        <div class="glass-card">

            <h5>
                Internship Progress
            </h5>

            <div class="progress-line">

                <div class="progress-fill">

                </div>

            </div>

            <div class="mt-4">

                <div class="timeline-item">

                    ✅ Registration Completed

                </div>

                <div class="timeline-item">

                    ✅ Study Materials Started

                </div>

                <div class="timeline-item">

                    ⏳ Weekly Exam Pending

                </div>

                <div class="timeline-item">

                    🎯 Internship Certificate

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="glass-card">

            <h5>
                Upcoming Exam
            </h5>

            <h3>
                Laravel Fundamentals
            </h3>

            <p>
                25 June 2026
            </p>

            <button class="hero-btn">

                Start Preparation

            </button>

        </div>

    </div>

</div>

@endsection