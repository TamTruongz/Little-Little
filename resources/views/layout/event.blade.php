@extends('index')
@section('content')
<main>
    <div class="bg-2">
        <!-- <p >Sự kiện nổi bật</p> -->
        <div class="title-event">
            <img src="/images/Sự kiện nổi bật.svg" alt="">
        </div>
        <div class="content-event">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="event">
                            <div class="item-event">
                                <img src="/images/Rectangle-event-1.png" alt="">
                                <div class="body-item-event">
                                    <h1>Sự kiện 1</h1>
                                    <h2>Đầm sen Park</h2>
                                    <h3><img src="/images/calendar.svg" alt=""> 30/05/2021 - 01/06/2021</h3>
                                    <h4>25.000 VNĐ</h4>
                                    <a class="btn-infomation" href="{{ route('event.info') }}">Xem chi tiết</a>
                                </div>
                            </div>

                            <div class="item-event">
                                <img src="/images/Rectangle-event-1.png" alt="">
                                <div class="body-item-event">
                                    <h1>Sự kiện 2</h1>
                                    <h2>Đầm sen Park</h2>
                                    <h3><img src="/images/calendar.svg" alt=""> 30/05/2021 - 01/06/2021</h3>
                                    <h4>50.000 VNĐ</h4>
                                    <a class="btn-infomation" href="{{ route('event.info') }}">Xem chi tiết</a>
                                </div>
                            </div>

                            <div class="item-event">
                                <img src="/images/Rectangle-event-1.png" alt="">
                                <div class="body-item-event">
                                    <h1>Sự kiện 3</h1>
                                    <h2>Đầm sen Park</h2>
                                    <h3><img src="/images/calendar.svg" alt=""> 30/05/2021 - 01/06/2021</h3>
                                    <h4>100.000 VNĐ</h4>
                                    <a class="btn-infomation" href="{{ route('event.info') }}">Xem chi tiết</a>
                                </div>
                            </div>

                            <div class="item-event">
                                <img src="/images/Rectangle-event-1.png" alt="">
                                <div class="body-item-event">
                                    <h1>Sự kiện 4</h1>
                                    <h2>Đầm sen Park</h2>
                                    <h3><img src="/images/calendar.svg" alt=""> 30/05/2021 - 01/06/2021</h3>
                                    <h4>125.000 VNĐ</h4>
                                    <a class="btn-infomation" href="{{ route('event.info') }}">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="event">

                            <div class="item-event">
                                <img src="/images/Rectangle-event-1.png" alt="">
                                <div class="body-item-event">
                                    <h1>Sự kiện 1</h1>
                                    <h2>Đầm sen Park</h2>
                                    <h3><img src="/images/calendar.svg" alt=""> 30/05/2021 - 01/06/2021</h3>
                                    <h4>25.000 VNĐ</h4>
                                    <a class="btn-infomation" href="{{ route('event.info') }}">Xem chi tiết</a>
                                </div>
                            </div>

                            <div class="item-event">
                                <img src="/images/Rectangle-event-1.png" alt="">
                                <div class="body-item-event">
                                    <h1>Sự kiện 1</h1>
                                    <h2>Đầm sen Park</h2>
                                    <h3><img src="/images/calendar.svg" alt=""> 30/05/2021 - 01/06/2021</h3>
                                    <h4>25.000 VNĐ</h4>
                                    <a class="btn-infomation" href="{{ route('event.info') }}">Xem chi tiết</a>
                                </div>
                            </div>

                            <div class="item-event">
                                <img src="/images/Rectangle-event-1.png" alt="">
                                <div class="body-item-event">
                                    <h1>Sự kiện 1</h1>
                                    <h2>Đầm sen Park</h2>
                                    <h3><img src="/images/calendar.svg" alt=""> 30/05/2021 - 01/06/2021</h3>
                                    <h4>25.000 VNĐ</h4>
                                    <a class="btn-infomation" href="{{ route('event.info') }}">Xem chi tiết</a>
                                </div>
                            </div>

                            <div class="item-event">
                                <img src="/images/Rectangle-event-1.png" alt="">
                                <div class="body-item-event">
                                    <h1>Sự kiện 1</h1>
                                    <h2>Đầm sen Park</h2>
                                    <h3><img src="/images/calendar.svg" alt=""> 30/05/2021 - 01/06/2021</h3>
                                    <h4>25.000 VNĐ</h4>
                                    <a class="btn-infomation" href="{{ route('event.info') }}">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <button class="carousel-control-prev--" type="button"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                </button>
                <button class="carousel-control-next--" type="button"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                </button>
            </div>
        </div>
    </div>
</main>

<img class="bg-flag-1" src="/images/Flag-1.svg" alt="">
<img class="bg-flag-2" src="/images/Flag-2.svg" alt="">
@endsection