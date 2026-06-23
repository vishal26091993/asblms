@extends('layouts.student')

@section('content')

<div class="track-hero-box">

    <span class="track-hero-badge">
        🏆 Achievements
    </span>

    <h2>
        Certificates & Badges
    </h2>

    <p>
        Earn badges and download internship
        certificates based on your performance.
    </p>

</div>

<div class="row g-4 mt-4">

    <!-- Internship Certificate -->

    <div class="col-lg-4">

        <div class="cert-achievement-card">

            <div class="cert-ribbon">

                Completed

            </div>

            <div class="cert-icon">

                <i class="bi bi-award-fill"></i>

            </div>

            <h4>

                Internship Completion

            </h4>

            <p>

                Successfully completed internship
                program and all assessments.

            </p>

            <div class="cert-meta">

                <span>
                    Issue Date
                </span>

                <strong>
                    25 June 2026
                </strong>

            </div>

            <a href="#"
               class="cert-download-btn">

                <i class="bi bi-download"></i>

                Download Certificate

            </a>

        </div>

    </div>

    <!-- Gold Badge -->

    <div class="col-lg-4">

        <div class="cert-achievement-card badge-gold">

            <div class="cert-icon">

                <i class="bi bi-trophy-fill"></i>

            </div>

            <h4>

                Gold Performer

            </h4>

            <p>

                Achieved score above 90%
                in internship assessments.

            </p>

            <div class="badge-score">

                ⭐ 95 Points

            </div>

        </div>

    </div>

    <!-- Attendance Badge -->

    <div class="col-lg-4">

        <div class="cert-achievement-card badge-attendance">

            <div class="cert-icon">

                <i class="bi bi-calendar-check-fill"></i>

            </div>

            <h4>

                Attendance Champion

            </h4>

            <p>

                Maintained more than
                90% internship attendance.

            </p>

            <div class="badge-score">

                🎯 92% Attendance

            </div>

        </div>

    </div>

</div>

@endsection