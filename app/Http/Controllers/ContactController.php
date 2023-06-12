<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('layout.contact');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'message' => 'required|max:255'
        ], [
            'name.required' => 'Vui lòng nhập họ tên.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'address.required' => 'Vui lòng nhập địa chỉ.',
            'message.required' => 'Vui lòng nhập nội dung tin nhắn.'
        ]);
        try {
            $contact = Contact::create($request->all());
            return redirect('/contact')->with('contact_success', 'Gửi liên hệ thành công. Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['contact_error' => 'Gửi thất bại !']);
        }
        
    }
    
}