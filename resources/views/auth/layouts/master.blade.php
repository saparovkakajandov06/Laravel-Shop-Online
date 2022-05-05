<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/ico-cart.png')}}" />

    <title>Administrator: @yield('title')</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
   
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
<div id="app">
 

  

    <header  id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{ route('index') }}" class="scrollto">Ak<span>Ýol</span></a></h1>
            </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ route('index') }}">@lang('main.online_shop')</a></li>
          <li><a href="{{ route('categories.index') }}">Kategoriýa</a></li>
          <li><a href="{{ route('products.index') }}">Harytlar</a></li>
          <li><a href="{{ route('properties.index') }}">Mazmuny</a></li>
          <li><a href="{{ route('home') }}">Sargytlar</a></li>
          <li><a href="{{ route('locale', __('main.set_lang')) }}">@lang('main.set_lang')</a></li>
          
          
               @guest                 
                            <li><a href="{{ route('login') }}">@lang('main.login')</a></li>
                        @endguest
                        @auth
                            @admin
                            <li><a href="{{ route('home') }}">@lang('main.admin_panel')</a></li>
                        @else
                            <li><a href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a></li>
                            @endadmin
                            <li><a href="{{ route('get-logout') }}">@lang('main.logout')</a></li>
                        @endauth          
              
        </ul>
      </nav>
    </div>
  </header>

    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                @yield('content')
            </div>
        </div>
    </div>



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


</div>
</body>
</html>
