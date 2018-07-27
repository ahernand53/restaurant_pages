@extends('.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="modal-title">Agregar Nueva comida al menu</h2>
            <table class="table table-responsive">
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Add</th>
                </thead>
                <tbody>
                    @foreach($foods as $food)
                        <tr>
                            <td>{{ $food->title}}</td>
                            <td>{{ $food->description }}</td>
                            <td>{{ $food->type }}</td>
                            <td><a href="" class="btn btn-success">Add</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection