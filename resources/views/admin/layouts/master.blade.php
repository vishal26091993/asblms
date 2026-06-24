<!DOCTYPE html>
<html>

<head>

    <title>
        ASB Admin
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link href="{{ asset('assets/css/admin.css') }}"
          rel="stylesheet">

</head>

<body>

<div class="admin-layout">

    @include('admin.layouts.sidebar')

    <div class="admin-main">

        @include('admin.layouts.header')

        <div class="admin-content">

            @yield('content')

        </div>

    </div>

</div>

</body>

</html>