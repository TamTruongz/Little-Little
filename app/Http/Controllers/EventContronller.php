<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventContronller extends Controller
{
    public function index() {
        return view('layout.event');
    }
    public function info() {
        return view('layout.info_event');
    }
}
