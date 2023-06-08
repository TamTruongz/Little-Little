<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbateController extends Controller
{
    public function index() {
        return view('layout.abate');
    }
    public function success() {
        return view('layout.abate_success');
    }
}
