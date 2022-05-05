@extends('layouts.master')

@section('title', __('basket.place_order'))

@section('content')
    <h1 style="color: #2b11ff; font-family: 'Apple Color Emoji';">@lang('basket.approve_order'):</h1>
    <div class="container">
        <div class="row justify-content-center">
            <p style="color: #2b11ff; font-size: large; font-weight: bold;">@lang('basket.full_cost'): <b>{{ $order->getFullSum() }} {{ $currencySymbol->symbol }}</b>    <p style="color: #2b11ff; font-size: large; font-weight: bold;">@lang('basket.personal_data'):</p></p>

            {{--<form action="{{ route('basket-confirm') }}" method="POST">
                <div>
                    <p style="color: #2b11ff; font-size: large; font-weight: bold;">@lang('basket.personal_data'):</p>

                    <div class="container">
                        <div style="margin-top: 3%;" class="form-group">
                            <label  style="margin-left: -105%; color: #2b11ff; font-size: large; font-weight: bold;" for="name" class="control-label">@lang('basket.data.name'): </label>
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div style="margin-top: -5%;" class="col-lg-6">
                                <input style="border-color: #2b11ff;" type="text" name="name" id="name" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                      <div style="margin-top: 3%;" class="form-group">
                            <label  style="margin-left: -108%; color: #2b11ff; font-size: large; font-weight: bold;" for="surname" class="control-label">@lang('basket.data.surname'): </label>
                            @error('surname')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div style="margin-top: -5%;" class="col-lg-6">
                                <input style="border-color: #2b11ff;" type="text" name="surname" id="surname" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div style="margin-top: 3%;" class="form-group">
                            <label  style="margin-left: -115%; color: #2b11ff; font-size: large; font-weight: bold;" for="phone" class="control-label">@lang('basket.data.phone'): </label>
                            @error('phone')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div style="margin-top: -5%;" class="col-lg-6">
                                <input style="border-color: #2b11ff;" type="number" name="phone" id="phone" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div style="margin-top: 3%;" class="form-group">
                            <label  style="margin-left: -115%; color: #2b11ff; font-size: large; font-weight: bold;" for="address" class="control-label">@lang('basket.data.address'): </label>
                            @error('address')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div style="margin-top: -5%;" class="col-lg-6">
                                <input style="border-color: #2b11ff;" type="text" name="address" id="address" value="" class="form-control">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div style="margin-top: 3%;" class="form-group">
                            <label  style="margin-left: -135%; color: #2b11ff; font-size: large; font-weight: bold;" for="pro_storage" class="control-label">@lang('basket.data.pro_storage'): </label>
                            @error('pro_storage')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div style="margin-top: -5%;" class="col-lg-6">
                                <input style="border-color: #2b11ff;" type="number" name="pro_storage" id="pro_storage" value="" class="form-control">
                            </div>
                        </div>


                    @csrf
                    <input style="background-color: #2b11ff; color: white;" type="submit" class="btn" value="@lang('basket.approve_order')">
                </div>
            </form>--}}


            <div class="col-xl-12 col-md-12">
                <div class="container" >
                    <form role="form" action="{{ route('basket-confirm') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-sm-9">
                                <div class="tab-content" style="margin-left: 6%;">
                                    <div class="tab-pane active" id="home">
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name"><h5 style="color: #2b11ff;">@lang('basket.data.name'):</h5></label>
                                                    @error('name')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                    <input style="border-color:#2b11ff;" type="text" class="form-control" name="name" id="name" placeholder="Adyňyz. . ." title="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="surname"><h5 style="color: #2b11ff;">@lang('basket.data.surname'):</h5></label>
                                                    @error('surname')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                    <input style="border-color:#2b11ff;" type="text" class="form-control" name="surname" id="surname" placeholder="Familiýaňyz. . ." title="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone"><h5 style="color: #2b11ff;">@lang('basket.data.phone'):</h5></label>
                                                    @error('phone')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                    <input style="border-color:#2b11ff;" type="number" class="form-control" name="phone" id="phone" placeholder="Telefon ykjam belgiňiz. . ." title="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address"><h5 style="color: #2b11ff;">@lang('basket.data.address'):</h5></label>
                                                    @error('address')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                    <input style="border-color:#2b11ff;" type="text" class="form-control" name="address" id="address" placeholder="Öý salgyňyz. . ." title="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pro_storage"><h5 style="color: #2b11ff;">@lang('basket.data.pro_storage'):</h5></label>
                                                    @error('pro_storage')
                                                    <div class="alert alert-danger">{{$message}}</div>
                                                    @enderror
                                                    <input style="border-color:#2b11ff;" type="number" class="form-control" name="pro_storage" id="pro_storage" placeholder="Sargyt üçin kesgitlenen möhlet. . ." title="">
                                                </div>
                                            </div>
                                        </div>


                                        @csrf
                                        <input style="background-color: #2b11ff; color: white;" type="submit" class="btn" value="@lang('basket.approve_order')">
                                    </div>
                                </div>
                                <hr>
                            </div><!--/col-9-->
                        </div><!--/row-->
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
