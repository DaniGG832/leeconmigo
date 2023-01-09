<div class="p-1 w-56">
  <div class="h-full rounded-md border border-blue-200 p-1">

  <a href="{{route('libros.show',$libro)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
  <div class="relative pb-56 overflow-hidden">
    {{-- <div class="rounded-full absolute z-50 bg-red-600">7.5</div> --}}
    <img class="absolute inset-0 h-56 w-full object-cover" src="{{$libro->img ? asset($libro->img) : asset('img/el-principito.jpg')}}" alt="">
  </div>
</a>
  <div class="p-4 text-center ">
    <span class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Nota media: 
      <span class="font-bold text-xl">
        {{-- obtiene la nota media --}}
        {{is_int($libro->votaciones->avg('voto'))? number_format( $libro->votaciones->avg('voto')): number_format($libro->votaciones->avg('voto'), 1) }} 

      </span>
    </span>
    <span class=" mt-1 inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Total Votos: 
      <span class="font-bold text-xl">
        {{-- obtiene total votos --}}
        {{$libro->votaciones->count()}} 
      </span>
    </span>
    <h2 class="mt-2 mb-2  font-bold">{{$libro->titulo}}</h2>
    {{-- <p class="text-sm">{{$libro->titulo_original ?? ''}} </p> --}}
    <div class="mt-3">
      <div class="py-2 border-t border-b text-xs text-gray-700">
      <p class="text-sm text-gray-400">Autor </p>
<a href="{{route('autores.show',$libro->autor)}}">

  <p class="font-bold">{{$libro->autor->name}}</p>
</a>
    </div>
    </div>
  </div>
  <div class="text-center p-4 pt-2 flex items-center text-sm text-gray-600">
    <a href="{{route('edades.show',$libro->edad)}}"><span class="ml-2">{{$libro->edad->descripcion}}</span></a>
  </div>
  
  <div class="p-4 border-t text-xs text-gray-700">
    
      @foreach ($libro->temas as $tema)
      <a class="no-underline hover:underline hover:text-blue-700" href="{{route('temas.show',$tema)}}">
        <span class=" m-1">
          #{{$tema->name}}
        </span>
      </a>    
        @endforeach
       
  </div>
  </div>
</div>