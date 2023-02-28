<div class="card">
    <a href="{{ route('comics.show', $comic['id']) }}">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </a>
    <h4>{{ $comic['title'] }}</h4>
</div>
