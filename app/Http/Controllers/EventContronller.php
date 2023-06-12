<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use App\Models\Event;


class EventContronller extends Controller
{
    public function index(Request $request) {
        $events = Event::paginate(4);
        return view('layout.event', ['events' => $events]);
    }
    public function info(Request $request, $id) {
        $event = DB::table('events')->where('id', $id)->first();
        return view('layout.info_event', ['event' => $event]);
    }
}