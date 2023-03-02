@extends('template.main')

@section('content')
    <main>
        <div class="container">
            <form method="POST" action="{{ route('comics.store') }}">
                @csrf
                <div class="row cols-2">
                    <div class="col">
                        {{-- title --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="col">
                        {{-- thumb  --}}
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Thumb</label>
                            <input type="url" class="form-control" id="thumb" name="thumb" placeholder="Thumb"
                                value="{{ old('thumb') }}">
                        </div>
                    </div>
                </div>


                <div class="row row-cols-1">
                    <div class="col">
                        {{-- description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description') }}"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-4">
                    <div class="col">
                        {{-- price --}}
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="numeric" class="form-control" id="price" name="price" placeholder="Price"
                                value="{{ old('price') }}">
                        </div>
                    </div>
                    <div class="col">
                        {{-- series --}}
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" id="series" name="series" placeholder="Series"
                                value="{{ old('series') }}">
                        </div>
                    </div>
                    <div class="col">
                        {{-- sale_date  --}}
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale Date</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date"
                                placeholder="Sale Date" value="{{ old('sale_date') }}">
                        </div>
                    </div>
                    <div class="col">
                        {{-- type --}}
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Type"
                                value="{{ old('type') }}">
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1">
                    <div class="col">
                        {{-- artists --}}
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artist</label>
                            <textarea class="form-control" id="artists" name="artists" rows="3" value="{{ old('artists') }}"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-1">
                    <div class="col">
                        {{-- writers  --}}
                        <div class="mb-3">
                            <label for="writers" class="form-label">Writers</label>
                            <textarea class="form-control" id="writers" name="writers" rows="3" value="{{ old('writers') }}"></textarea>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ route('comics') }}" class="btn btn-secondary mt-3">Back</a>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-small btn-success" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
