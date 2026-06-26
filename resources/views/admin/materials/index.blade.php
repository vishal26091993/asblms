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
    .material-table td,
.material-table th{
    padding:22px 20px;
    vertical-align:middle;
}

.material-info{
    display:flex;
    align-items:center;
    gap:18px;
}

.material-icon{
    width:65px;
    height:65px;
    border-radius:18px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(
        135deg,
        #ff7b00,
        #ffb703
    );
    color:#fff;
    font-size:28px;
}

.material-info h6{
    margin-bottom:6px;
    font-weight:700;
}

.material-info small{
    color:#64748b;
}

.material-badge{
    background:#eff6ff;
    color:#2563eb;
    padding:9px 16px;
    border-radius:50px;
    font-size:13px;
    font-weight:600;
}
</style>
<div class="page-top">

    <div>

        <span class="page-badge">

            📚 Study Material Management

        </span>

        <h2>

            Study Materials

        </h2>

        <p>

            Upload documents, videos and learning resources.

        </p>

    </div>

    <a href="#"
       class="add-btn">

        <i class="bi bi-plus-lg"></i>

        Add Material

    </a>

</div>

<div class="table-card">

    <div class="table-header">

        <h5>

            Material Library

        </h5>

        <div class="search-box">

            <i class="bi bi-search"></i>

            <input type="text"
                   placeholder="Search material...">

        </div>

    </div>

    <div class="table-responsive">

        <table class="table material-table align-middle">

            <thead>

                <tr>

                    <th>Material</th>
                    <th>Program</th>
                    <th>Week</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th width="160">
                        Action
                    </th>

                </tr>

            </thead>

            <tbody>

            @forelse($materials as $material)

                <tr>

                    <td>

                        <div class="material-info">

                            <div class="material-icon">

                                @switch($material->type)

                                    @case('PDF')
                                        <i class="bi bi-file-earmark-pdf"></i>
                                        @break

                                    @case('DOC')
                                        <i class="bi bi-file-earmark-word"></i>
                                        @break

                                    @case('EXCEL')
                                        <i class="bi bi-file-earmark-excel"></i>
                                        @break

                                    @case('VIDEO')
                                    @case('YOUTUBE')
                                    @case('UDEMY')
                                        <i class="bi bi-play-circle"></i>
                                        @break

                                    @default
                                        <i class="bi bi-file-earmark"></i>

                                @endswitch

                            </div>

                            <div>

                                <h6>

                                    {{ $material->title }}

                                </h6>

                                <small>

                                    {{ Str::limit($material->description,50) }}

                                </small>

                            </div>

                        </div>

                    </td>

                    <td>

                        {{ $material->program?->title ?? '-' }}

                    </td>

                    <td>

                        Week {{ $material->week_no }}

                    </td>

                    <td>

                        <span class="material-badge">

                            {{ $material->type }}

                        </span>

                    </td>

                    <td>

                        @if($material->status)

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

                    <td colspan="6"
                        class="text-center py-5">

                        No materials found.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-4">

        {{ $materials->links() }}

    </div>

</div>

@endsection