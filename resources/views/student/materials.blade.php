@extends('layouts.student')

@section('content')

<div class="track-hero-box">

    <span class="track-hero-badge">
        📚 Learning Resources
    </span>

    <h2>
        Study Materials
    </h2>

    <p>
        Access notes, videos, documents and
        learning resources assigned to your internship.
    </p>

</div>

<div class="row g-4 mt-3">

    <div class="col-lg-4">

        <div class="material-card">

            <div class="material-icon pdf">

                <i class="bi bi-file-earmark-pdf"></i>

            </div>

            <span class="material-type">
                PDF
            </span>

            <h4>
                Laravel Basics Guide
            </h4>

            <p>
                Learn routing, controllers,
                blade templates and CRUD operations.
            </p>

            <div class="material-progress">

                <div class="progress">
                    <div class="progress-bar"
                         style="width:65%">
                    </div>
                </div>

                <small>
                    65% Completed
                </small>

            </div>

            <a href="#"
               class="material-btn">

                View Material

                <i class="bi bi-arrow-right"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="material-card">

            <div class="material-icon video">

                <i class="bi bi-play-circle"></i>

            </div>

            <span class="material-type">
                Video
            </span>

            <h4>
                Laravel Authentication
            </h4>

            <p>
                Complete video training for
                login, register and roles.
            </p>

            <div class="material-progress">

                <div class="progress">
                    <div class="progress-bar"
                         style="width:30%">
                    </div>
                </div>

                <small>
                    30% Completed
                </small>

            </div>

            <a href="#"
               class="material-btn">

                Watch Video

                <i class="bi bi-play-fill"></i>

            </a>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="material-card">

            <div class="material-icon excel">

                <i class="bi bi-file-earmark-excel"></i>

            </div>

            <span class="material-type">
                Excel
            </span>

            <h4>
                Project Planning Sheet
            </h4>

            <p>
                Internship project tracker
                and weekly submission sheet.
            </p>

            <div class="material-progress">

                <div class="progress">
                    <div class="progress-bar"
                         style="width:90%">
                    </div>
                </div>

                <small>
                    90% Completed
                </small>

            </div>

            <a href="#"
               class="material-btn">

                Download

                <i class="bi bi-download"></i>

            </a>

        </div>

    </div>

</div>

@endsection