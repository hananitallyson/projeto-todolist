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
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div>
            <h1 class="pb-2 mb-4 text-primary border-bottom border-primary text-center">@yield('title')</h1>
            @yield('content')
        </div>
    </div>
    <footer class="text-muted fixed-bottom">
        <div class="bg-light p-3 fw-bold">
            <div class="container d-flex justify-content-between align-items-center">
                <span>
                    ©{{ now()->year }} Copyright - Hanani Tallyson
                </span>
                <nav class="d-flex gap-3">
                    <a href="https://github.com/hananitallyson"><i class="bi bi-github text-muted fs-3"></i></a>
                    <a href="https://www.linkedin.com/in/hanani-tallyson-a89008248"><i class="bi bi-linkedin text-muted fs-3"></i></i></a>
                </nav>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
