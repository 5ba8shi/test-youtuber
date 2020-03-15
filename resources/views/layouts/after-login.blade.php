<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="utf-8">
  <title>WW</title>
  <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <meta name="description" content="あなたの好きなYoutuberの軌跡を投稿しよう">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="/css/after-login.css" rel="stylesheet">
  <!-- JS -->
    <link rel="stylesheet" type="text/js" href="js/index.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('/js/main.js') }}"></script> 
  </head>
  <body>
    @yield('content')
  </body>
</html>