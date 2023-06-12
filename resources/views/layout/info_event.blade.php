@extends('index')
@section('content')

<main>
    <div class="bg-3">
        <div class="content-full">
            <div class="title-abate-success">
                <p>{{ $event->name }}</p>
            </div>
            <div class="area-content--1">
                <div class="content--1">
                    <div class="content--info-event">

                        <div class="column-- w-column-first">
                            <img class="column-1-img" src="/images/info_event_1.png" alt="">
                            <div class="body--item">
                                <div class="calendar--date">
                                    <img class="icon-calendar" src="/images/calendar.svg" alt="">
                                    <p>{{ date('d/m/Y', strtotime($event->start_time)) }} -
                                        {{ date('d/m/Y', strtotime($event->end_date)) }}</p>
                                </div>
                                <span>{{ $event->location }}</span>
                                <h1>{{ number_format($event->ticket_price, 0, ',', '.') }} VNĐ</h1>
                            </div>
                        </div>

                        <div class="column-- w-column-second">
                            <div class="column-container">
                                <img src="/images/info_event_2.png" alt="">
                                <p> {!! $event->description !!}</p>
                                <img src="/images/info_event_2.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<img class="bg-flag-1" src="/images/Flag-1.svg" alt="">
<img class="bg-flag-2" src="/images/Flag-2.svg" alt="">
@endsection