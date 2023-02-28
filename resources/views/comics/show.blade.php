@extends('template.main')

@section('content')
    <main>
        <div class="container">
            <ul>
                <li>{{ $comics['title'] }}</li>
                <li>{{ $comics['description'] }}</li>
                <li>{{ $comics['thumb'] }}</li>
                <li>$ {{ $comics['price'] }}</li>
                <li>{{ $comics['series'] }}</li>
                <li>{{ $comics['sale_date'] }}</li>
                <li>{{ $comics['type'] }}</li>
                <li>{{ $comics['artists'] }}</li>
                <li>{{ $comics['writers'] }}</li>
            </ul>
        </div>
    </main>
@endsection
