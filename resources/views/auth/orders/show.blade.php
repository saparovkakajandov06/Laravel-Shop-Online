@extends('auth.layouts.master')

@section('title', 'Sargyt ' . $order->id)

@section('content')
    <div style="width: 120%; margin-top: 10%;" class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <h1 style="color: #2c2172;">Sargyt №: {{ $order->id }}</h1>
                    <h3 style="color: #2c2172;">Sargyt Identifikator: <label style="color: darkred;">{{ $order->slug}} </label></h3>
                    <p style="color: #2c2172;">Müşderi: <b>{{ $order->name }} {{ $order->surname }}</b></p>
                    <p style="color: #2c2172;">Telefon belgisi: <b>{{ $order->phone }}</b></p>
                    <p style="color: #2c2172;">Müşderiniň salgysy: <b>{{ $order->address }}</b></p>
                    <p style="color: #2c2172;">Sargyda kesgitlenen möhlet: <b>{{ $order->pro_storage }}</b></p>
                    <table class="table table-striped">
                        <thead>
                        <tr style="color: #2c2172;">
                            <th>Ady</th>
                            <th>Mukdary</th>
                            <th>Bahasy</th>
                            <th>Jemi bahasy</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($skus as $sku)
                            <tr style="color: #2c2172;">
                                <td>
                                    <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                                        <img height="56px"
                                             src="{{ url('storage/'.$sku->product->image) }}">
                                        {{ $sku->product->name }}
                                    </a>
                                </td>
                                <td><span class="badge"> {{ $sku->pivot->count }}</span></td>
                                <td>{{ $sku->pivot->price }} {{ $order->currency->symbol }}</td>
                                <td>{{ $sku->pivot->price * $sku->pivot->count }} {{ $order->currency->symbol }}</td>
                            </tr>
                        @endforeach
                        <tr style="color: #2c2172;">
                            <td colspan="3">Jemi bahasy:</td>
                            <td>{{ $order->sum }} {{ $order->currency->symbol }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
