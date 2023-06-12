@extends('index')
@section('content')


<main>
    <div class="dam-sen-park">
        <img class="logo" src="/images/image-2.svg" alt="">
        <div class="text-dam-sen-park">
            <img class="text-damsen" src="/images/ĐẦM SEN.svg" alt=""><br>
            <img class="text-park" src="/images/PARK.svg" alt="">
        </div>
    </div>

    <div class="content-home">
        <div class="content-left">
            <div class="area-content-left">
                <div class="text-content-left">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam
                        volutpat tellus quis risus volutpat, ut posuere ex facilisis. <br> <br>
                        Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus,
                        lobortis molestie lectus consequat a.</p>
                </div>
                <div class="area-star-text">
                    <div>
                        <img src="/images/star.svg" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                    <div>
                        <img src="/images/star.svg" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                    <div>
                        <img src="/images/star.svg" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                    <div>
                        <img src="/images/star.svg" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="content-midlle" src="/images/Vector.svg" alt="">
        <div class="content-right">
            <div class="heading-content-right">
                <p>VÉ CỦA BẠN</p>
            </div>
            <div class="area-content-right">
                <form action="{{ route('booking') }}" method="POST">
                    @csrf
                    <div class="box">
                        <input class="input-box box-1 select-mouse form-control @error('package') is-invalid @enderror" name="package" type="text" id="selectedOption"
                            placeholder="Chọn gói dịch vụ" readonly value="{{ old('package') }}">
                        <div class="btn-down"></div>
                        <div class="dropdown-content box-1">
                            @foreach($packages as $item)
                            <a class="item-service" href="#" data-price="{{ $item->price }}">{{ $item->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="box">
                        <input class="input-box box-2 form-control @error('quantity') is-invalid @enderror" type="number" name="quantity" id="quantityInput"
                            placeholder="Số lượng vé" min="0" value="{{ old('quantity') }}">
                        <input class="input-box box-3 form-control @error('use_date') is-invalid @enderror" type="text" name="use_date" id="selectedDate"
                            placeholder="Ngày sử dụng" value="{{ old('use_date') }}">
                        <div class="btn-calendar"></div>
                    </div>
                    <div class="box">
                        <input class="input-box box-4 form-control @error('full_name') is-invalid @enderror" type="text" name="full_name" placeholder="Họ và tên" value="{{ old('full_name') }}">
                    </div>
                    <div class="box">
                        <input class="input-box box-4 form-control @error('phone') is-invalid @enderror" type="text" name="phone" placeholder="Số điện thoại" value="{{ old('phone') }}">
                    </div>
                    <div class="box">
                        <input class="input-box box-4 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Địa chỉ email" value="{{ old('email') }}">
                    </div>
                    <div class="box">
                        <input class="input-box box-4" type="hidden" name="total_price" id="totalPriceInput"
                            placeholder="Giá vé">
                    </div>
                    <div class="box-btn">
                        <button class="btn-datve">ĐẶT VÉ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<img class="bg-lisa" src="/images/Lisa_Arnold_Lay_Do_F2_3.svg" alt="">
<img class="bg-render" src="/images/render-fix-hair-1.svg" alt="">
<img class="bg-18451" src="/images/18451.svg" alt="">
<img class="bg-18451_1" src="/images/18451_1.svg" alt="">
<img class="bg-18451_2" src="/images/18451_2.svg" alt="">
<img class="bg-18451_3" src="/images/18451_3.svg" alt="">
<img class="bg-18451_4" src="/images/18451_1.svg" alt="">
<img class="bg-18451_5" src="/images/18451_4.svg" alt="">

<script>
$(document).ready(function() {
    // Xử lý sự kiện khi người dùng chọn gói dịch vụ
    $('.dropdown-content a.item-service').on('click', function() {
        const price = $(this).data('price');
        const quantity = parseInt($('#quantityInput').val());

        if (!isNaN(price) && !isNaN(quantity) && quantity > 0) {
            const totalPrice = price * quantity;
            $('#totalPriceInput').val(totalPrice);
            updateTotalPrice();
        }

        // Đánh dấu gói dịch vụ được chọn
        $('.dropdown-content a.selected').removeClass('selected');
        $(this).addClass('selected');
    });

    // Xử lý sự kiện khi người dùng nhập số lượng vé
    $('#quantityInput').on('input', function() {
        const selectedService = $('.dropdown-content a.selected');
        const quantity = parseInt($(this).val());

        if (selectedService.length && !isNaN(quantity) && quantity > 0) {
            const price = selectedService.data('price');
            const totalPrice = price * quantity;
            $('#totalPriceInput').val(totalPrice);
            updateTotalPrice();
        }
    });

    // Cập nhật tổng giá tiền
    function updateTotalPrice() {
        const totalPrices = $('input[name="total_price"]');
        let sum = 0;

        totalPrices.each(function() {
            const price = parseFloat($(this).val());
            if (!isNaN(price)) {
                sum += price;
            }
        });

        $('#sumPrice').text(sum.toLocaleString('en-US', {
            style: 'currency',
            currency: 'USD'
        }));
    }
});
</script>


@endsection