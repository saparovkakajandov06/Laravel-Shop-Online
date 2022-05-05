<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico-cart.png')}}" />

    <title>{{--@lang('main.online_shop')--}}AkÝol: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

   
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
      <link rel="stylesheet" href="{{ asset('fontawesome5/css/font-awesome.min.css') }}"/>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

     <script src="{{asset('js/jquery.min.js')}}"></script>
     <script src="{{asset('js/superfish.min.js')}}"></script>
     <script src="{{asset('js/wow.min.js')}}"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/sticky.js')}}"></script>
     <script src="{{asset('js/main.js')}}"></script>

</head>
<body>


 <header  id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{ route('index') }}" class="scrollto">Ak<span>Ýol</span></a></h1>
            </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a style="color: darkblue;" href="{{ route('index') }}">@lang('main.online_shop')</a></li>
          <li><a style="color: darkblue;" href="{{ route('index') }}">@lang('main.all_products')</a></li>
          <li><a style="color: darkblue;" href="{{route('categories')}}">@lang('main.categories')</a></li>
          <li><a style="color: darkblue;" href="{{route('basket')}}">@lang('main.cart')</a></li>

          
          
             {{--  @guest
                            <li><a href="{{ route('login') }}">@lang('main.login')</a></li>
                        @endguest--}}
                        @auth
                            @admin
                            <li><a style="color: darkblue;" href="{{ route('home') }}">@lang('main.admin_panel')</a></li>
                        @else
                            <li><a style="color: darkblue;" href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>
                            @endadmin
                            <li><a style="color: darkblue;" href="{{ route('get-logout') }}">@lang('main.logout')</a></li>
                        @endauth

            <li><a class="btn" style="background-color: darkblue; color: white;" href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a></li>
              
        </ul>
      </nav>
    </div>
  </header>

<div style="margin-top: 3%;" class="text-xl-center">
<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p  class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>
</div>


  <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Habarlaşmak üçin</h2>
          <p style="color: darkblue;">Halkymyzyň ýaşaýşyny has-da ýokary derejeli amatlyklary gazandyrmak we rejeli peýdalandyrmak üçin ýurdumyzda kiçi we orta telekeçiligi ösdürmekde <b> Internet marketing </b> gatlagyny ýokarlandyrýarys.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="fa fa-home"></i>
              <h3 style="color: darkblue;">Biziň salgymyz</h3>
              <address style="color: darkblue;">Aşgabat şäheri, 30-nji mkr, Çernýahowski 4/7</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="fa fa-volume-control-phone"></i>
              <h3 style="color: darkblue;">Telefon belgimiz</h3>
              <p ><a style="color: darkblue;" href="tel:+993 61-09-07-65">+993 61-09-07-65</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="fa fa-google-plus-circle "></i>
              <h3 style="color: darkblue;">Elektron salgymyz</h3>
              <p><a style="color: darkblue;" href="mailto:akyol@mail.ru">akyol@mail.ru</a></p>
            </div>
          </div>

        </div>
      </div>

     

    </section>

<footer id="footer">
    <div class="container">
      <div class="copyright">
       Copyright &copy; <script>document.write(new Date().getFullYear());</script>. Ähli hukuklar goralan
      </div>
      <div class="credits">
      
       Produced <a href="#">Ak_Ýol</a>
      </div>
    </div>
  </footer>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</body>
</html>
