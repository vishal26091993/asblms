<style>
body{
    margin:0;
    font-family:'Inter',sans-serif;
    background:#f8fafc;
}

.admin-layout{
    display:flex;
}

.admin-sidebar{

    width:280px;

    min-height:100vh;

    background:
    linear-gradient(
    180deg,
    #033832,
    #1F7EA1
    );

    padding:25px;
}

.sidebar-logo{

    display:flex;

    gap:15px;

    align-items:center;

    margin-bottom:50px;

    color:#fff;
}

.logo-icon{

    width:55px;
    height:55px;

    border-radius:15px;

    background:
    linear-gradient(
    135deg,
    #ff7b00,
    #ffb703
    );

    display:flex;
    justify-content:center;
    align-items:center;

    font-weight:800;
}

.sidebar-menu{

    list-style:none;
    padding:0;
}

.sidebar-menu li{

    margin-bottom:12px;
}

.sidebar-menu li a{

    display:flex;

    gap:12px;

    text-decoration:none;

    color:white;

    padding:15px;

    border-radius:16px;
}

.sidebar-menu li.active a{

    background:white;

    color:#033832;
}

.admin-main{

    flex:1;
}

.admin-header{

    background:white;

    height:85px;

    padding:0 30px;

    display:flex;

    justify-content:space-between;

    align-items:center;

    border-bottom:1px solid #e5e7eb;
}

.header-actions{

    display:flex;

    align-items:center;

    gap:15px;
}

.icon-btn,
.logout-btn{

    width:46px;
    height:46px;

    border:none;

    border-radius:14px;

    background:#f1f5f9;
}

.admin-avatar{

    width:42px;
    height:42px;

    border-radius:50%;

    background:
    linear-gradient(
    135deg,
    #ff7b00,
    #ffb703
    );

    display:flex;
    align-items:center;
    justify-content:center;

    color:white;
}

.admin-user{

    display:flex;

    gap:10px;

    align-items:center;
}

.admin-content{

    padding:30px;
}

.admin-hero{

    background:
    linear-gradient(
    135deg,
    #033832,
    #1F7EA1
    );

    color:white;

    padding:40px;

    border-radius:30px;
}

.hero-badge{

    background:
    rgba(255,255,255,.15);

    padding:10px 18px;

    border-radius:30px;
}

.admin-card{

    background:white;

    padding:30px;

    border-radius:24px;

    text-align:center;

    transition:.3s;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);
}

.admin-card:hover{

    transform:translateY(-8px);
}

.admin-card i{

    font-size:34px;

    color:#ff7b00;
}

.admin-card h2{

    margin-top:15px;

    font-weight:800;
}
</style>
<header class="admin-header">

    <div>

        <h3>
            Dashboard
        </h3>

        <small>
            Welcome back Admin 👋
        </small>

    </div>

    <div class="header-actions">

        <button class="icon-btn">

            <i class="bi bi-bell"></i>

        </button>

        <div class="admin-user">

            <div class="admin-avatar">

                A

            </div>

            <span>

                Super Admin

            </span>

        </div>

        <form method="POST"
              action="{{ route('admin.logout') }}">

            @csrf

            <button class="logout-btn">

                <i class="bi bi-box-arrow-right"></i>

            </button>

        </form>

    </div>

</header>