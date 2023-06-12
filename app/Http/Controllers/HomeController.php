<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $packages = Package::all();
        return view('layout.home',compact('packages'));
    }

    public function booking(Request $request)
    {
        $validatedData = $request->validate([
            'package' => 'required',
            'quantity' => 'required|integer|min:1',
            'use_date' => 'required',
            'full_name' => 'required',
            'phone' => 'required',
            'total_price' => 'required',
            'email' => 'required|email',
        ]);

        // Lưu thông tin đặt vé vào bộ nhớ tạm
        $request->session()->put('ticket', $validatedData);

        // Chuyển hướng người dùng đến trang thanh toán
        return view('layout.abate', ['ticket' => $validatedData]);
    }
}