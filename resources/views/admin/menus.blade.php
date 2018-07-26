@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">Menu</th>
                    <th scope="col" class="text-center">Dia</th>
                    <th scope="col" class="text-center">Promocion</th>
                    <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td class="text-center">{{ $menu->id }}</td>
                        <td class="text-center">{{ $menu->dia }}</td>
                        <td class="text-center">{{ App\Promotion::find($menu->promotion_id)->promotion }}%</td>
                        <th scope="col" class="text-center"><a class="btn btn-primary" href="search/{{ $menu->id }}">Ver</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection