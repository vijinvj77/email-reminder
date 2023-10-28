@extends('layouts.app')

@section('content')
<!-- Main Content -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-5">
        <div class="row">
            <!-- Total Reminders Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-list-ul"></i> Total Reminders
                        </h5>
                        <p class="card-text">{{ $totalCount }}</p>
                    </div>
                </div>
            </div>

            <!-- Active Reminders Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-check-circle"></i> Active Reminders
                        </h5>
                        <p class="card-text">{{ $activeCount }}</p>
                    </div>
                </div>
            </div>

            <!-- Inactive Reminders Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-times-circle"></i> Inactive Reminders
                        </h5>
                        <p class="card-text">{{ $inactiveCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
