@component('mail::message')
# Chi tiết vé
@foreach ($tickets as $ticket)
- ID: <b>{{ $ticket['id'] }}</b>
- QR Code: <b> {{ $ticket['qr_code'] }}</b>
- Ngày sử dụng: <b>{{ $ticket['use_date'] }}</b>
- Gói: <b>{{ $ticket['package'] }}</b>
- Tổng tiền: <b>{{ $ticket['price'] }}</b>
<br>--------<br>
@endforeach

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Đi đến trang chủ
@endcomponent

Cảm ơn,<br>
Little&Little
@endcomponent