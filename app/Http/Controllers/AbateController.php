<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Faker\Factory as Faker;
use Carbon\Carbon;

class AbateController extends Controller
{
    public function index(Request $request) {
        $ticket = $request->session()->get('ticket');
        return view('layout.abate',['ticket' => $ticket]);
    }


    public function payment(Request $request)
    {
        // Lấy dữ liệu đặt vé từ bộ nhớ tạm
        $ticketData = $request->session()->get('ticket');

        $faker = Faker::create();

        $validatedPayment = $request->validate([
            'card_number' => 'required|numeric',
            'card_holder' => 'required|string',
            'expiration_date' => 'required',
            'cvv' => 'required|numeric',
        ], [
            'card_number.required' => 'Vui lòng nhập số thẻ',
            'card_holder.required' => 'Vui lòng nhập tên chủ thẻ',
            'expiration_date.required' => 'Vui lòng nhập ngày hết hạn',
            'cvv.required' => 'Vui lòng nhập mã CVV',
        ]);

        // Giả lập kết quả thanh toán
        $paymentResult = [
            'success' => $faker->boolean(100),
            'message' => $faker->sentence(),
            'transaction_id' => $faker->uuid(),
        ];

        if ($paymentResult['success']) {
            // Nếu thanh toán thành công, thực hiện các bước xử lý
            $ticket = new Ticket();
            $ticket->package = $ticketData['package'];
            $ticket->quantity = $ticketData['quantity'];
            $ticket->use_date = $ticketData['use_date'] = Carbon::createFromFormat('m/d/Y', $ticketData['use_date'])->format('Y-m-d');
            $ticket->full_name = $ticketData['full_name'];
            $ticket->phone_number = $ticketData['phone'];
            $ticket->price = $ticketData['total_price'];
            $ticket->email = $ticketData['email'];
            $ticket->qr_code = uniqid();
            $ticket->save();

            $request->session()->put('ticket_id', $ticket->id);
            
            // Chuyển hướng đến trang thông báo thanh toán thành công
            return redirect()->route('abate.success')->with('success', 'Thanh toán thành công!');
        } 
        else {
            // Nếu thanh toán không thành công, trả về một thông báo lỗi
            return view('layout.abate', ['ticket' => $ticketData])->withErrors(['abate' => 'Thanh toán thất bại !']);
        }      
    }

    public function success(Request $request)
    {
        $id = $request->session()->get('ticket_id');
        $ticket = Ticket::where('id', $id)->first();
        $quantity_ticket = $ticket->quantity;
        $tickets = [];
        for ($i = 0; $i < $quantity_ticket; $i++) {
            $tickets[] = [
                'id' => $ticket->id,
                'qr_code' => $ticket->qr_code,
                'use_date' => $ticket->use_date,
            ];
        }
        
        $perPage = 4; // Số lượng phần tử trên mỗi trang
        $pagedTickets = array_chunk($tickets, $perPage); // Chia mảng thành các mảng con
        
        $currentPage = $request->query('page', 1); // Trang hiện tại
        $totalPages = count($pagedTickets); // Tổng số trang
        
        $ticketsToDisplay = $pagedTickets[$currentPage - 1]; // Lấy các phần tử cần hiển thị trên trang hiện tại
        
        return view('layout.abate_success', compact('ticketsToDisplay', 'quantity_ticket', 'currentPage', 'totalPages'));
    }
}