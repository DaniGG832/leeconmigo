<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- mapa  leafletjs -->

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>



  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="{{asset("js/app.js")}}" defer></script>
  <script src="{{asset("js/alpine.js")}}"></script>
</head>
<body class="font-sans antialiased">
  <div class="min-h-screen bg-blue-100">

    <x-nav></x-nav>

    @if (!auth()->check())

    @if (Route::has('login'))
    <div class="hidden absolute top-0 right-0 px-6 py-4 sm:block">
      @auth
      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700  underline">Dashboard</a>
      @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 -500 underline">Log in</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
      @endif
      @endauth
    </div>
    @endif
    @endif


    <!-- Page Heading -->
    @if (isset($header))
    <header class="bg-white shadow  border-2 border-blue-400 bg-blue-300">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
      </div>
    </header>
    @endif
    <!-- Page Content -->
    <main class="fondo">
      <x-session></x-session>
      {{ $slot }}

    </main>
    <x-footer></x-footer>
  </div>
</body>

</html>
