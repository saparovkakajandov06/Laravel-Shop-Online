@extends('auth.layouts.master')

@section('title', 'Kategoriýa ' . $category->name)

@section('content')
    <div style="margin-top: 10%;" class="col-md-12">
        <h1 style="color: #2c2172;">Kategoriýa {{ $category->name }}</h1>
        <table class="table">
            <tbody>
            <tr style="color: #2c2172;">
                <th>
                    Meýdany
                </th>
                <th>
                    Mazmuny
                </th>
            </tr>
            <tr style="color: #2c2172;">
                <td>ID</td>
                <td>{{ $category->id }}</td>
            </tr>
            <tr style="color: #2c2172;">
                <td>Kod</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr style="color: #2c2172;">
                <td>Ady</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr style="color: #2c2172;">
                <td>Kategoriýa ady</td>
                <td>{{ $category->name_en }}</td>
            </tr>
            <tr style="color: #2c2172;">
                <td>Mazmuny</td>
                <td>{{ $category->description }}</td>
            </tr>
            <tr style="color: #2c2172;">
                <td>Kategoriýanyň mazmuny</td>
                <td>{{ $category->description_en }}</td>
            </tr>
            <tr style="color: #2c2172;">
                <td>Suraty</td>
                <td><img src="{{ url('storage/'.$category->image) }}" alt="Surat"
                         height="240px"></td>
            </tr>
            <tr style="color: #2c2172;">
                <td>Harydyň mukdary</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
