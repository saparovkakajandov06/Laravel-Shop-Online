@extends('auth.layouts.master')

@section('title', 'Sku ' . $skus->name)

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12">
        <h1>Sku {{ $skus->product->name }}</h1>
        <h2>{{ $skus->propertyOptions->map->name->implode(', ') }}</h2>
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
                <td>{{ $skus->id }}</td>
            </tr>
            <tr>
                <td>Ady</td>
                <td>{{ $skus->name_en }}</td>
            </tr>
            <tr>
                <td>Rus</td>
                <td>{{ $skus->name_ru }}</td>
            </tr>
            <tr>
                <td>Bahasy</td>
                <td>{{ $skus->price }}</td>
            </tr>
            <tr>
                <td>Mukdary</td>
                <td>{{ $skus->count }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
