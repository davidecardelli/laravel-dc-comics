<div class="col">
    <a href="{{ route('comics.show', $comic['id']) }}">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </a>
    <p class="text-center text-white mt-2 fw-bold text-uppercase">{{ $comic['title'] }}</p>
</div>
