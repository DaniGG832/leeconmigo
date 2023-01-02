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
      display: flex;
      /* flex-direction: row; */
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 0cm;
      left: 0cm;
      right: 0cm;
      height: 3cm;
      background-color: #93c5fd;
      color: white;
      text-align: center;
      line-height: 30px;
    }

    header img{
      height: 2.5cm;
      margin-right: 0.5cm;
    }

    div {
      /* border: red solid 0.2cm; */
      display: flex;
      justify-content: center;
    }
     
    div img {
      margin-top : .35cm ;

      height: 6cm;
      width: auto;
    }

    span {
      margin: .2cm
    }

    footer {
      position: fixed;
      bottom: 0cm;
      left: 0cm;
      right: 0cm;
      height: 3cm;
      background-color: #93c5fd;
      color: white;
      text-align: center;
      line-height: 35px;
    }

  </style>
</head>
<body>





  <header>
    {{-- <img class="h-16" src="{{public_path('img/logo/logo3.png')}}" alt=""> --}}
    <img class="h-16" src="{{asset('img/logo/logo3.png')}}" alt=""> {{-- pruebas --}}
    <h1>LeeConmigo</h1>
  </header>

  <main>
    {{-- <h1>Contenido</h1> --}}
    <div>
      <img src="{{$libro->img ? asset($libro->img) : asset('img/book-1977235_960_720.webp')}}" alt="imagen ficha libro"> {{-- pruebas --}}

      {{-- <img src="{{$libro->img ? public_path($libro->img) : public_path('img/book-1977235_960_720.webp')}}" alt="imagen ficha libro"> --}}
    </div>

    <h1>{{$libro->titulo}}</h1>

    <p> {{$libro->sinopsis}}</p>
    <p> {{$libro->descripcion}}</p>

{{-- TODO: terminar la vista pdf (ruta de prueba, visualizando una vista, no el pdf) --}}
    <p><span>Autor:</span>  {{$libro->autor->name}}</p>
    <p> {{$libro->titulo}}</p>
    <p>{{$libro->titulo}}</p>
    <p>{{$libro->titulo}}</p>

    <div>
      @foreach ($libro->temas as $tema)
          <span>#{{$tema->name}} </span>
      @endforeach
    </div>
  </main>

  <footer>
    <h1>www.leeconmigo.es</h1>
  </footer>

</body>
</html>
