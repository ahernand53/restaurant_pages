@extends('layouts.app')

@section('content')

    <div class="container">
        @if(isset($message))
            <div class="alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">Menu</th>
                    <th scope="col" class="text-center">Dia</th>
                    <th scope="col" class="text-center">Promocion</th>
                    <th scope="col" class="text-center"></th>
                    <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td class="text-center">{{ $menu->id }}</td>
                        <td class="text-center">{{ $menu->dia }}</td>
                        <td class="text-center">{{ App\Promotion::find($menu->promotion_id)->promotion }}%</td>
                        <th scope="col" class="text-center"><a class="btn" href="search/{{ $menu->id }}"><i class="far fa-eye"></i></a></th>
                            <th>
                                <form action="delete/" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $menu->id }}">
                                    <button class="btn" style="color: red;"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </th>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection