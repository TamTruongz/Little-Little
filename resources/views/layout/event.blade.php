@extends('index')
@section('content')
<main>
    <div class="bg-2">
        <!-- <p >Sự kiện nổi bật</p> -->
        <div class="title-event">
            <img src="/images/Sự kiện nổi bật.svg" alt="">
        </div>
        <div class="content-event">
            <div class="area-event">

                @foreach($events as $event)
                <div class="item-event">
                    <img src="/images/{{ $event->img }}" alt="">
                    <div class="body-item-event">
                        <h1>{{ $event->name }}</h1>
                        <h2>{{ $event->location }}</h2>
                        <h3><img src="/images/calendar.svg" alt=""> {{ date('d/m/Y', strtotime($event->start_time)) }} -
                            {{ date('d/m/Y', strtotime($event->end_date)) }}
                        </h3>
                        <h4>{{ number_format($event->ticket_price, 0, ',', '.') }} VNĐ</h4>
                        <a class="btn-infomation" href="{{ route('event.info', $event->id) }}">Xem chi tiết</a>
                    </div>
                </div>
                @endforeach

                @if ($events->previousPageUrl())
                <button class="carousel-control-prev--" type="button"
                    onclick="window.location='{{ $events->previousPageUrl() }}'"></button>
                @endif

                @if ($events->nextPageUrl())
                <button class="carousel-control-next--" type="button"
                    onclick="window.location='{{ $events->nextPageUrl() }}'"></button>
                @endif
            </div>
        </div>
    </div>
    </div>
</main>

<img class="bg-flag-1" src="/images/Flag-1.svg" alt="">
<img class="bg-flag-2" src="/images/Flag-2.svg" alt="">
@endsection