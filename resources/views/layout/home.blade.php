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
                <form id="form-datve" action="#" method="post">
                    <div class="box">
                        <input class="input-box box-1" type="text" id="selectedOption" placeholder="Chọn gói dịch vụ"
                            readonly>
                        <div class="btn-down"></div>
                        <div class="dropdown-content box-1">
                            <a class="item-service" href="#">Gói gia đình</a>
                            <a class="item-service" href="#">Gói cặp đôi</a>
                            <a class="item-service" href="#">Gói cá nhân</a>
                            <a class="item-service" href="#">Gói đoàn thể</a>
                        </div>
                    </div>

                    <div class="box">
                        <input class="input-box box-2" type="text" placeholder="Số lượng vé">
                        <input class="input-box box-3" type="text" id="selectedDate" placeholder="Ngày sử dụng">
                        <div class="btn-calendar"></div>
                    </div>
                    <div class="box">
                        <input class="input-box box-4" type="text" placeholder="Họ và tên">
                    </div>
                    <div class="box">
                        <input class="input-box box-4" type="text" placeholder="Số điện thoại">
                    </div>
                    <div class="box">
                        <input class="input-box box-4" type="text" placeholder="Địa chỉ email">
                    </div>
                    <div class="box-btn">
                        <button form="form-datve" class="btn-datve">ĐẶT VÉ</button>
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



@endsection