@extends('template.main')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                    @include('includes.card')
                @endforeach
            </div>
            <div>
                <a href="{{ route('comics.create') }}" class="btn btn-primary mt-3">Add Comic</a>
            </div>
        </div>
    </main>
@endsection
