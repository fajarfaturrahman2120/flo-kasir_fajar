<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar p-3">
        <h4 class="text-primary fw-bold">Yokasir</h4>

        <ul class="nav flex-column mt-4">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Halaman Utama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Petunjuk</a>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content flex-grow-1">
        <!-- Topbar -->
        <div class="topbar d-flex justify-content-end align-items-center px-4">
            <span class="me-2">Owner Demo</span>
        </div>

        <div class="container mt-4">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
