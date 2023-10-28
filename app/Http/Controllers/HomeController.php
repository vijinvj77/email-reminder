<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $activeCount = $user->reminders()->where('is_active', true)->count();
        $inactiveCount = $user->reminders()->where('is_active', false)->count();
        $totalCount = $user->reminders()->count();

        return view('home', compact('activeCount', 'inactiveCount', 'totalCount'));
    }
}
