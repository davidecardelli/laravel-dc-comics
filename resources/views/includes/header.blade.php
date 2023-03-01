@php
    $menus = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
@endphp

<header>
    <div class="top">
        <div class="container">
            <a href="#">DC POWER VISA</a>
            <a href="#">ADDITIONAL DC SITES</a>
        </div>
    </div>
    <div class="bottom">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC"></a>
            <nav>
                <ul class="m-0 p-0">
                    @foreach ($menus as $menu)
                        <li><a href="{{ route($menu) }}" class="fw-bold p-3">{{ strtoupper($menu) }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="searchbar">
                <input type="text" placeholder="Search">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
</header>
