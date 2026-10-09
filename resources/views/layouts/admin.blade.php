<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard') - Exscurty Test</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            margin: 0;
            background: #080d1c;
            color: #e5e7eb;
        }

        /* SIDEBAR */

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #0b1124;
            border-right: 1px solid #1d2740;
            padding: 25px 16px;
            z-index: 1000;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 12px;
            margin-bottom: 35px;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #7c3aed, #4f46e5);
            border-radius: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 19px;
        }

        .brand-text {
            font-size: 16px;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.1;
        }

        .brand-text span {
            display: block;
            color: #8b5cf6;
            font-size: 11px;
            margin-top: 3px;
            letter-spacing: 1px;
        }

        .menu-title {
            color: #64748b;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: 1px;
            padding: 0 12px;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .sidebar .nav-link {
            color: #8993a8;
            padding: 11px 13px;
            border-radius: 9px;
            margin-bottom: 4px;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: 0.2s;
        }

        .sidebar .nav-link i {
            font-size: 16px;
        }

        .sidebar .nav-link:hover {
            background: #151d35;
            color: #ffffff;
        }

        .sidebar .nav-link.active {
            background: linear-gradient(90deg,
                    rgba(124, 58, 237, 0.25),
                    rgba(79, 70, 229, 0.12));
            color: #a78bfa;
        }

        .sidebar-bottom {
            position: absolute;
            bottom: 25px;
            left: 16px;
            right: 16px;
        }

        /* MAIN */

        .main {
            margin-left: 250px;
            min-height: 100vh;
        }

        /* TOPBAR */

        .topbar {
            height: 72px;
            background: #0b1124;
            border-bottom: 1px solid #1d2740;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
        }

        .topbar-title {
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification {
            width: 35px;
            height: 35px;
            border: 1px solid #25304a;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #94a3b8;
            position: relative;
        }

        .notification .dot {
            width: 6px;
            height: 6px;
            background: #8b5cf6;
            border-radius: 50%;
            position: absolute;
            top: 7px;
            right: 7px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-avatar {
            width: 36px;
            height: 36px;
            background: #7c3aed;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 600;
            color: white;
        }

        .profile-info strong {
            display: block;
            font-size: 12px;
            color: white;
        }

        .profile-info span {
            font-size: 10px;
            color: #64748b;
        }

        /* CONTENT */

        .content {
            padding: 32px;
        }

        .page-heading {
            margin-bottom: 28px;
        }

        .page-heading h1 {
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 6px;
        }

        .page-heading p {
            color: #64748b;
            font-size: 13px;
            margin: 0;
        }

        /* STAT CARDS */

        .stat-card {
            background: #0d1428;
            border: 1px solid #1c2740;
            border-radius: 12px;
            padding: 20px;
            height: 100%;
            transition: 0.2s;
        }

        .stat-card:hover {
            border-color: #37456b;
            transform: translateY(-2px);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
        }

        .purple {
            background: rgba(124, 58, 237, 0.15);
            color: #a78bfa;
        }

        .blue {
            background: rgba(14, 165, 233, 0.15);
            color: #38bdf8;
        }

        .green {
            background: rgba(16, 185, 129, 0.15);
            color: #34d399;
        }

        .red {
            background: rgba(239, 68, 68, 0.15);
            color: #f87171;
        }

        .stat-title {
            color: #64748b;
            font-size: 11px;
            margin-top: 17px;
        }

        .stat-number {
            color: #ffffff;
            font-size: 25px;
            font-weight: 700;
            margin-top: 4px;
        }

        /* PANEL */

        .panel {
            background: #0d1428;
            border: 1px solid #1c2740;
            border-radius: 12px;
            padding: 22px;
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .panel-title {
            font-size: 14px;
            font-weight: 600;
            color: #ffffff;
        }

        .panel-subtitle {
            font-size: 10px;
            color: #64748b;
            margin-top: 4px;
        }

        /* TABLE */

        .custom-table {
            color: #cbd5e1;
            margin-bottom: 0;
        }

        .custom-table thead th {
            background: #10182d;
            color: #64748b;
            border-color: #1d2740;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .5px;
            padding: 13px;
        }

        .custom-table tbody td {
            border-color: #1d2740;
            padding: 15px 13px;
            font-size: 12px;
            vertical-align: middle;
        }

        .custom-table tbody tr:hover {
            background: #10182d;
        }

        /* BADGE */

        .status {
            padding: 5px 9px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 600;
        }

        .status-active {
            background: rgba(16, 185, 129, .12);
            color: #34d399;
        }

        .status-draft {
            background: rgba(148, 163, 184, .12);
            color: #94a3b8;
        }

        .status-finished {
            background: rgba(99, 102, 241, .12);
            color: #818cf8;
        }

        .status-danger {
            background: rgba(239, 68, 68, .12);
            color: #f87171;
        }

        /* BUTTON */

        .btn-primary-custom {
            background: #7c3aed;
            border: none;
            color: white;
            padding: 9px 15px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-primary-custom:hover {
            background: #6d28d9;
            color: white;
        }

        .btn-outline-custom {
            border: 1px solid #293652;
            color: #94a3b8;
            background: transparent;
            padding: 8px 13px;
            border-radius: 8px;
            font-size: 11px;
        }

        .btn-outline-custom:hover {
            background: #151d35;
            color: white;
        }

        /* RESPONSIVE */

        @media(max-width: 900px) {
            .sidebar {
                width: 70px;
            }

            .brand-text,
            .menu-title,
            .sidebar .nav-link span,
            .sidebar-bottom span {
                display: none;
            }

            .brand {
                justify-content: center;
            }

            .sidebar .nav-link {
                justify-content: center;
            }

            .main {
                margin-left: 70px;
            }

            /* LOGOUT BUTTON */
            .logout-button {
                width: 100%;
                border: none;
                background: transparent;
                text-align: left;
                cursor: pointer;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-icon">
                <i class="bi bi-shield-check"></i>
            </div>

            <div class="brand-text">
                EXSCURTY
                <span>TEST PLATFORM</span>
            </div>

        </div>


        <div class="menu-title">
            OVERVIEW
        </div>

        <a href="{{ route('admin.dashboard') }}"
            class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

            <i class="bi bi-grid-1x2"></i>
            <span>Dashboard</span>

        </a>


        <div class="menu-title">
            MANAGEMENT
        </div>

        <a href="{{ route('admin.ujian.index') }}"
            class="nav-link {{ request()->routeIs('admin.ujian.*') ? 'active' : '' }}">

            <i class="bi bi-journal-text"></i>
            <span>Manajemen Ujian</span>

        </a>

        <a href="{{ route('admin.soal.index') }}"
            class="nav-link {{ request()->routeIs('admin.soal.*') ? 'active' : '' }}">

            <i class="bi bi-question-circle"></i>
            <span>Bank Soal</span>

        </a>

        <a href="{{ route('admin.peserta.index') }}"
            class="nav-link {{ request()->routeIs('admin.peserta.*') ? 'active' : '' }}">

            <i class="bi bi-people"></i>
            <span>Peserta</span>

        </a>


        <div class="menu-title">
            MONITORING
        </div>

        <a href="{{ route('admin.logs.index') }}"
            class="nav-link {{ request()->routeIs('admin.logs.*') ? 'active' : '' }}">

            <i class="bi bi-shield-exclamation"></i>
            <span>Log Kecurangan</span>

        </a>


        <div class="sidebar-bottom">

            <a href="#" class="nav-link">
                <i class="bi bi-gear"></i>
                <span>Pengaturan</span>
            </a>

            <form action="{{ route('logout') }}" method="POST" id="logout-form">

                @csrf

                <button type="button" class="nav-link logout-button" onclick="confirmLogout()">

                    <i class="bi bi-box-arrow-left"></i>

                    <span>Logout</span>

                </button>

            </form>

        </div>

    </aside>


    <!-- MAIN -->

    <main class="main">

        <!-- TOPBAR -->

        <header class="topbar">

            <div class="topbar-title">
                @yield('breadcrumb', 'Dashboard')
            </div>

            <div class="topbar-right">

                <div class="notification">
                    <i class="bi bi-bell"></i>
                    <div class="dot"></div>
                </div>

                <div class="profile">

                    <div class="profile-avatar">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                    <div class="profile-info">
                        <strong>{{ Auth::user()->name }}</strong>
                        <span>Administrator</span>
                    </div>

                    <i class="bi bi-chevron-down" style="font-size:10px;color:#64748b"></i>

                </div>


            </div>

        </header>


        <!-- CONTENT -->

        <section class="content">

            @yield('content')

        </section>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

    <script>
        function confirmLogout() {

            if (confirm('Apakah kamu yakin ingin keluar dari sistem?')) {
                document.getElementById('logout-form').submit();
            }

        }
    </script>

</body>

</html>