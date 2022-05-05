@extends('auth.layouts.master')

@section('title', 'Kategoriýa')

@section('content')
    <div style="margin-top: 10%;" class="col-md-12">
        <h1 style="color: #2c2172;">Kategoriýa</h1>
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
                    Sazlamalar
                </th>
            </tr>
            @foreach($categories as $category)
                <tr style="color: #2c2172;">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a style="background-color: #2c2172; color: white;" class="btn" type="button" href="{{ route('categories.show', $category) }}">Giňişleýin</a>
                                <a  class="btn btn-warning" type="button" href="{{ route('categories.edit', $category) }}">Üýtgetmek</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Pozmak"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
        <a style="background-color: #2c2172; color: white;" class="btn" type="button"
           href="{{ route('categories.create') }}">Kategoriýa goşmak</a>
    </div>
@endsection
