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
  <div x-data="loading" >
    <div x-show="open" class="bg-blue-50 flex justify-center items-center fixed top-0 left-0 right-0 z-50  w-full p-4 h-full ">
      <div role="flex content-center">
        <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
    </div>

  </div>
  <div class="min-h-screen bg-blue-100">

    <x-nav></x-nav>

    @if (!auth()->check())

    @if (Route::has('login'))
    <div class="hidden absolute top-0 right-0 px-6 py-4 sm:block">
      @auth
      <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700  underline">Dashboard</a>
      @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 -500 underline">Inicia sesión</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a>
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
