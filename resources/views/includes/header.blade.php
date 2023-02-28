@php
    $menus = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop']
@endphp

<header>
    <div class="top">
        <div class="container">
            <a href="#">DC POWER VISA</a>
            <a href="#">ADDITIONAL DC SITES</a>
        </div>
    </div>
    <div class="bottom">
        <div class="container d-flex align-center space-between">
            <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC"></a>
            <nav>
                <ul>
                    @foreach ( $menus as $menu )
                        <li><a href="{{route($menu)}}">{{ strtoupper($menu) }}</a></li>                        
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