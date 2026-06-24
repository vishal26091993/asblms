@extends('admin.layouts.master')

@section('content')

<div class="admin-hero">

    <div>

        <span class="hero-badge">

            🚀 Administration

        </span>

        <h1>

            Internship Management Dashboard

        </h1>

        <p>

            Monitor students, programs,
            materials, exams and certificates.

        </p>

    </div>

</div>

<div class="row g-4 mt-2">

    <div class="col-lg-3">

        <div class="admin-card">

            <i class="bi bi-people"></i>

            <h2>
                250
            </h2>

            <span>
                Students
            </span>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="admin-card">

            <i class="bi bi-mortarboard"></i>

            <h2>
                8
            </h2>

            <span>
                Programs
            </span>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="admin-card">

            <i class="bi bi-patch-question"></i>

            <h2>
                15
            </h2>

            <span>
                Exams
            </span>

        </div>

    </div>

    <div class="col-lg-3">

        <div class="admin-card">

            <i class="bi bi-award"></i>

            <h2>
                80
            </h2>

            <span>
                Certificates
            </span>

        </div>

    </div>

</div>

@endsection