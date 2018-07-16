@extends('layouts.app')


@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for($i=0; $i<count($slides); $i++)
                @if($i>0)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="active"></li>
                @endif
            @endfor
        </ol>
        <div class="carousel-inner">
            @foreach($slides as $slide)
                @if($slide->active === 1)
                    <div class="carousel-item active">
                        <img src="{{ $slide->image }}" alt="{{ $food->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $slide->title }}</h5>
                            <p>{{ $slide->content }}</p>
                        </div>
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{ $slide->image }}" alt="{{ $food->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $slide->title }}</h5>
                            <p>{{ $slide->content }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>



@endsection