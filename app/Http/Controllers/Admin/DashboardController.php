<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        $eventsCount = Event::count();
        $activeEventsCount = Event::where('is_active', true)->count();
        $recentEvents = Event::latest()->take(5)->get();

        return view('admin.dashboard', compact('eventsCount', 'activeEventsCount', 'recentEvents'));
    }
}