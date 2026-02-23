<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            transition: background 0.3s, color 0.3s;
        }

        body.dark-mode {
            background: #1a1c23;
            color: #fff;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            height: 100vh;
            width: 250px;
            background: #0d6efd;
            color: white;
            transition: width 0.3s ease-in-out;
            overflow: hidden;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            transition: background 0.2s;
        }

        .sidebar a i {
            min-width: 30px;
            text-align: center;
            font-size: 18px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255, 255, 255, 0.2);
        }

        .link-text {
            margin-left: 10px;
            white-space: nowrap;
            transition: opacity 0.2s ease;
        }

        .sidebar.collapsed .link-text,
        .sidebar.collapsed .logo-text {
            opacity: 0;
            pointer-events: none;
        }

        /* Content */
        .content {
            margin-left: 250px;
            transition: margin-left 0.3s ease-in-out;
            padding: 30px;
        }

        .content.expanded {
            margin-left: 80px;
        }

        /* Topbar */
        .topbar {
            background: white;
            padding: 10px 20px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        body.dark-mode .topbar {
            background: #2a2d3a;
        }

        body.dark-mode .card {
            background: #2a2d3a;
            color: white;
        }

        /* Card header */
        .card-header.bg-primary {
            background-color: #0d6efd;
            font-weight: 600;
        }
    </style>
</head>

<body>

    @auth
        @if (Auth::user()->role == 'admin')
            <!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <h4 class="py-3 text-center logo">
                    <span class="logo-text">EduPanel</span>
                </h4>

                <!-- Dashboard -->
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fa fa-home"></i>
                    <span class="link-text">Dashboard</span>
                </a>

                <!-- Students -->
                <a href="{{ route('admin.students.index') }}"
                    class="{{ request()->routeIs('admin.students*') ? 'active' : '' }}">
                    <i class="fa fa-users"></i>
                    <span class="link-text">Students</span>
                </a>

                <!-- Courses -->
                <a href="{{ route('admin.courses.index') }}"
                    class="{{ request()->routeIs('admin.courses*') ? 'active' : '' }}">
                    <i class="fa fa-book"></i>
                    <span class="link-text">Courses</span>
                </a>
            </div>
        @endif
    @endauth

    <!-- Content -->
    <div class="content" id="content">

        @auth
            @if (Auth::user()->role == 'admin')
                <!-- Topbar -->
                <div class="topbar">
                    <div>
                        <button class="btn btn-sm btn-outline-primary" onclick="toggleSidebar()">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="gap-2 d-flex align-items-center">
                        <button class="btn btn-sm btn-dark" onclick="toggleDarkMode()">
                            <i class="fa fa-moon"></i>
                        </button>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-sm btn-outline-danger">Logout</button>
                        </form>
                    </div>
                </div>
            @endif
        @endauth

        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sidebar toggle
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');
            localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
        }

        // Dark mode toggle
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
        }

        // Load sidebar & dark mode state
        window.addEventListener('DOMContentLoaded', () => {
            if (localStorage.getItem('sidebarCollapsed') === 'true') {
                document.getElementById('sidebar').classList.add('collapsed');
                document.getElementById('content').classList.add('expanded');
            }
            if (localStorage.getItem('darkMode') === 'true') {
                document.body.classList.add('dark-mode');
            }
        });
    </script>

</body>

</html>
