@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($foods as $food)
                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Menu {{ $food->id }}
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">

                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection