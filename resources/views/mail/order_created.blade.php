<p>@lang('mail.order_created.dear') {{ $name }}</p>

<p>@lang('mail.order_created.your_order') {{ $fullSum }} @lang('mail.order_created.created')</p>

<table>
    <tbody>
    @foreach($order->skus as $sku)
        <tr>
            <td>
                <a href="{{ route('sku', [$sku->product->category->code, $sku->product->code, $sku]) }}">
                    <img height="56px" src="{{ url('storage/'.$sku->product->image) }}" >
                    {{ $sku->product->__('name') }}
                </a>
            </td>
            <td><span class="badge">{{ $sku->countInOrder }}</span>
                <div class="btn-group form-inline">
                    {!! $sku->product->__('description') !!}
                </div>
            </td>
            <td>{{ $sku->price }} {{ $currencySymbol->symbol }}.</td>
            <td>{{ $sku->getPriceForCount() }} {{ $currencySymbol->symbol}}.</td>
        </tr>
    @endforeach
    </tbody>
</table>
