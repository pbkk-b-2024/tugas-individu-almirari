@extends('layouts.app')

@section('content')
<div class="container">
    <h1 style="text-align: center; padding-bottom: 20px;">Vinyl Catalogue</h1>
    <div class="row">
        @foreach($vinyls as $vinyl)
        <div class="col-md-4 mb-3">
            <div class="card" style="border: none; text-align: center;">
                <div class="position-relative">
                    <img src="{{ $vinyl->imgurl }}" class="card-img-top square-image" style="width: 200px; height: 200px;" alt="{{ $vinyl->title }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 1.25rem; color: #333;">{{ $vinyl->artist }} – {{ $vinyl->title }}</h5>
                    <h6 class="card-text" style="color: #666; font-size: 1.1rem;">Rp{{ number_format($vinyl->price, 0, ',', '.') }}</h6>

                    <div class="mt-2">
                        <a href="{{ route('vinyl.edit', ['vinyl' => $vinyl]) }}" class="btn btn-primary me-2">Edit</a>
                        <form action="{{ route('vinyl.destroy', ['vinyl' => $vinyl]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
