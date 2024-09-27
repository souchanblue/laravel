<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Bootswatch Sketchy CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/sketchy/bootstrap.min.css" rel="stylesheet">

    <!-- Additional custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Sou</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">
                            <i class="fas fa-user"></i> About Me
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="{{ route('projects') }}">
                            <i class="fas fa-briefcase"></i> Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
            </div>
        </div>
    </nav>
    <!-- Bootstrap JS (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <header>


    </header>
    <main class="fluid-container mt-4">
        @yield('content')
    </main>
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <a href="https://github.com/souchanblue/souchanblue.github.io" class="text-white me-3">Github</a>
                    <a href="https://www.instagram.com" class="text-white">Instagram</a>
                </div>
                <div class="col-md-4">
                    <p>&copy; 2024 Muhammad Bayu Firdaus</p>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('/about') }}" class="text-white">About Me</a> |
                    <a href="{{ url('/projects') }}" class="text-white">Projects</a> |
                    <a href="{{ url('/home') }}" class="text-white">Home</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/theme-toggle.js') }}"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const loader = document.getElementById('loader');
        loader.style.display = 'block'; // Show loader

        setTimeout(() => {
            loader.style.display = 'none'; // Hide loader after 2 seconds
        }, 2000); // Adjust timing as needed
    });
</script>
<style>
    .fade {
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .fade-in {
        opacity: 1;
    }
</style>
</body>

</html>