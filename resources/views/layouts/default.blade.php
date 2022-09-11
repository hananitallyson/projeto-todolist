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
    <header>
        <nav class="navbar navbar-expand-lg bg-primary sticky-top">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand d-flex align-items-center gap-2" href="/">
                    <i class="bi bi-journal-check text-white"></i>
                    <span class="fw-bolder text-white">Todolist</span>
                </a>
                <div>
                    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link fw-bold text-white" href="{{ route('home') }}"><i class="bi bi-house pe-1"></i>Home</a>
                            <a class="nav-link fw-bold text-white" href="{{ route('tasks.index') }}"><i class="bi bi-list-task pe-1"></i>Tasks</a>
                            <a class="nav-link fw-bold text-white pe-0" href="/users/{{ auth()->id() }}"><i class="bi bi-person pe-1"></i></i>Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <h1 class="pb-2 mb-4 text-primary border-bottom border-primary">@yield('title')</h1>
        @yield('content')
    </div>
    <footer class="text-muted fixed-bottom">
        <div class="bg-light p-3 fw-bold">
            <div class="container d-flex justify-content-between align-items-center">
                <span>
                    ©{{ now()->year }} Copyright - Hanani Tallyson
                </span>
                <nav class="d-flex gap-3">
                    <a href="https://github.com/hananitallyson" target="_blank"><i class="bi bi-github text-muted fs-3"></i></a>
                    <a href="https://www.linkedin.com/in/hanani-tallyson-a89008248" target="_blank"><i class="bi bi-linkedin text-muted fs-3"></i></i></a>
                </nav>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
