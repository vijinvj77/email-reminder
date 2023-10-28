<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reminders = auth()->user()->reminders;

        // $user = User::find(auth()->user()->id);

        // $reminders = $user->reminders();

        return view('reminders.reminders-list', compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reminders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|numeric|between:1,30',
            'time' => 'required|date_format:H:i:s',
        ]);

        $reminder = new Reminder();
        $reminder->title = $request->title;
        $reminder->description = $request->description;
        $reminder->date = $request->date;
        $reminder->time = date('H:i:s', strtotime($request->time));
        $reminder->is_active = isset($request->is_active) ? 1 : 0;
        $reminder->user_id = auth()->user()->id;
        $reminder->save();

        return to_route('reminders.list')->with('success', 'Reminder created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reminder $reminder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reminder $reminder)
    {
        if($reminder->user_id != auth()->user()->id){
            abort(403, 'You are not allowed to view this!');
        }

        return view('reminders.edit', compact('reminder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reminder $reminder)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|numeric|between:1,30',
            'time' => 'required|date_format:H:i:s',
        ]);
        
        $reminder->title = $request->title;
        $reminder->description = $request->description;
        $reminder->date = $request->date;
        $reminder->time = date('H:i:s', strtotime($request->time));
        $reminder->is_active = isset($request->is_active) ? 1 : 0;
        $reminder->save();

        return to_route('reminders.list')->with('success', 'Reminder updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reminder $reminder)
    {
        $reminder->delete();

        return to_route('reminders.list')->with('success', 'Reminder deleted successfully!');
    }
}
