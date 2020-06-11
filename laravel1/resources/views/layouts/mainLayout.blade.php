<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src=" {{asset('js/app.js') }}"></script>
    <title>Laravel - MainLayout</title>
  </head>
  <body>
    <div class="row">
      <div class="header">
        @include('assets.header')
      </div>
    </div>
    <div class="row">
      <div class="content">
        @yield('content')
      </div>
    </div>
    <div class="row">
      <div class="footer">
        @include('assets.footer')
      </div>
    </div>
  </body>
</html>
