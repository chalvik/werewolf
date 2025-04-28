<header>

    <div class="flex flex-col items-center p-4">
        <a href="{{ route('home')  }}">
            <img src="https://werewolfmc.ru/wp-content/themes/werewolfmc-wp-theme/images/ww_logo.png" class="image-logo">
        </a>
    </div>

    <x-menu> </x-menu>

</header>




{{--<div class="content-bg-black">--}}
{{--    <div class="head">--}}
{{--        <div class="header-top-text block">--}}
{{--            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                    {{ $localeCode }}--}}
{{--                </a>--}}
{{--                @if (! $loop->last) | @endif--}}
{{--            @endforeach--}}
{{--            <a href="/" class="link-active">рус</a> |--}}
{{--            <a href="/en" class="link-inactive">eng</a>--}}
{{--        </div>--}}
{{--        <div class="header-top-icons block content-right">--}}
{{--            <a href="/" target="_blank">--}}
{{--                <img src="/image/youtube_icon.png" class="soc_icon">--}}
{{--            </a>--}}
{{--            &nbsp;&nbsp;&nbsp;&nbsp;--}}
{{--            <a href="https://vk.com/werewolf_mc" target="_blank">--}}
{{--                <img src="/image/vk_icon.png" class="soc_icon">--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="head-logo">--}}
{{--    <img src="/image/ww_logo.png" class="image-logo">--}}
{{--</div>--}}
{{--<div class="nav">--}}
{{--    <div class="nav-menu">--}}
{{--        <ul class="navbar">--}}
{{--            <li><a href="/#about">о&nbsp;клубе</a></li>--}}
{{--            <li><a href="/#news">новости</a></li>--}}
{{--            <li><a href="/#clubhouse">клабхаус</a></li>--}}
{{--            <li><a href="/#gallery">галерея</a></li>--}}
{{--            <!--            <li><a href="#support">суппорт</a></li>-->--}}
{{--            <li><a href="/#contacts">контакты</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</div>--}}
