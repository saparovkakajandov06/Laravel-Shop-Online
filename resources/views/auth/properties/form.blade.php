@extends('auth.layouts.master')

@isset($property)
    @section('title', 'Mazmuny üýtgetmek ' . $property->name)
@else
    @section('title', 'Mazmun döretmek')
@endisset

@section('content')
    <div style="margin-top: 10%; color: #2c2172;" class="col-md-12">
        @isset($property)
            <h1>Mazmuny üýtgetmek <b>{{ $property->name }}</b></h1>
                @else
                    <h1>Mazmun döretmek</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($property)
                      action="{{ route('properties.update', $property) }}"
                      @else
                      action="{{ route('properties.store') }}"
                    @endisset
                >
                    <div>
                        @isset($property)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">Ady: </label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($property){{ $property->name }}@endisset">
                            </div>
                        </div>

                            <br>
                            <div class="input-group row">
                                <label for="name" class="col-sm-2 col-form-label">Mazmun ady: </label>
                                <div class="col-sm-6">
                                    @error('name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="name_en" id="name_en"
                                           value="@isset($property){{ $property->name_en }}@endisset">
                                </div>
                            </div>

                        <button style="background-color: #2c2172; color: white;" class="btn ">Ýatda sakla</button>
                    </div>
                </form>
    </div>
@endsection

