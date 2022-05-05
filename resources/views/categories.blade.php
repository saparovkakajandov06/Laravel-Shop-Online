@extends('layouts.master')

@section('title', __('main.all_categories'))


@section('content')

    {{--<link href="{{asset('css/services.css')}}" rel="stylesheet">--}}

{{--
    @foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <img src="{{ url('storage/'.$category->image) }}" style="height: 200px;">
                <h2>{{ $category->__('name') }}</h2>
            </a>
            <p>
                {{ $category->__('description') }}
            </p>
        </div>
    @endforeach--}}

{{--
<div class="home" >
    <div class="home_slider_container">
        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image: url('images/home-left.png'); margin-left: 5%;"></div>
                <div class="home_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-6">
                                <div class="home_content_inner">
                                    <div class="home_title"><h1> @lang('main.categories')</h1></div>
                                    <div class="home_text">
                <p>
                    Hormatly Müşderiler, <br>
                    Siz aşakdaky kategoriýalar boýunça degişli
                    önümler bilen tanyş bolup hem-de <br>
<br>
                    <button  class="btn-block btn-outline-primary"> <a href="{{route('basket')}}">Sargyt edip bilersiňiz </a></button>
                </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="home_slider_progress"></div>
    </div>
</div>--}}


{{--categories--}}
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title"><h1 style="color: #2c2172; font-size: xx-large; font-weight: bold; font-family: Verdana;">@lang('main.categories')</h1></div>
            </div>
        </div>
        <div class="row services_row">

            <!-- Service -->
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-6 service_col">
                <a  href="{{ route('category', $category->code) }}">
                    <div style="height: 550px;" class="service text-center trans_200">
                        <div class="large"><img style="height: 300px;" class="large" src="{{ url('storage/'. $category->image) }}" alt=""></div>
                        <div style="color: #2c2172;" class="service_title trans_200"><h2 style="font-family: Gabriola;"> {{ $category->__('name') }}</h2> </div>
                        <div class="service_text">
                            <p style="color: #2c2172; font-weight: bold; font-family: Verdana;">{{ $category->__('description') }}</p>
                            <p>  @isset($sku->product->properties)
                @foreach ($sku->propertyOptions as $propertyOption)
                    <h4>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h4>
                @endforeach
            @endisset
                </p>
                        </div>
                    </div>
                </a>
            </div>
                @endforeach

        </div>
    </div>
</div>

{{--categories--}}

{{--<div style="background-color: rebeccapurple;" class=" col-12">
    <div  class="thumbnail">
   @foreach($categories as $category)
        <img src=" {{ url('storage/'. $category->image) }}">
        <div  class="caption">
            <a href="{{ route('category', $category->code) }}">
            <h3 style="color: #2b11ff;">{{ $category->__('name') }}</h3>
            </a>
            <p>
                {{ $category->__('description') }}
            </p>
            @isset($sku->product->properties)
                @foreach ($sku->propertyOptions as $propertyOption)
                    <h4>{{ $propertyOption->property->__('name') }}: {{ $propertyOption->__('name') }}</h4>
                @endforeach
            @endisset


        </div>
       @endforeach
    </div>
</div>--}}

@endsection
