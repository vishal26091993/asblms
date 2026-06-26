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

.student-table thead th{
    border:none;
    color:#64748b;
    font-weight:600;
    padding:20px;
}

.student-table tbody tr{
    border-bottom:1px solid #f1f5f9;
}

.student-table td{
    padding:22px 20px;
}

.student-info{
    display:flex;
    align-items:center;
    gap:15px;
}

.student-avatar{
    width:55px;
    height:55px;
    border-radius:18px;
    object-fit:cover;
}

.student-info h6{
    margin:0;
    font-weight:700;
}

.student-info small{
    color:#64748b;
}

.status-badge{
    padding:8px 15px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
}

.success{
    background:#ecfdf3;
    color:#059669;
}

.pending{
    background:#fff7ed;
    color:#ea580c;
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
    transform:translateY(-4px);
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
            👨‍🎓 Student Management
        </span>

        <h2>
            Students
        </h2>

        <p>
            Manage all internship students and
            monitor their profile completion.
        </p>

    </div>

    <a href="#"
       class="add-btn">

        <i class="bi bi-plus-lg"></i>

        Add Student

    </a>

</div>

<div class="table-card">

    <div class="table-header">

        <h5 class="mb-0">

            Student Directory

        </h5>

        <div class="search-box">

            <i class="bi bi-search"></i>

            <input type="text"
                   placeholder="Search student...">

        </div>

    </div>

    <div class="table-responsive">

        <table class="table student-table align-middle">

            <thead>

            <tr>

                <th>Student</th>
                <th>Mobile</th>
                <th>College</th>
                <th>Course</th>
                <th>Registered</th>
                <th>Status</th>
                <th width="160">Action</th>

            </tr>

            </thead>

            <tbody>

            @forelse($students as $student)

                <tr>

                    <td>

                        <div class="student-info">

                            <img
                                src="{{ $student->studentProfile?->photo
                                ? asset('public/uploads/profile/'.$student->studentProfile->photo)
                                : 'https://ui-avatars.com/api/?name='.urlencode($student->name) }}"
                                class="student-avatar">

                            <div>

                                <h6>

                                    {{ $student->name }}

                                </h6>

                                <small>

                                    {{ $student->email }}

                                </small>

                            </div>

                        </div>

                    </td>

                    <td>

                        {{ $student->studentProfile?->mobile ?? '-' }}

                    </td>

                    <td>

                        {{ $student->studentProfile?->college_name ?? '-' }}

                    </td>

                    <td>

                        {{ $student->studentProfile?->course ?? '-' }}

                    </td>

                    <td>

                        {{ $student->created_at->format('d M Y') }}

                    </td>

                    <td>

                        @if($student->studentProfile)

                            <span class="status-badge success">

                                Completed

                            </span>

                        @else

                            <span class="status-badge pending">

                                Pending

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

                        No students found.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-4">

        {{ $students->links() }}

    </div>

</div>

@endsection