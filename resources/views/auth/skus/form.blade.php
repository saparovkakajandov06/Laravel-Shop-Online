@extends('auth.layouts.master')

@isset($skus)
    @section('title', 'Sku üýtgetmek ' . $skus->name)
@else
    @section('title', 'Sku goşmak')
@endisset

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12">
        @isset($skus)
            <h1>Sku üýtgetmek <b>{{ $skus->name }}</b></h1>
        @else
            <h1>Sku goşmak</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($skus)
              action="{{ route('skus.update', [$product, $skus]) }}"
              @else
              action="{{ route('skus.store', $product) }}"
            @endisset
        >
            <div>
                @isset($skus)
                    @method('PUT')
                @endisset
                @csrf

                    <div class="input-group row">
                        <label for="name_en" class="col-sm-2 col-form-label">Ady: </label>
                        <div class="col-sm-2">
                            @include('auth.layouts.error', ['fieldName' => 'name_en'])
                            <input type="text" class="form-control" name="name_en"
                                   value="@isset($skus){{ $skus->name_en }}@endisset">
                        </div>
                    </div>
                    <div class="input-group row">
                        <label for="name_ru" class="col-sm-2 col-form-label">Rus ady: </label>
                        <div class="col-sm-2">
                            @include('auth.layouts.error', ['fieldName' => 'name_ru'])
                            <input type="text" class="form-control" name="name_ru"
                                   value="@isset($skus){{ $skus->name_ru }}@endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="price" class="col-sm-2 col-form-label">Bahasy: </label>
                        <div class="col-sm-2">
                            @include('auth.layouts.error', ['fieldName' => 'price'])
                            <input type="text" class="form-control" name="price"
                                   value="@isset($skus){{ $skus->price }}@endisset">
                        </div>
                    </div>
                    <div class="input-group row">
                        <label for="count" class="col-sm-2 col-form-label">Mukdary: </label>
                        <div class="col-sm-2">
                            @include('auth.layouts.error', ['fieldName' => 'count'])
                            <input type="text" class="form-control" name="count"
                                   value="@isset($skus){{ $skus->count }}@endisset">
                        </div>
                    </div>
                    <br>

                @foreach ($product->properties as $property)
                    <div class="input-group row">
                        <label for="property_id[{{ $property->id }}]" class="col-sm-2 col-form-label">{{ $property->name }}: </label>
                        <div class="col-sm-6">
                            <select name="property_id[{{ $property->id }}]" class="form-control">
                                @foreach($property->propertyOptions as $propertyOption)
                                    <option value="{{ $propertyOption->id }}"
                                        @isset($skus)
                                        @if($skus->propertyOptions->contains($propertyOption->id))
                                            selected
                                        @endif
                                        @endisset
                                    >{{ $propertyOption->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endforeach

                <button class="btn btn-success">Ýatda sakla</button>
            </div>
        </form>
    </div>
@endsection

