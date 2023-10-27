
@extends('layouts/default')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Register</h2>
            <p>
                Sign up for our service to start adding important dates and receiving monthly reminders.
            </p>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        </div>
        <div class="col-md-6">
            <h2>Add Dates</h2>
            <p>
                Already have an account? Login to add your special dates with titles and descriptions.
            </p>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>How It Works</h2>
            <p>
                Our service makes it easy to keep track of your important dates and events. Simply add dates with titles and descriptions, and we'll send you monthly email reminders.
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ asset('images/website-images/register.jpg') }}" alt="Image 1" class="img-fluid">
            <h3>Register</h3>
            <p>
                Register an account with us to get started. It's quick and easy, and you'll have access to all our features.
            </p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/website-images/reminder.jpg') }}" alt="Image 2" class="img-fluid">
            <h3>Add Dates</h3>
            <p>
                After logging in, add important dates with titles and descriptions. You can add as many dates as you need.
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Monthly Reminders</h2>
            <p>
                Sit back and relax! We'll send you monthly email reminders for each date with a title and description. Never miss an important event again.
            </p>
        </div>
    </div>
</div>
@endsection


