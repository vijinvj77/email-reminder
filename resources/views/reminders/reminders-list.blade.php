@extends('layouts/app')
@section('content')
<div class="container">
    <h2 class="text-center">Reminders</h2>
    <div class="text-right">
        <a href="{{ route('reminders.create') }}" class="btn btn-primary">Create New Reminder</a>
    </div>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Time</th>
                <th>Is Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reminders as $reminder)
                <tr>
                    <td>{{ $reminder->title }}</td>
                    <td>{{ $reminder->description }}</td>
                    <td>{{ $reminder->date }}</td>
                    <td>{{ date("H:i:s", strtotime($reminder->time)) }}</td>
                    <td>
                        @if($reminder->is_active == 1)
                            <i class="fa fa-check" aria-hidden="true"></i>
                        @else
                            <i class="fa fa-times" aria-hidden="true"></i>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('reminders.edit', ['reminder' => $reminder]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <form action ="{{ route('reminders.delete', ['reminder' => $reminder]) }}">
                                <button type="submit" class="btn ms-2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection