@extends('auth.layouts.master')

@isset($category)
    @section('title', 'Kategoriýany üýtgetmek ' . $category->name)
@else
    @section('title', 'Kategoriýa döretmek')
@endisset

@section('content')
    <div style="margin-top: 10%;" class="col-md-12">
        @isset($category)
            <h1 style="color: #2c2172;">Kategoriýany üýtgetmek <b>{{ $category->name }}</b></h1>
                @else
                    <h1 style="color: #2c2172;">Kategoriýa döretmek</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($category)
                      action="{{ route('categories.update', $category) }}"
                      @else
                      action="{{ route('categories.store') }}"
                    @endisset
                >
                    <div>
                        @isset($category)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label style="color: #2c2172;" for="code" class="col-sm-2 col-form-label">Kod: </label>
                            <div class="col-sm-6">
                                @error('code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="code" id="code"
                                       value="{{ old('code', isset($category) ? $category->code : null) }}">
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <label style="color: #2c2172;" for="name" class="col-sm-2 col-form-label">Ady: </label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($category){{ $category->name }}@endisset">
                            </div>
                        </div>

                            <br>
                            <div class="input-group row">
                                <label style="color: #2c2172;" for="name" class="col-sm-2 col-form-label">Kategoriýa ady: </label>
                                <div class="col-sm-6">
                                    @error('name_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" class="form-control" name="name_en" id="name_en"
                                           value="@isset($category){{ $category->name_en }}@endisset">
                                </div>
                            </div>

                            <br>
                        <div class="input-group row">
                            <label style="color: #2c2172;" for="description" class="col-sm-2 col-form-label">Mazmuny: </label>
                            <div class="col-sm-6">
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
							<textarea name="description" id="description" cols="72"
                                      rows="7">@isset($category){{ $category->description }}@endisset</textarea>
                            </div>
                        </div>
                        <br>

                            <div class="input-group row">
                                <label style="color: #2c2172;" for="description" class="col-sm-2 col-form-label">Kategoriýa mazmuny: </label>
                                <div class="col-sm-6">
                                    @error('description_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <textarea name="description_en" id="description_en" cols="72"
                                              rows="7">@isset($category){{ $category->description_en }}@endisset</textarea>
                                </div>
                            </div>
                            <br>

                        <div class="input-group row">
                            <label style="color: #2c2172;" for="image" class="col-sm-2 col-form-label">Surat: </label>
                            <div class="col-sm-10">
                                <label  style="color: white; background-color: #2c2172;" class="btn btn-default btn-file">
                                    Ýüklemek <input type="file" style="display: none;" name="image" id="image">
                                </label>
                            </div>
                        </div>
                        <button style="color: white; background-color: #2c2172;" class="btn ">Ýatda sakla</button>
                    </div>
                </form>
    </div>
@endsection

