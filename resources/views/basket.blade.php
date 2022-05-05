@extends('layouts.master')

@section('title', __('basket.cart'))

@section('content')

    <h1 style="color: #2b11ff; font-family: 'Apple Color Emoji';">@lang('basket.cart')</h1>
    <p style="color: #2b11ff; font-size: medium; font-weight: bold;">@lang('basket.ordering')</p>

    <div class="col-lg-12 col-lg-12">
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="color: #2b11ff;">@lang('basket.name')</th>
                <th style="color: #2b11ff;">@lang('basket.count')</th>
                <th style="color: #2b11ff;">@lang('basket.price')</th>
                <th style="color: #2b11ff;">@lang('basket.cost')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->skus as $sku)
                <tr>
                    <td>
                        <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                            <img height="56px"  src="{{ url('storage/'.$sku->product->image) }}">
                            {{ $sku->product->__('name') }}
                        </a>
                    </td>
                    <td style="color: #2b11ff; font-weight: bold;"><span class="badge">{{ $sku->countInOrder }}</span>
                        <div class="btn-group form-inline">
                            <form action="{{ route('basket-remove', $sku) }}" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true">-</span></button>
                                @csrf
                            </form>

                            <form action="{{ route('basket-add', $sku) }}" method="POST">
                                <button style="background-color:#2b11ff " type="submit" class="btn "
                                        href=""><span style="color: white;"
                                        class="glyphicon glyphicon-plus" aria-hidden="true">+</span></button>
                                @csrf
                            </form>
                        </div>
                    </td>
                    <td style="color: #2b11ff; font-weight: bold; font-size: medium;">{{ $sku->price }} {{ $currencySymbol->symbol }}</td>
                    <td style="color: #2b11ff; font-weight: bold; font-size: medium;">{{ $sku->price * $sku->countInOrder }} {{ $currencySymbol->symbol }}</td>
                </tr>
            @endforeach
            <tr>
                <td style="color: #2b11ff; font-weight: bold; font-size: medium;" colspan="3">@lang('basket.full_cost'):</td>
                <td style="color: #2b11ff; font-weight: bold; font-size: medium;">{{ $order->getFullSum() }} {{ $currencySymbol->symbol }}</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a style="color: white; background-color: darkblue;" type="button" class="btn" href="{{ route('basket-place') }}">@lang('basket.place_order')</a>
        </div>
    </div>
    </div>

@endsection
