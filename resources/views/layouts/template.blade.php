<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title>@yield('title') | Ekskur</title>
  @stack('before-styles')
  <link rel="icon" href="{{ asset('image/logo/darklogopenabur.png') }}" type="image/png">
  @stack('after-styles')
</head>
<body>
  @yield('content')

  @stack('before-scripts')
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
  @stack('after-scripts')
</body>
</html>