<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();

        return view('pages.events', ['events' => $events]);
    }
    public function show(Request $request, $slug)
    {
        $event = Event::where('slug', $slug)->first();

        return view('pages.single_event', ['event' => $event]);
    }
}
