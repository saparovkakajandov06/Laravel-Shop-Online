@extends('auth.layouts.master')

@section('title', 'Harytlar')

@section('content')
    <div style="margin-top: 10%;" class="col-md-12">
        <h1 style="color: #2c2172;">Harytlar</h1>
        <table class="table">
            <tbody>
            <tr style="color: #2c2172;">
                <th>
                    #
                </th>
                <th>
                    Kod
                </th>
                <th>
                    Ady
                </th>
                <th>
                    Kategoriýa
                </th>
                <th>
                  Harydyň mukdary
                </th>
                <th>
                    Sazlamalar
                </th>
            </tr>
            @foreach($products as $product)
                <tr style="color: #2c2172;">
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                <a style="background-color: #2c2172; color: white;" class="btn " type="button"
                                   href="{{ route('products.show', $product) }}">Giňişleýin</a>
                                <a class="btn btn-success" type="button"
                                   href="{{ route('skus.index', $product) }}">Skus</a>
                                <a class="btn btn-warning" type="button"
                                   href="{{ route('products.edit', $product) }}">Üýtgetmek</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Pozmak"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
        <a style="background-color: #2c2172; color: white;" class="btn " type="button" href="{{ route('products.create') }}">Haryt goşmak</a>
    </div>
@endsection
