<header class="header">

    <div>

        <h3 style="color: white;">
            Good Morning 👋
        </h3>

        <span>
            Welcome back,
            {{ auth()->user()->name }}
        </span>

    </div>

    <div class="header-right">

        <div class="search-box">

            <i class="bi bi-search"></i>

            <input type="text"
                   placeholder="Search...">

        </div>

        <button class="circle-btn">

            <i class="bi bi-bell"></i>

        </button>

     <div class="profile-card">

    <div class="avatar">

        {{ strtoupper(substr(auth()->user()->name,0,1)) }}

    </div>

    <div class="user-info">

        <strong>
            {{ auth()->user()->name }}
        </strong>

        <small>
            Intern
        </small>

    </div>

    <form method="POST"
          action="{{ route('logout') }}"
          class="m-0">

        @csrf

        <button type="submit"
                class="logout-btn">

            <i class="bi bi-box-arrow-right"></i>

        </button>

    </form>

</div>

    </div>

</header>