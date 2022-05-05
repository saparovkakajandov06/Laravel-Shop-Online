@extends('auth.layouts.master')

@section('title', 'Harydyň mukdary')

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12" >
        <h1>Harydyň mukdary</h1>
        <h2>{{ $product->name }}</h2>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Haryt ady
                </th>
                <th>
                    Harydyň rus ady
                </th>
                <th>
                    Haryt bahasy
                </th>
                <th>
                    Haryt mukdary
                </th>
                <th>
                    Sazlamalar
                </th>
            </tr>
            @foreach($skus as $sku)
                <tr>
                    <td>{{ $sku->id }}</td>
                    <td>{{ $sku->name_en }}</td>
                    <td>{{ $sku->name_ru }}</td>
                    <td>{{ $sku->price }}</td>
                    <td>{{ $sku->count }}</td>
                    {{--<td>{{ $sku->propertyOptions->map->name->implode(', ') }}</td>--}}
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('skus.destroy', [$product, $sku]) }}" method="POST">
                                <a style="background-color:#2c2172; color: white; " class="btn " type="button" href="{{ route('skus.show', [$product, $sku]) }}">Giňişleýin</a>
                                <a class="btn btn-warning" type="button" href="{{ route('skus.edit', [$product, $sku]) }}">Üýtgetmek</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Pozmak"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $skus->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('skus.create', $product) }}">Sku Goşmak</a>
    </div>
@endsection
