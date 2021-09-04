<!doctype html>
<html lang="en">
   <head>
      <link rel="stylesheet" href="{{asset('js/plugins/slick-carousel/slick.css')}}">
      <link rel="stylesheet" href="{{asset('js/plugins/slick-carousel/slick-theme.css')}}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
      <link rel="stylesheet" href="{{asset('css/oneui.min.css')}}">

      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      @yield('css')

    </head>
   <body>

  @yield('content')




      <script src="{{asset('js/oneui.core.min.js')}}"></script>
      <script src="{{asset('js/oneui.app.min.js')}}"></script>
      <script src="{{asset('js/plugins/slick-carousel/slick.min.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @yield('js')
   </body>
</html>
