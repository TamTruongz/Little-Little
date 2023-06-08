<header>
    <div class="header-start">
        <a href="{{ route('home') }}"><img src="/images/Little-&-Little-Logo-1.svg" alt=""></a>
    </div>
    <div class="header-midlle">
        <ul class="memu-header">
            <a href="{{ route('home') }}">
                <li class="item-menu-header {{ Request::is('/') ? 'active-item' : '' }}">Trang chủ</li>
            </a>
            <a href="{{ route('event') }}">
                <li class="item-menu-header {{ Str::contains(request()->url(), 'event') ? 'active-item' : '' }}">Sự kiện</li>
            </a>
            <a href="{{ route('contact') }}">
                <li class="item-menu-header {{ Str::contains(request()->url(), 'contact') ? 'active-item' : '' }}">Liên hệ</li>
            </a>
        </ul>
    </div>
    <div class="header-end">
        <img src="/images/phone.svg" alt="">
        <p>0123456789</p>
    </div>
</header>