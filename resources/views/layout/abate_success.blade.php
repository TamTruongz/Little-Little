@extends('index')
@section('content')
<main>
    <div class="content-full">
        <div class="title-abate-success">
            <img src="/images/Thanh toán thành công.svg" alt="">
        </div>
        <div class="area-content--">
            <div class="content--">
                <div class="area-ticket-QR">
                    @foreach ($ticketsToDisplay as $ticket)
                    <div class="item-ticket">
                        <div class="header-ticket">
                            <div class="img-QR"></div>
                        </div>
                        <div class="body-ticket">
                            <h1>{{ strtoupper($ticket['qr_code']) }}</h1>
                            <h2>VÉ CỔNG</h2>
                            <span>---</span>
                            <p>{{ 'Ngày sử dụng: ' . (new DateTime($ticket['use_date']))->format('d/m/Y') }}</p>
                        </div>
                        <div class="footer-ticket">
                            <img src="/images/icon-tick.svg" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="info-page-content">
                    <p class="quantity">Số lượng: {{ $quantity_ticket }} vé</p>
                    <p class="num-page">Trang {{ $currentPage }}/{{ $totalPages }}</p>
                </div>
                <div class="pagination">
                    @if ($currentPage > 1)
                    <a href="?page={{ $currentPage - 1 }}" class="pre-ticket-QR"></a>
                    @endif
                    @if ($currentPage < $totalPages) <a href="?page={{ $currentPage + 1 }}" class="next-ticket-QR"></a>
                        @endif
                </div>
            </div>
        </div>

        <div class="btn-download-sendemail">
            <a class="btn-download" href="#">Tải về</a>
            <a class="btn-send-email" href="{{ route('abate.sendmail') }}">Gửi Email</a>
        </div>
        <img class="bg-alvin-abate-success" src="/images/Alvin_Arnold_Votay1_abate-success.svg" alt="">

    </div>
</main>

<script>
// Duyệt qua các vé để tạo mã QR
document.querySelectorAll('.img-QR').forEach(function(imgQR) {
    
    // Lấy mã QR từ phần tử HTML
    var qrCode = imgQR.closest('.item-ticket').querySelector('h1').textContent;
    // Tạo đối tượng QRCode
    var qr = new QRCode(imgQR, {
        text: qrCode,
        width: 350,
        height: 350,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });
});
</script>
@endsection