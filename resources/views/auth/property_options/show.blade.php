@extends('auth.layouts.master')

@section('title', 'Mazmunyň görnüşi ' . $propertyOption->name)

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12">
        <h1>Mazmunyň görnüşi {{ $propertyOption->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Meýdany
                </th>
                <th>
                    Mazmuny
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $propertyOption->id }}</td>
            </tr>
            <tr>
                <td>Mazmuny</td>
                <td>{{ $propertyOption->property->name }}</td>
            </tr>
            <tr>
                <td>Ady</td>
                <td>{{ $propertyOption->name }}</td>
            </tr>
            <tr>
                <td>Mazmunyň görnüşiniň ady</td>
                <td>{{ $propertyOption->name_en }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
