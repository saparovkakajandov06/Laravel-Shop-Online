@extends('auth.layouts.master')

@section('title', 'Mazmuny ' . $property->name)

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12">
        <h1>Mazmuny {{ $property->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Meýdan
                </th>
                <th>
                    Mazmuny
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $property->id }}</td>
            </tr>
            <tr>
                <td>Ady</td>
                <td>{{ $property->name }}</td>
            </tr>
            <tr>
                <td>Mazmunyň ady</td>
                <td>{{ $property->name_en }}</td>
            </tr>
{{--            <tr>--}}
{{--                <td>Кол-во товаров</td>--}}
{{--                <td>{{ $property->products->count() }}</td>--}}
{{--            </tr>--}}
            </tbody>
        </table>
    </div>
@endsection
