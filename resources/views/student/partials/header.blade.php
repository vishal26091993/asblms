<style>body{
    margin:0;
    background:#f8fafc;
    font-family:'Inter',sans-serif;
}

.dashboard-layout{
    display:flex;
    min-height:100vh;
}

.sidebar{
    width:260px;
    background:#0f172a;
    color:white;
    padding:25px;
    flex-shrink:0;
}

.dashboard-main{
    flex:1;
    display:flex;
    flex-direction:column;
}

.header{
    height:85px;
    background:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 30px;
    border-bottom:1px solid #e5e7eb;
}

.dashboard-content{
    padding:30px;
    flex:1;
}

.brand{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:40px;
}

.brand-icon{
    width:50px;
    height:50px;
    border-radius:15px;
    background:linear-gradient(
        135deg,
        #4f46e5,
        #7c3aed
    );

    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:bold;
}

.menu{
    list-style:none;
    padding:0;
}

.menu li{
    margin-bottom:10px;
}

.menu li a{
    display:flex;
    align-items:center;
    gap:15px;
    padding:14px 18px;
    border-radius:14px;
    text-decoration:none;
    color:#cbd5e1;
}

.menu li.active a,
.menu li a:hover{
    background:#1e293b;
    color:white;
}

.header-right{
    display:flex;
    align-items:center;
    gap:20px;
}

.search-box{
    background:#f1f5f9;
    border-radius:12px;
    padding:10px 15px;
}

.search-box input{
    border:none;
    outline:none;
    background:none;
}

.icon-btn{
    border:none;
    width:45px;
    height:45px;
    border-radius:12px;
    background:#f1f5f9;
}

.profile-box{
    display:flex;
    align-items:center;
    gap:10px;
}

.avatar{
    width:45px;
    height:45px;
    border-radius:50%;
    background:#4f46e5;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:bold;
}

.stat-card{
    border-radius:24px;
    padding:30px;
    color:white;
}

.blue{
    background:linear-gradient(135deg,#3b82f6,#2563eb);
}

.purple{
    background:linear-gradient(135deg,#8b5cf6,#7c3aed);
}

.green{
    background:linear-gradient(135deg,#10b981,#059669);
}

.orange{
    background:linear-gradient(135deg,#f59e0b,#ea580c);
}

.stat-card h2{
    margin-top:15px;
    font-size:34px;
    font-weight:700;
}</style>
<header class="header">

    <div>

        <h3>
            Dashboard
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
                   placeholder="Search anything...">

        </div>

        <button class="icon-btn">

            <i class="bi bi-bell"></i>

        </button>

        <div class="profile-box">

            <div class="avatar">

                {{ strtoupper(substr(auth()->user()->name,0,1)) }}

            </div>

            <div>

                <strong>
                    {{ auth()->user()->name }}
                </strong>

                <small>
                    Intern
                </small>

            </div>

        </div>

    </div>

</header>