@extends('admin.layouts.master')

@section('content')
<style>
     .page-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
    flex-wrap:wrap;
    gap:20px;
}

.page-badge{
    background:#fff3e8;
    color:#ff7b00;
    padding:8px 18px;
    border-radius:50px;
    font-size:14px;
    font-weight:600;
}

.page-top h2{
    font-size:34px;
    font-weight:800;
    margin-top:15px;
}

.page-top p{
    color:#64748b;
}

.add-btn{
    background:linear-gradient(
        135deg,
        #ff7b00,
        #ffb703
    );
    color:white;
    padding:15px 28px;
    border-radius:16px;
    text-decoration:none;
    font-weight:600;
}

.table-card{
    background:white;
    border-radius:30px;
    padding:30px;
    box-shadow:
        0 15px 40px rgba(15,23,42,.08);
}

.table-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.search-box{
    width:320px;
    background:#f8fafc;
    border-radius:15px;
    padding:12px 18px;
}

.search-box input{
    border:none;
    background:none;
    outline:none;
    margin-left:10px;
}

.program-table td,
.program-table th{
    padding:22px 20px;
    vertical-align:middle;
}

.program-info{
    display:flex;
    align-items:center;
    gap:18px;
}

.program-thumb{
    width:70px;
    height:70px;
    border-radius:18px;
    object-fit:cover;
}

.program-icon-box{
    width:70px;
    height:70px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    background:linear-gradient(
        135deg,
        #ff7b00,
        #ffb703
    );
    color:#fff;
}

.program-info h6{
    margin-bottom:6px;
    font-weight:700;
    font-size:16px;
}

.program-info small{
    color:#64748b;
    line-height:1.6;
}

.custom-badge{
    padding:9px 18px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
}

.badge-green{
    background:#ecfdf3;
    color:#059669;
}

.badge-orange{
    background:#fff7ed;
    color:#ea580c;
}

.badge-red{
    background:#fef2f2;
    color:#dc2626;
}

.status-badge{
    padding:8px 16px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
}

.success{
    background:#ecfdf3;
    color:#059669;
}

.pending{
    background:#fef2f2;
    color:#dc2626;
}

.action-buttons{
    display:flex;
    gap:10px;
}

.action-btn{
    width:42px;
    height:42px;
    border:none;
    border-radius:14px;
    background:#f8fafc;
    transition:.3s;
}

.action-btn:hover{
    transform:translateY(-5px);
}

.view{
    color:#1F7EA1;
}

.edit{
    color:#ff7b00;
}

.delete{
    color:#ef4444;
}
</style>    
<div class="page-top">

    <div>

        <span class="page-badge">
            🚀 Program Management
        </span>

        <h2>
            Internship Programs
        </h2>

        <p>
            Create and manage internship programs,
            courses and learning tracks.
        </p>

    </div>

    <a href="#"
       class="add-btn">

        <i class="bi bi-plus-lg"></i>

        Add Program

    </a>

</div>

<div class="table-card">

    <div class="table-header">

        <h5 class="mb-0">
            Program Directory
        </h5>

        <div class="search-box">

            <i class="bi bi-search"></i>

            <input type="text"
                   placeholder="Search program...">

        </div>

    </div>

    <div class="table-responsive">

        <table class="table program-table align-middle">

            <thead>

                <tr>

                    <th>Program</th>
                    <th>Category</th>
                    <th>Level</th>
                    <th>Duration</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th width="160">Action</th>

                </tr>

            </thead>

            <tbody>

                @forelse($programs as $program)

                    <tr>

                        <td>

                            <div class="program-info">

                                @if($program->thumbnail)

                                    <img
                                        src="{{ asset('uploads/programs/'.$program->thumbnail) }}"
                                        class="program-thumb">

                                @else

                                    <div class="program-icon-box">

                                        <i class="bi bi-mortarboard"></i>

                                    </div>

                                @endif

                                <div>

                                    <h6>

                                        {{ $program->title }}

                                    </h6>

                                    <small>

                                        {{ Str::limit($program->description,60) }}

                                    </small>

                                </div>

                            </div>

                        </td>

                        <td>

                            {{ $program->category ?? '-' }}

                        </td>

                        <td>

                            @php

                                $badge =
                                    $program->level == 'Beginner'
                                    ? 'badge-green'
                                    : ($program->level == 'Intermediate'
                                    ? 'badge-orange'
                                    : 'badge-red');

                            @endphp

                            <span class="custom-badge {{ $badge }}">

                                {{ $program->level }}

                            </span>

                        </td>

                        <td>

                            <strong>

                                {{ $program->duration_hours }}

                            </strong>

                            Hours

                            <br>

                            <small>

                                {{ $program->total_weeks }}
                                Weeks

                            </small>

                        </td>

                        <td>

                            ₹{{ number_format($program->price,2) }}

                        </td>

                        <td>

                            @if($program->status)

                                <span class="status-badge success">

                                    Active

                                </span>

                            @else

                                <span class="status-badge pending">

                                    Inactive

                                </span>

                            @endif

                        </td>

                        <td>

                            <div class="action-buttons">

                                <button class="action-btn view">

                                    <i class="bi bi-eye"></i>

                                </button>

                                <button class="action-btn edit">

                                    <i class="bi bi-pencil"></i>

                                </button>

                                <button class="action-btn delete">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7"
                            class="text-center py-5">

                            No programs found.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-4">

        {{ $programs->links() }}

    </div>

</div>

@endsection