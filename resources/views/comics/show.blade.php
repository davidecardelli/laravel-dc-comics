@extends('template.main')

@section('content')
    <main id="show">
        <div class="container">
            <div class="row px-5">
                <div class="col-8 d-flex flex-column flex-align-start">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="col-10 text-uppercase fw-bold m-0">{{ $comic['title'] }}</h4>
                        <div class="col-2 d-flex align-items-center justify-content-center gap-2">
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="col-8 d-flex align-items-center py-2 lateral-border">
                            <p class="ms-4">U.S. Price:</p>
                            <p class="ms-1 fw-bold">${{ $comic['price'] }}</p>
                        </div>
                        <div class="col-4 py-2 text-center">
                            <p>Check avaialability</p>
                        </div>
                    </div>
                    <p class="mt-3">{{ $comic['description'] }}</p>
                </div>
                <div class="col-4">
                    <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="ADV" class="img-fluid">
                </div>
            </div>
            {{-- <ul>
                <li>{{ $comic['title'] }}</li>
                <li>{{ $comic['description'] }}</li>
                <li><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></li>
                <li>$ {{ $comic['price'] }}</li>
                <li>{{ $comic['series'] }}</li>
                <li>{{ $comic['sale_date'] }}</li>
                <li>{{ $comic['type'] }}</li>
                <li>{{ $comic['artists'] }}</li>
                <li>{{ $comic['writers'] }}</li>
            </ul> --}}
        </div>
    </main>
@endsection
