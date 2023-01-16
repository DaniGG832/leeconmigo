<div class="m-1 border border-blue-200 rounded-md " style="width: 15em;">
  <div class="px-3 pt-3 w-42 h-auto flex justify-center">
    <a href="{{route('libros.show',$libro)}}">
      <img class="rounded-md w-42 h-52 object-cover hover:scale-110 transition duration-300 ease-in-out
      " src="{{$libro->img ? asset($libro->img) : asset('img/book-1977235_960_720.webp')}}" alt="imagen libro">
    </a>
  </div>
  <div class="text-center">
    <h2 class=" my-1 font-bold">{{$libro->titulo}}</h2>
  </div>
  <div class="flex flex-col p-3">
    <div class="text-center inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">
      <p>Nota media:
        <span class="font-bold text-xl">
          @if ($libro->votaciones->avg('voto'))
              {{is_int($libro->votaciones->avg('voto'))? number_format( $libro->votaciones->avg('voto')): number_format($libro->votaciones->avg('voto'), 1) ?? '-'}}

          @else
              -
          @endif
        </span>
      </p>
    </div>
    <div class="text-center mt-1 inline-block px-2 py-1 leading-none bg-blue-200 text-blue-800 rounded-full font-semibold uppercase tracking-wide text-xs">Total votos:
      <span class="font-bold text-xl">

        {{$libro->votaciones_count}}


      </span>
    </div>
  </div>
</div>
