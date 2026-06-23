@extends('layouts.student')

@section('content')
<style>
/* =====================================
PROGRAM CARD
===================================== */
.track-hero-box{

    background:#fff;

    border-radius:30px;

    padding:40px;

    box-shadow:
    0 10px 40px rgba(15,23,42,.06);

    position:relative;

    overflow:hidden;
}

.track-hero-box::before{

    content:'';

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:6px;

    background:
    linear-gradient(
        90deg,
        #ff7b00,
        #ffb703
    );
}

.track-hero-badge{

    display:inline-block;

    padding:10px 18px;

    border-radius:50px;

    font-size:13px;

    font-weight:700;

    color:#fff;

    background:
    linear-gradient(
        135deg,
        #ff7b00,
        #ffb703
    );
}

.track-hero-box h2{

    margin-top:20px;

    font-size:42px;

    font-weight:800;

    color:#0f172a;
}

.track-hero-box p{

    margin-top:10px;

    color:#64748b;

    font-size:17px;
}

/* ====================================
TRACK CARD
==================================== */

.track-card{

    background:#fff;

    border-radius:28px;

    padding:28px;

    height:100%;

    border:1px solid #edf2f7;

    position:relative;

    overflow:hidden;

    transition:.35s;

    box-shadow:
    0 10px 25px rgba(15,23,42,.05);
}

.track-card::before{

    content:'';

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:5px;

    background:
    linear-gradient(
        90deg,
        #033832,
        #1F7EA1
    );
}

.track-card:hover{

    transform:
    translateY(-10px);

    box-shadow:
    0 25px 50px rgba(15,23,42,.12);
}

/* ====================================
HEADER
==================================== */

.track-card-header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:22px;
}

.track-icon-box{

    width:70px;
    height:70px;

    border-radius:22px;

    background:
    linear-gradient(
        135deg,
        #ff7b00,
        #ffb703
    );

    display:flex;

    align-items:center;

    justify-content:center;

    color:#fff;

    font-size:30px;

    box-shadow:
    0 15px 25px rgba(255,123,0,.25);
}

.track-level{

    padding:8px 16px;

    border-radius:30px;

    font-size:13px;

    font-weight:700;

    color:#033832;

    background:
    rgba(3,56,50,.08);
}

/* ====================================
CONTENT
==================================== */

.track-title{

    font-size:28px;

    font-weight:800;

    color:#111827;

    margin-bottom:12px;
}

.track-desc{

    color:#64748b;

    line-height:1.8;

    min-height:90px;
}

/* ====================================
TAGS
==================================== */

.track-tags{

    display:flex;

    flex-wrap:wrap;

    gap:10px;

    margin:20px 0;
}

.track-tags span{

    background:#fff7ed;

    color:#ff7b00;

    padding:8px 14px;

    border-radius:50px;

    font-size:12px;

    font-weight:700;
}

/* ====================================
STATS
==================================== */

.track-info{

    display:flex;

    gap:15px;

    margin-top:20px;
}

.track-info div{

    flex:1;

    text-align:center;

    background:#f8fafc;

    border-radius:18px;

    padding:18px;
}

.track-info strong{

    display:block;

    font-size:28px;

    font-weight:800;

    color:#033832;
}

.track-info small{

    color:#64748b;
}

/* ====================================
BUTTON
==================================== */

.track-btn{

    margin-top:25px;

    width:100%;

    display:flex;

    justify-content:center;

    align-items:center;

    gap:10px;

    text-decoration:none;

    color:#fff;

    font-weight:700;

    padding:15px;

    border-radius:16px;

    background:
    linear-gradient(
        90deg,
        #033832,
        #1F7EA1
    );

    transition:.3s;
}

.track-btn:hover{

    color:#fff;

    transform:scale(1.02);
}

.track-btn i{

    transition:.3s;
}

.track-btn:hover i{

    transform:translateX(5px);
}</style>

<div class="track-hero-box">

    <span class="track-hero-badge">
        🚀 Internship Tracks
    </span>

    <h2>
        Choose Your Career Path
    </h2>

    <p>
        Select a specialization and start
        your internship journey.
    </p>

</div>

<div class="row g-4 mt-4">

@foreach($programs as $program)

@php

$icon = match(strtolower($program->title)) {

    'laravel development' => 'bi-layers',
    'codeigniter development' => 'bi-window',
    'react js development' => 'bi-code-slash',
    'node js development' => 'bi-hdd-network',
    'frontend design' => 'bi-palette',
    'python development' => 'bi-terminal',

    default => 'bi-mortarboard'
};

@endphp

<div class="col-lg-4">

    <div class="track-card">

        <div class="track-card-header">

            <div class="track-icon-box">

                <i class="bi {{ $icon }}"></i>

            </div>

            <span class="track-level">

                {{ $program->level }}

            </span>

        </div>

        <h4 class="track-title">

            {{ $program->title }}

        </h4>

        <p class="track-desc">

            {{ Str::limit($program->description,120) }}

        </p>

        <div class="track-tags">

            <span>Projects</span>
            <span>Certificate</span>
            <span>Interview</span>

        </div>

        <div class="track-info">

            <div>

                <strong>
                    {{ $program->total_weeks }}
                </strong>

                <small>
                    Weeks
                </small>

            </div>

            <div>

                <strong>
                    {{ $program->duration_hours }}
                </strong>

                <small>
                    Hours
                </small>

            </div>

        </div>

        <a href="#"
           class="track-btn">

            View Program

            <i class="bi bi-arrow-right"></i>

        </a>

    </div>

</div>

@endforeach

</div>

@endsection