<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = DB::select("SELECT * FROM events");

        return view('pages.events', ['events' => $events]);
    }
    public function show(Request $request, $slug)
    {
        $event = Event::where('slug', $slug)->first();

        return view('pages.single_event', ['event' => $event]);
    }
}
