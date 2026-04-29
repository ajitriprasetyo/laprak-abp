<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | App Produk</title>

    {{-- GOOGLE FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- CUSTOM STYLE --}}
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
        }

        .navbar {
            background: linear-gradient(135deg, #4e73df, #224abe);
        }

        .navbar-brand {
            font-weight: 600;
            color: #fff !important;
        }

        .content-wrapper {
            padding: 30px 15px;
        }

        .card {
            border-radius: 12px;
        }

        .btn {
            border-radius: 8px;
        }
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('products.index') }}">
                🛍 App Produk
            </a>
        </div>
    </nav>

    {{-- CONTENT --}}
    <div class="container content-wrapper">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <footer class="text-center text-muted small pb-3">
        © {{ date('Y') }} - App Produk
    </footer>

    {{-- BOOTSTRAP JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>