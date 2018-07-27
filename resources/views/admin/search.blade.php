@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Foods</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-success" href="{{ $menu_id }}/add"><i class="fas fa-plus"></i></a>
            </div>
        </div>
        <div class="row">
            @foreach($foods as $food)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">{{ $food->title }}</p>
                        <a href="" class="btn" style="color: red;">
                            <i class="fas fa-trash-alt"></i>{{--Delete--}}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection