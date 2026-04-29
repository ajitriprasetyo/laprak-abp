<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        body {
            background: #0f172a;
            color: #f8fafc;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #1e293b;
            height: 100vh;
            position: fixed;
            padding: 20px;
            border-right: 1px solid #334155;
        }

        .content-area {
            margin-left: 250px;
            padding: 2rem;
        }

        .nav-link {
            color: #94a3b8;
            padding: 10px 15px;
            border-radius: 8px;
            text-decoration: none;
            display: block;
        }

        .nav-link:hover {
            background: #334155;
            color: white;
        }

        .btn-logout {
            background: #ef4444;
            color: white;
            border-radius: 8px;
            width: 100%;
        }
    </style>
</head>

<body>

    @auth
    <div class="sidebar">
        <h5 class="text-white mb-4">App Menu</h5>
        <div class="mb-auto">
            <a href="#" class="nav-link"><i class="bi bi-house"></i> Dashboard</a>
        </div>
        <div class="mt-auto">
            <div class="mb-3">
                <small class="text-muted">User</small>
                <div class="text-white fw-bold">{{ Auth::user()->name }}</div>
            </div>
            <a href="{{ route('logout') }}" class="btn btn-logout">Logout</a>
        </div>
    </div>
    @endauth

    <div class="content-area">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>