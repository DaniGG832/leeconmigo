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
      background-color: #93c5fd;
      color: white;
      text-align: center;
      line-height: 30px;
    }


    main div {
      /*   border: #93c5fd solid 1px; */
      text-align: center;
    }

    div img {
      height: 6cm;
      width: auto;
    }

    span {
      margin: .2cm;
      color: gray;
    }

    footer {
      position: fixed;
      bottom: 0cm;
      left: 0cm;
      right: 0cm;
      height: 2cm;
      background-color: #93c5fd;
      color: white;
      text-align: center;
      /*   line-height: 35px; */
    }

    .original {
      font-size: .5cm;
    }

    #temas {

      text-align: center;

    }

    #temas p {
      margin: 0.1cm;
      color: gray;
      float: left;
    }

  </style>
</head>
<body>





  <header>
    <div>

      {{-- <img class="h-16" src="{{public_path('img/logo/logo3.png')}}" alt=""> --}}
      {{-- <img class="h-16" src="{{asset('img/logo/logo3.png')}}" alt=""> --}} {{-- pruebas --}}
      <h1>LeeConmigo</h1>
    </div>
  </header>

  <main>
    {{-- <h1>Contenido</h1> --}}
    <div>
      {{-- <img src="{{$libro->img ? asset($libro->img) : asset('img/book-1977235_960_720.webp')}}" alt="imagen ficha libro"> --}} {{-- pruebas --}}

      <img src="{{$libro->img ? public_path($libro->img) : public_path('img/book-1977235_960_720.webp')}}" alt="imagen ficha libro">
    </div>

    <h2>{{$libro->titulo}}<span class="original">{{$libro->titulo_original ? '( '.$libro->titulo_original.' )' :''}}</span></h2>

    <p> {{$libro->sinopsis}}</p>
    <p> {{$libro->descripcion}}</p>

    {{-- TODO: terminar la vista pdf (ruta de prueba, visualizando una vista, no el pdf) --}}
    <p><span>Autor: </span> {{$libro->autor->name}}</p>
    <p><span>Ilustrador: </span> {{$libro->ilustrador->name}}</p>
    <p><span>ISBN: </span> {{$libro->ISBN13}} {{ $libro->ISBN13&&$libro->ISBN10 ? '/' : '' }} {{$libro->ISBN10}}</p>
    <p><span>Editorial: </span> {{$libro->editorial->name}}</p>
    <p><span>Edad recomendada: </span> {{$libro->edad->descripcion}}</p>
    <p><span>Idioma: </span> {{$libro->idioma->descripcion}}</p>
    <p><span>Año: </span> {{$libro->year}}</p>
    <p><span>Páginas: </span> {{$libro->n_pag}}</p>
    <p><span>Encuadernacion: </span> {{$libro->encuadernacion->name}}</p>


    <div id="temas">
      @foreach ($libro->temas as $tema)
      <span>#{{$tema->name}} </span>
      @endforeach
    </div>
  </main>

  <footer>
    <div>

      <h2>www.leeconmigo.es</h2>
    </div>
  </footer>

</body>
</html>
