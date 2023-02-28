@extends('template.main')

@section('content')
    <main>
        <div class="container main-content">
            @foreach ($comics as $comic)
                @include('includes.card')
            @endforeach
        </div>
    </main>
@endsection
