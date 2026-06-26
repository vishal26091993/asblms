<aside class="admin-sidebar">

    <div class="sidebar-logo">

        <div class="logo-icon">
            AI
        </div>

        <div>
            <h5>ASB</h5>
            <small>InternSphere</small>
        </div>

    </div>

    <ul class="sidebar-menu">

        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.students') ? 'active' : '' }}">
            <a href="{{ route('admin.students') }}">
                <i class="bi bi-people"></i>
                Students
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.programs') ? 'active' : '' }}">
            <a href="{{ route('admin.programs') }}">
                <i class="bi bi-mortarboard"></i>
                Programs
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.materials') ? 'active' : '' }}">
            <a href="{{ route('admin.materials') }}">
                <i class="bi bi-journal-bookmark"></i>
                Study Materials
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.exams') ? 'active' : '' }}">
            <a href="{{ route('admin.exams') }}">
                <i class="bi bi-patch-question"></i>
                Exams
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.certificates') ? 'active' : '' }}">
            <a href="{{ route('admin.certificates') }}">
                <i class="bi bi-award"></i>
                Certificates
            </a>
        </li>

    </ul>

</aside>