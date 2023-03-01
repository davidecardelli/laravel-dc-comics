@extends('template.main')

@section('content')
    <main id="show">
        <div class="container">
            <div class="row px-5">
                <div class="col-8 d-flex flex-column flex-align-start">
                    <h4 class="text-uppercase fw-bold mb-4">{{ $comics['title'] }}</h4>
                    <div class="d-flex">
                        <div class="col-8 d-flex align-items-center py-2 lateral-border">
                            <p class="ms-4">U.S. Price:</p>
                            <p class="ms-1 fw-bold">${{ $comics['price'] }}</p>
                        </div>
                        <div class="col-4 py-2 text-center">
                            <p>Check avaialability</p>
                        </div>
                    </div>
                    <p class="mt-3">{{ $comics['description'] }}</p>
                </div>
                <div class="col-4">
                    <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="ADV" class="img-fluid">
                </div>
            </div>
            {{-- <ul>
                <li>{{ $comics['title'] }}</li>
                <li>{{ $comics['description'] }}</li>
                <li><img src="{{ $comics['thumb'] }}" alt="{{ $comics['title'] }}"></li>
                <li>$ {{ $comics['price'] }}</li>
                <li>{{ $comics['series'] }}</li>
                <li>{{ $comics['sale_date'] }}</li>
                <li>{{ $comics['type'] }}</li>
                <li>{{ $comics['artists'] }}</li>
                <li>{{ $comics['writers'] }}</li>
            </ul> --}}
        </div>
    </main>
@endsection
