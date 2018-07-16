@extends('layouts.app')


@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for($i=0; $i<count($sliders); $i++)
                @if($i>0)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="active"></li>
                @endif
            @endfor
        </ol>
        <div class="carousel-inner shadow-sm">
            @foreach($sliders as $slider)
                @if($slider->active === 1)
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ $slider->image }}" alt="{{ $slider->title }}">
                        <div class="carousel-caption">
                            <div class="jumbotron jumbotron-fluid rounded" style="opacity: 0.5; background: #1b1e21">
                                <div class="container">
                                    <h1 class="display-4">{{ $slider->title }}</h1>
                                    <p class="lead">{{ $slider->content }}</p>
                                    <a class="btn btn-outline-light" href="">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ $slider->image }}" alt="{{ $slider->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="jumbotron jumbotron-fluid rounded" style="opacity: 0.5; background: #1b1e21">
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

    <div class="container">
        @foreach($foods as $food)

        @endforeach
    </div>




@endsection