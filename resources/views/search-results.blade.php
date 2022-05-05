@extends('layouts.master')

@section('title', __('main.title'))

@section('content')


{{--<div class="container">
    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('succes_message')}}
        </div>
        @endif
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
        @endif
</div>--}}


<div class="col-12">
<h1 style="color: darkblue;" class="text-center">Gözleg boýunça jemi: {{--'{{request()->input('query')}}'--}} <span style="color: #28a745;">{{$skus->count()}} haryt</span> </h1>



    @foreach($skus as $sku )
        <div class="card m-3">
            <div class="card-header">
        <h3 style="color: darkblue;" class="card-title">{{ $sku->product->__('name') }}</h3>
            </div>
            <div class="card-body">
        <div><img style="height: 150px;" src="{{ url('storage/'.$sku->product->image) }}" alt="{{ $sku->product->__('name') }}"></div>
                <h3 style="color: darkblue;" class="mt-2">{{ $sku->price }} TMT</h3>
                <h4 style="color: darkblue;">{{ $sku->product->__('description') }}</h4>
        <form class="m-3" action="{{ route('basket-add', $sku) }}" method="POST">
            @if($sku->isAvailable())
                <button type="submit" class="btn btn-primary" role="button">@lang('main.add_to_basket')</button>
            @else
                @lang('main.not_available')
            @endif
            <a href="{{ route('sku',
                    [isset($category) ? $category->code :
                    $sku->product->category->code, $sku->product->code, $sku->id]) }}"
               class="btn btn-default"
               role="button">@lang('main.more')</a>
            @csrf
        </form>
            </div>
        </div>
        @endforeach

</div>




@endsection