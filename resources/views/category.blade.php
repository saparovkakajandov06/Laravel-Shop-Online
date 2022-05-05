@extends('layouts.master')

@section('title', __('main.category') . $category->__('name'))

@section('content')
    <h1 style="color: darkblue;">
        {{$category->__('name')}}
    </h1>
    <p style="color: darkblue;">
        {{ $category->__('description') }}
    </p>
    <div class="row">
        @foreach($category->products->map->skus->flatten() as $sku)
            @include('layouts.card', compact('sku'))
        @endforeach
    </div>
@endsection
