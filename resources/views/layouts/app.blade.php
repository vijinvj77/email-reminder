<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Email Reminder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.2.3/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="{{ Route::is('reminders.*') ? 'active' : '' }}"><a href="{{ route('reminders.list') }}">Reminders</a></li>
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
                </div>
            </div>
        </nav>

        <div class="container">
            @if(session('success'))
                <!-- Success Message with Close Button -->
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success:</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            @if(session('error'))
                <!-- Error Message with Close Button -->
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error:</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        @yield('content')

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.2.3/build/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#sidebar-toggle").click(function () {
                $(".sidebar").toggleClass("active");
            });

            // Datepicker configuration
            $('.datepicker').datetimepicker({
                format: 'DD',
                icons: {
                    time: 'fas fa-clock',
                    date: 'fas fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'fas fa-calendar-check-o',
                    clear: 'fas fa-trash',
                    close: 'fas fa-times'
                }
            });

            // Timepicker configuration
            $('.timepicker').datetimepicker({
                format: 'HH:mm:ss',
                icons: {
                    time: 'fas fa-clock',
                    date: 'fas fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'fas fa-calendar-check-o',
                    clear: 'fas fa-trash',
                    close: 'fas fa-times'
                },
                stepping: 1
            });
        });
    </script>
    @yield('scripts')
</body>
</html>

