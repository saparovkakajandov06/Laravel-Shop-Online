@extends('layouts.master')

@section('title', __('main.title'))

@section('content')


   <section class="upcoming_games_area">
        <div class="container">
                    <form class="mb-3" method="GET" action="{{route("index")}}">
                <div class="filters row">
                    <div class="col-md-4">
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="price_from">@lang('main.price_from')
                            <input class="form-control-sm" type="text" name="price_from" id="price_from" size="6" value="{{ request()->price_from}}">
                        </label>
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="price_to">@lang('main.to')
                            <input class="form-control-sm" type="text" name="price_to" id="price_to" size="6"  value="{{ request()->price_to }}">
                        </label>
                    </div>
                    <div align="left" class="col-sm-2 col-md-2">
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="hit">
                            <input type="checkbox" name="hit" id="hit" @if(request()->has('hit')) checked @endif> @lang('main.properties.hit')
                        </label>
                    </div>
                    <div align="left" class="col-sm-2 col-md-2">
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="new">
                            <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif> @lang('main.properties.new')
                        </label>
                    </div>
                    <div align="left" class="col-sm-2 col-md-2">
                        <label style="color: #2b11ff; font-size: medium; font-weight: bold;" for="recommend">
                            <input type="checkbox" name="recommend" id="recommend" @if(request()->has('recommend')) checked @endif> @lang('main.properties.recommend')
                        </label>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">@lang('main.filter')</button>
                        <a href="{{ route("index") }}" class="btn btn-warning">@lang('main.reset')</a>
                    </div>




                </div>
            </form>
            <div class="col-md-12 m-3">
                @include('search')
            </div>
            <div class="col-12">
                <hr class="list-inline">
            </div>
            <div class="row">
                @foreach($skus as $sku)
                    @include('layouts.card', compact('sku'))
                @endforeach
            </div>
            {{ $skus->links() }}

            </div>
    </section>

@endsection

