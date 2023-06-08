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
                <form action="" method="post">
                    <div class="area-box-abate-left">
                        <div class="box-abate">
                            <p>Số tiền thanh toán</p>
                            <input class="input-box box-abate-1" type="text" name="" id="" placeholder="">
                        </div>
                        <div class="box-abate">
                            <p>Số lượng vé</p>
                            <div>
                                <input class="input-box box-abate-2" type="text" name="" id="" placeholder="">
                                <p>vé</p>
                            </div>
                        </div>
                        <div class="box-abate">
                            <p>Ngày sử dụng</p>
                            <input class="input-box box-abate-1" type="text" name="" id="" placeholder="">
                        </div>
                    </div>

                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Thông tin liên hệ</p>
                            <input class="input-box box-abate-3" type="text" name="" id="" placeholder="Họ và tên">
                        </div>

                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Điện thoại</p>
                            <input class="input-box box-abate-1" type="text" name="" id="" placeholder="Số điện thoại">
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Email</p>
                            <input class="input-box box-abate-3" type="email" name="" id="" placeholder="Email">
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
                <form action="#" method="post">
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Số thẻ</p>
                            <input class="input-box box-abate-3" type="text" name="" id="" placeholder="">
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Họ tên chủ thẻ</p>
                            <input class="input-box box-abate-3" type="text" name="" id="" placeholder="">
                        </div>
                    </div>
                    <div class="area-box-abate--calendar">
                        <p>Ngày hết hạn</p>
                        <div class="box--calendar">
                            <!-- <input class="input-box box-3" type="text" placeholder="Ngày sử dụng"> -->
                            <!-- <button class="btn-calendar"></button> -->
                            <input class="input-box box-3" type="text" id="selectedDate" placeholder="Ngày sử dụng">
                            <div class="btn-calendar"></div>
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>CVV/CVC</p>
                            <input class="input-box box-abate-2" type="text" name="" id="" placeholder="">
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
<div id="myModal-abate" class="modal">
    <div class="modal-content-abate">
        <span class="close">&times;</span>
        <div class="header-modal-abate">
            <img class="emoji-abate" src="/images/Disappointed emoji Face.svg" alt="">
        </div>
        <div class="body-modal-abate">
            <p>Hình như đã có lỗi xảy ra khi thanh toán... <br>
                Vui lòng kiểm tra lại thông tin liên hệ, thông tin thẻ và thử lại.</p>
        </div>
    </div>
</div>

@endsection