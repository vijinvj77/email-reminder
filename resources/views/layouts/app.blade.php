<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Logged-in User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Reminders</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebar-toggle" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-nav ml-auto">
                    <span class="navbar-text mr-3">User Profile: {{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link">Logout</button>
                    </form>
                    {{-- <a class="nav-link" href="#">Logout</a> --}}
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#sidebar-toggle").click(function () {
                $(".sidebar").toggleClass("active");
            });
        });
    </script>
</body>
</html>

