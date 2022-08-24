<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | TodoList</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class="overflow-hidden">
    <div class="d-flex justify-content-center align-items-center flex-column vh-100">
        <h1 class="fw-bolder text-uppercase pb-2 mb-2 text-primary">@yield('title')</h1>
        <div class="border-top border-primary">
            <div class="mt-3">
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="text-muted fixed-bottom">
        <div class="bg-light p-3 fw-bold">
            <div class="container d-flex justify-content-between align-items-center">
                <span>
                    ©{{ now()->year }} Copyright - Hanani Tallyson
                </span>
                <nav>
                    <a href="https://github.com/hananitallyson"><i class="bi bi-github text-muted fs-3"></i></a>
                </nav>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
