@extends('layouts.app')

@section('slider')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 10px" >
        <ol class="carousel-indicators">
            @for($i=0; $i<count($sliders); $i++)
                @if($i>0)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="active"></li>
                @endif
            @endfor
        </ol>
        <div class="carousel-inner shadow-sm" style="height: 100vh;">
            @foreach($sliders as $slider)
                @if($slider->active === 1)
                    <div class="carousel-item active">
                        <img  class="d-block w-100" src="{{ $slider->image }}" alt="{{ $slider->title }}">
                        <div class="carousel-caption">
                            <div class="jumbotron jumbotron-fluid rounded shadow" style="opacity: 0.5; background: #1b1e21">
                                <div class="container">
                                    <h1 class="display-4">{{ $slider->title }}</h1>
                                    <p class="lead">{{ $slider->content }}</p>
                                    <a class="btn btn-outline-light" href="/promotions">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ $slider->image }}" alt="{{ $slider->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="jumbotron jumbotron-fluid rounded shadow" style="opacity: 0.5; background: #1b1e21">
                                <div class="container">
                                    <h1 class="display-4">{{ $slider->title }}</h1>
                                    <p class="lead">{{ $slider->content }}</p>
                                    <a class="btn btn-outline-light" href="">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

@endsection

@section('content')

    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-12 d-flex justify-content-around">
                <a href="">
                    <img class="rounded-circle" src="https://lorempixel.com/200/200/food/?1" alt="">
                </a>
                <a href="">
                    <img class="rounded-circle" src="https://lorempixel.com/200/200/food/?2" alt="">
                </a>
                <a href="">
                    <img class="rounded-circle" src="https://lorempixel.com/200/200/food/?3" alt="">
                </a>
            </div>

        </div>
        <div class="row" style="margin-top: 30px">
            <div class="col-8">
                @foreach($foods as $food)
                    <div class="card mb-3">
                        <img class="card-img-top h-25" src="{{ $food->image }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $food->title }}</h5>
                            <p class="card-text">{{ $food->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Check our menu of the day here</h5>
                        <p class="card-subtitle mb-2 text-muted">you can have breakfast, lunch and dinner with us</p>
                        <a class="btn btn-outline-dark float-right" href="">Ver</a>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection