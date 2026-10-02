<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::where('is_active', true)
            ->where('event_date', '>=', now())
            ->orderBy('event_date')
            ->take(6)
            ->with('images')
            ->get();

        return view('home', compact('events'));
    }
}