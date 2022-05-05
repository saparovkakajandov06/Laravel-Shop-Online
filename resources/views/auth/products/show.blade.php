@extends('auth.layouts.master')

@section('title', 'Haryt ' . $product->name)

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12" >
        <h1>{{ $product->name }}</h1>
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
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>Kod</td>
                <td>{{ $product->code }}</td>
            </tr>
            <tr>
                <td>Ady</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Haryt ady</td>
                <td>{{ $product->name_en }}</td>
            </tr>
            <tr>
                <td>Mazmuny</td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>Harydyň mazmuny</td>
                <td>{{ $product->description_en }}</td>
            </tr>
            <tr>
                <td>Surat</td>
                <td><img src="{{ url('storage/'.$product->image) }}" height="240px"></td>
            </tr>
            <tr>
                <td>Kategoriýa</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            <tr>
                <td>Derejeleri</td>
                <td>
                    @if($product->isNew())
                        <span class="badge badge-success">Täze</span>
                    @endif

                    @if($product->isRecommend())
                        <span class="badge badge-warning">Maslahat berilýän</span>
                    @endif

                    @if($product->isHit())
                        <span class="badge badge-danger">Meşhur!</span>
                    @endif
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
