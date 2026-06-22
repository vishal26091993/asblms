<nav class="navbar navbar-expand-lg navbar-modern">

    <div class="container">

        <!-- Logo -->

        <a class="navbar-brand logo-brand" href="#">

            <div class="logo-icon">
                AI
            </div>

            <div>
                <span class="logo-main">
                    ASB
                </span>
                <span class="logo-sub">
                    InternSphere
                </span>
            </div>

        </a>

        <!-- Mobile -->

        <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <i class="bi bi-list fs-2"></i>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Menu -->

            <ul class="navbar-nav mx-auto nav-center">

                <li class="nav-item">
                    <a class="nav-link active" href="#home">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#programs">
                        Programs
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#features">
                        Features
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>

            </ul>

            <!-- Actions -->

            <div class="nav-actions">

                @if (Route::has('login'))

                    @auth

                        <a href="{{ url('/dashboard') }}"
                        class="btn-apply">

                            Dashboard

                            <i class="bi bi-speedometer2"></i>

                        </a>

                    @else

                        <a href="{{ route('login') }}"
                        class="btn-login">

                            Login

                        </a>

                        @if (Route::has('register'))

                            <a href="{{ route('register') }}"
                            class="btn-apply">

                                Apply Now

                                <i class="bi bi-arrow-right"></i>

                            </a>

                        @endif

                    @endauth

                @endif

            </div>

        </div>

    </div>

</nav>