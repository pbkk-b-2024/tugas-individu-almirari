@extends('layouts.app')

@section('content')
<div class="container" style="padding-bottom: 30px;">
    <h1 class="text-center">Edit a Vinyl</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{ route('vinyl.update', ['vinyl' => $vinyl]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{$vinyl->title}}">
        </div>

        <div class="form-group mb-3">
            <label for="title">Artist</label>
            <input type="text" id="artist" name="artist" class="form-control" value="{{$vinyl->artist}}">
        </div>


        <div class="form-group mb-3">
            <label for="title">QTY</label>
            <input type="text" id="qty" name="qty" class="form-control" value="{{$vinyl->qty}}">
        </div>

        <div class="form-group mb-3">
            <label for="title">Price</label>
            <input type="text" id="price" name="price" class="form-control" value="{{$vinyl->price}}">
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4">{{$vinyl->description}}</textarea>
        </div>

        <!-- <div class="form-group mb-3">
            <label for="image">Upload Image</label>
            <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
        </div> -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
