@extends('index')
@section('content')
<main>
    <div class="title-abate">
        <img src="/images/Thanh toán.svg" alt="">
    </div>

    <div class="content-abate">
        <img class="bg-abate-1" src="/images/Trini_Arnold_Votay1_2_abate.svg" alt="">
        <div class="content-left-abate">
            <div class="heading-content-left-abate">
                <p>VÉ CỔNG - VÉ GIA ĐÌNH</p>
            </div>
            <div class="area-content-left-abate">
                <form>
                    <div class="area-box-abate-left">
                        <div class="box-abate">
                            <p>Số tiền thanh toán</p>
                            <input class="input-box box-abate-1" type="text" name="" id=""
                                value="{{ $ticket['total_price'] }}" placeholder="" disabled>
                        </div>
                        <div class="box-abate">
                            <p>Số lượng vé</p>
                            <div>
                                <input class="input-box box-abate-2" type="number" name=""
                                    value="{{ $ticket['quantity'] }}" id="" placeholder="" disabled>
                                <p>vé</p>
                            </div>
                        </div>
                        <div class="box-abate">
                            <p>Ngày sử dụng</p>
                            <input class="input-box box-abate-1" type="text" name="" value="{{ $ticket['use_date'] }}"
                                id="" placeholder="" disabled>
                        </div>
                    </div>

                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Thông tin liên hệ</p>
                            <input class="input-box box-abate-3" type="text" name="" value="{{ $ticket['full_name'] }}"
                                id="" placeholder="Họ và tên" disabled>
                        </div>

                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Điện thoại</p>
                            <input class="input-box box-abate-1" type="text" name="" value="{{ $ticket['phone'] }}"
                                id="" placeholder="Số điện thoại" disabled>
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Email</p>
                            <input class="input-box box-abate-3" type="email" name="" value="{{ $ticket['email'] }}"
                                id="" placeholder="Email" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <img class="content-midlle-abate" src="/images/Vector.svg" alt="">
        <div class="content-right-abate">
            <div class="heading-content-right-abate">
                <p>THÔNG TIN THANH TOÁN</p>
            </div>
            <div class="area-content-right-abate">
                <form action="{{ route('payment') }}" method="POST">
                    @csrf
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Số thẻ</p>
                            <input class="input-box box-abate-3 form-control @error('card_number') is-invalid @enderror" type="number" name="card_number" id="" placeholder="">
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Họ tên chủ thẻ</p>
                            <input class="input-box box-abate-3 form-control @error('card_holder') is-invalid @enderror" type="text" name="card_holder" id="" placeholder=""
                                onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                    </div>
                    <div class="area-box-abate--calendar">
                        <p>Ngày hết hạn</p>
                        <div class="box--calendar">
                            <input class="input-box box-3 form-control @error('expiration_date') is-invalid @enderror" type="text" id="selectedDate" name="expiration_date"
                                placeholder="Ngày sử dụng">
                            <div class="btn-calendar"></div>
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>CVV/CVC</p>
                            <input class="input-box box-abate-2 form-control @error('cvv') is-invalid @enderror" type="password" name="cvv" id="" placeholder="">
                        </div>
                    </div>
                    <div class="area-box-abate--button-abate">
                        <button class="btn-abate" type="submit" id="myBtn-abate">Thanh toán</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
@if(session('errors') && session('errors')->has('abate'))
    <script>
        window.onload = function() {
            var modal = document.getElementById('myModal-abate');
            modal.style.display = 'block';

            // Thêm event listener vào document
            document.addEventListener('click', function(event) {
                // Nếu người dùng nhấp chuột bên ngoài popup, ẩn popup
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });
        };
    </script>
@endif
@endsection