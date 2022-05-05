@extends('auth.layouts.master')

@section('title', 'Mazmuny')

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12">
        <h1>Mazmuny</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Ady
                </th>
                <th>
                    Sazlamalar
                </th>
            </tr>
            @foreach($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('properties.destroy', $property) }}" method="POST">
                                <a style="background-color: #2c2172; color: white;" class="btn " type="button" href="{{ route('properties.show', $property) }}">Giňişleýin</a>
                                <a class="btn btn-warning" type="button" href="{{ route('properties.edit', $property) }}">Üýtgetmek</a>
                                <a class="btn btn-primary" type="button" href="{{ route('property-options.index', $property) }}">Mazmunyň kesgidi </a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Pozmak"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $properties->links() }}
        <a style="background-color: #2c2172; color: white;" class="btn " type="button"
           href="{{ route('properties.create') }}">Mazmun goşmak</a>
    </div>
@endsection
