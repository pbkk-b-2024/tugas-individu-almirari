@extends('layouts.app')

@section('content')
<div class="">
    <!-- Jumbotron -->
    <section class="container-fluid px-0">
        <div class="jumbotron jumbotron-fluid text-white d-flex align-items-center" 
             style="background-image: url('img/vinyl-store.jpg'); height: 400px; background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="display-4"><strong>Explore the World<br>of Vinyls.</strong></h2>
                        <p class="lead">Find your favorite vinyls here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Card Slider -->
    <section class="">
        <div id="cardSlider" class="carousel slide my-5" data-bs-ride="carousel">
            <div class="carousel-inner container">
                @foreach($vinyls->chunk(3) as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row">
                            @foreach($chunk as $vinyl)
                                <div class="col-md-4">
                                    <div class="card text-white bg-transparent border-light">
                                        <img src="{{ $vinyl->imgurl }}" class="card-img-top rounded-0" alt="{{ $vinyl->title }}">
                                        <div class="card-body">
                                            <h5 class="card-title text-black">{{ $vinyl->title }}</h5>
                                            <h6 class="card-subtitle mb-2" style="color: rgba(0, 0, 0, 0.7);">{{ $vinyl->artist }}</h6>
                                            <p class="card-text" style="color: rgba(0, 0, 0, 0.5);">{{ $vinyl->description }}.</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#cardSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cardSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>
@endsection
