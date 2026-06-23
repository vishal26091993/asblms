<aside class="sidebar">

    <div class="sidebar-top">

        <div class="logo-box">

            <div class="logo-icon">
                AI
            </div>

            <div>

                <h5 style="color: white;">ASB</h5>

                <span style="color: white;">InternSphere</span>

            </div>

        </div>

    </div>

<ul class="menu">

    <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            Dashboard
        </a>
    </li>

    <li class="{{ request()->routeIs('profile') ? 'active' : '' }}">
        <a href="{{ route('profile') }}">
            <i class="bi bi-person"></i>
            Profile
        </a>
    </li>

    <li class="{{ request()->routeIs('programs') ? 'active' : '' }}">
        <a href="{{ route('programs') }}">
            <i class="bi bi-mortarboard"></i>
            Programs
        </a>
    </li>

    <li class="{{ request()->routeIs('materials') ? 'active' : '' }}">
        <a href="{{ route('materials') }}">
            <i class="bi bi-journal-text"></i>
            Study Material
        </a>
    </li>

    <li class="{{ request()->routeIs('exams') ? 'active' : '' }}">
        <a href="{{ route('exams') }}">
            <i class="bi bi-patch-question"></i>
            Exams
        </a>
    </li>

    <li class="{{ request()->routeIs('certificates') ? 'active' : '' }}">
        <a href="{{ route('certificates') }}">
            <i class="bi bi-award"></i>
            Certificates
        </a>
    </li>

</ul>

</aside>