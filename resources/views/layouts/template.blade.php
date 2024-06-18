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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.tailwindcss.css"> --}}
  @stack('after-styles')
</head>
<body class="bg-gray-100">
  @yield('content')
</div>

  <footer class="bg-white border shadow dark:bg-gray-900 flex justify-end">
    <div class="w-full  max-w-screen-xl p-4 md:flex md:items-center md:justify-end">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400 flex items-center">
        <img src="{{ asset('image/logo/logosim.png') }}" alt="" class="w-8 inline-block mr-2">
      </span>
    </div>
  </footer>
  @stack('before-scripts')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
  @stack('after-scripts')
</body>
</html>