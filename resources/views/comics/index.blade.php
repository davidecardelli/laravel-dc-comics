@extends('template.main')

@section('content')
    <main>
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                    @include('includes.card')
                @endforeach
            </div>
        </div>
    </main>
@endsection
