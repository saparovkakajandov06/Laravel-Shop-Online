@extends('auth.layouts.master')

@section('title', 'Mazmunyň görnüşleri')

@section('content')
    <div style="margin-top: 10%; color: #2c2172" class="col-md-12">
        <h1>Mazmunyň görnüşleri</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Mazmuny
                </th>
                <th>
                    Ady
                </th>
                <th>
                    Sazlamalar
                </th>
            </tr>
            @foreach($propertyOptions as $propertyOption)
                <tr>
                    <td>{{ $propertyOption->id }}</td>
                    <td>{{ $property->name }}</td>
                    <td>{{ $propertyOption->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('property-options.destroy', [$property, $propertyOption]) }}" method="POST">
                                <a style="background-color: #2c2172; color: white;" class="btn " type="button" href="{{ route('property-options.show', [$property, $propertyOption]) }}">Giňişleýin</a>
                                <a class="btn btn-warning" type="button" href="{{ route('property-options.edit', [$property, $propertyOption]) }}">Üýtgetmek</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Pozmak"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $propertyOptions->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('property-options.create', $property) }}">Mazmunyň görnüşini goşmak</a>
    </div>
@endsection
