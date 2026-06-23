@extends('layouts.student')

@section('content')

<div class="track-hero-box">

    <span class="track-hero-badge">
        📝 Assessments
    </span>

    <h2>
        Weekly Exams
    </h2>

    <p>
        Complete assessments and improve your internship score.
    </p>

</div>

<div class="row g-4 mt-3">

    <div class="col-lg-4">

        <div class="exam-module-card">

            <div class="exam-status">
                Available
            </div>

            <div class="exam-icon-box">

                <i class="bi bi-patch-question-fill"></i>

            </div>

            <h4>
                Laravel Fundamentals
            </h4>

            <p>
                Routing, Controllers, Models,
                Authentication and CRUD Operations.
            </p>

            <div class="exam-meta-grid">

                <div>
                    <strong>20</strong>
                    <small>Questions</small>
                </div>

                <div>
                    <strong>30</strong>
                    <small>Minutes</small>
                </div>

                <div>
                    <strong>100</strong>
                    <small>Marks</small>
                </div>

            </div>

            <a href="#"
               class="exam-start-btn">

                Start Exam

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="exam-module-card">

            <div class="exam-status completed">
                Completed
            </div>

            <div class="exam-icon-box teal">

                <i class="bi bi-award-fill"></i>

            </div>

            <h4>
                PHP Basics Test
            </h4>

            <p>
                Variables, Arrays, Functions,
                Loops and OOP Concepts.
            </p>

            <div class="score-box">

                <h2>
                    88%
                </h2>

                <span>
                    Score Achieved
                </span>

            </div>

            <a href="#"
               class="exam-result-btn">

                View Result

            </a>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="exam-module-card">

            <div class="exam-status upcoming">
                Upcoming
            </div>

            <div class="exam-icon-box orange">

                <i class="bi bi-calendar-event"></i>

            </div>

            <h4>
                Advanced Laravel
            </h4>

            <p>
                APIs, Sanctum, Middleware,
                Repository Pattern.
            </p>

            <div class="upcoming-box">

                <strong>
                    25 June 2026
                </strong>

                <span>
                    Scheduled Exam
                </span>

            </div>

            <button class="exam-disabled-btn">

                Coming Soon

            </button>

        </div>

    </div>

</div>

@endsection