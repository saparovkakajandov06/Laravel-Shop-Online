@extends('layouts.master')

@section('title', 'Ulgama girmek')

@section('content')

    <style>
        body{
            background-image: url('images/ikon.jpg');
            background-repeat: no-repeat;
            background-position: top right;
            background-size: initial;
            background-attachment: fixed;
        }
    </style>

    <div   class="col-lg-8">
        <div class="card">
            <div style="background: #2c28b1;color: white; font-size: large; font-weight: bold;" class="card-header">Ulgama girmek</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" aria-label="Login">
                    @csrf
                    <div class="form-group row">
                        <label style="color: #2c2172; font-size: large; font-weight: bold;" for="email" class="col-sm-4 col-form-label text-md-right">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control"
                                   name="email" value="" required autofocus>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label style="color: #2c2172; font-size: large; font-weight: bold;" for="password" class="col-md-4 col-form-label text-md-right">Parol</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control"
                                   name="password" required>

                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button style="background-color: #2c2172; color: white;" type="submit" class="btn">
                                Girmek
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

@endsection
