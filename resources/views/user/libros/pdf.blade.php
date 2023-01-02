<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ficha PDF</title>
  <style>
    @page {
      margin: 0cm 0cm;
      font-family: Arial;
    }

    body {
      margin: 3cm 2cm 2cm;
    }

    header {
      position: fixed;
      top: 0cm;
      left: 0cm;
      right: 0cm;
      height: 2cm;
      background-color: #2a0927;
      color: white;
      text-align: center;
      line-height: 30px;
    }

    footer {
      position: fixed;
      bottom: 0cm;
      left: 0cm;
      right: 0cm;
      height: 2cm;
      background-color: #2a0927;
      color: white;
      text-align: center;
      line-height: 35px;
    }

  </style>
</head>
<body>

  <header>
  {{--   <img class="h-16" src="{{asset('img/logo/logo3.png')}}" alt=""> --}}
    <h1>Styde.net</h1>
  </header>

  <main>
    {{-- <h1>Contenido</h1> --}}
    <div>
      <img src="{{public_path($libro->img)}}" alt="imagen ficha libro">
    </div>

    <h1>{{$libro->titulo}}</h1>

  </main>

  <footer>
    <h1>www.styde.net</h1>
  </footer>

</body>
</html>
