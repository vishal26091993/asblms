<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>
        ASB Admin Login
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
<style>

body{

    margin:0;

    font-family:'Inter',sans-serif;

    background:#f8fafc;
}

.admin-auth-wrapper{

    min-height:100vh;

    display:flex;
}

/* LEFT */

.admin-left{

    width:60%;

    padding:70px;

    background:
    linear-gradient(
    135deg,
    #033832,
    #1F7EA1
    );

    color:white;

    position:relative;

    overflow:hidden;
}

.admin-left::before{

    content:'';

    position:absolute;

    width:500px;
    height:500px;

    border-radius:50%;

    background:
    rgba(255,255,255,.05);

    top:-150px;
    right:-100px;
}

.brand-section{

    display:flex;

    align-items:center;

    gap:15px;
}

.brand-logo{

    width:60px;
    height:60px;

    border-radius:18px;

    background:
    linear-gradient(
    135deg,
    #ff7b00,
    #ffb703
    );

    display:flex;
    align-items:center;
    justify-content:center;

    font-weight:800;
}

.hero-content{

    margin-top:100px;
}

.hero-badge{

    padding:10px 18px;

    border-radius:40px;

    background:
    rgba(255,255,255,.15);
}

.hero-content h1{

    margin-top:25px;

    font-size:58px;

    font-weight:800;

    line-height:1.15;
}

.hero-content p{

    margin-top:25px;

    max-width:650px;

    color:
    rgba(255,255,255,.85);

    line-height:1.8;
}

.stats-grid{

    display:flex;

    gap:20px;

    margin-top:60px;
}

.mini-stat{

    flex:1;

    background:
    rgba(255,255,255,.08);

    backdrop-filter:blur(20px);

    border-radius:24px;

    padding:25px;
}

.mini-stat h2{

    font-size:36px;

    font-weight:800;
}

/* RIGHT */

.admin-right{

    width:40%;

    display:flex;

    align-items:center;

    justify-content:center;

    padding:40px;

    background:#ffffff;
}

.login-card{

    width:100%;

    max-width:460px;

    background:white;

    padding:45px;

    border-radius:32px;

    box-shadow:
    0 20px 50px rgba(15,23,42,.08);
}

.login-header{

    text-align:center;

    margin-bottom:40px;
}

.login-header h2{

    font-size:34px;

    font-weight:800;

    color:#111827;
}

.login-header p{

    color:#64748b;
}

.premium-input{

    height:60px;

    border-radius:16px;

    border:1px solid #e5e7eb;
}

.premium-input:focus{

    box-shadow:none;

    border-color:#1F7EA1;
}

.login-btn{

    width:100%;

    border:none;

    padding:18px;

    border-radius:16px;

    color:white;

    font-weight:700;

    background:
    linear-gradient(
    90deg,
    #ff7b00,
    #ffb703
    );

    transition:.3s;
}

.login-btn:hover{

    transform:translateY(-3px);
}

@media(max-width:991px){

    .admin-left{

        display:none;
    }

    .admin-right{

        width:100%;
    }
}

</style>
</head>

<body class="admin-auth-body">

<div class="admin-auth-wrapper">

    <!-- LEFT -->

    <div class="admin-left">

        <div class="brand-section">

            <div class="brand-logo">

                AI

            </div>

            <div>

                <h3>
                    ASB InternSphere
                </h3>

                <span>
                    Administration Panel
                </span>

            </div>

        </div>

        <div class="hero-content">

            <span class="hero-badge">

                🚀 Premium LMS Platform

            </span>

            <h1>

                Manage Students,
                Programs & Internship
                Operations From One Place

            </h1>

            <p>

                Modern administration portal
                designed for internship management,
                study materials, exams and certificates.

            </p>

        </div>

        <div class="stats-grid">

            <div class="mini-stat">

                <h2>5K+</h2>

                <span>Students</span>

            </div>

            <div class="mini-stat">

                <h2>25+</h2>

                <span>Programs</span>

            </div>

            <div class="mini-stat">

                <h2>98%</h2>

                <span>Completion</span>

            </div>

        </div>

    </div>

    <!-- RIGHT -->

    <div class="admin-right">

        <div class="login-card">

            <div class="login-header">

                <h2>
                    Welcome Back
                </h2>

                <p>
                    Sign in to continue
                </p>

            </div>

            @if(session('error'))

                <div class="alert alert-danger">

                    {{ session('error') }}

                </div>

            @endif

            <form method="POST"
                  action="{{ route('admin.authenticate') }}">

                @csrf

                <div class="form-group mb-4">

                    <label>

                        Email Address

                    </label>

                    <input type="email"
                           name="email"
                           class="form-control premium-input"
                           placeholder="Enter email">

                </div>

                <div class="form-group mb-4">

                    <label>

                        Password

                    </label>

                    <input type="password"
                           name="password"
                           class="form-control premium-input"
                           placeholder="Enter password">

                </div>

                <button type="submit"
                        class="login-btn">

                    Login To Dashboard

                    <i class="bi bi-arrow-right"></i>

                </button>

            </form>

        </div>

    </div>

</div>

</body>

</html>