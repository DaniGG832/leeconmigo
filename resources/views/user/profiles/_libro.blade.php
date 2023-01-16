{{-- {{$votacion->libro->temas}} --}}
<div class="p-1 w-56">

  <div class="h-full rounded-md border border-blue-200 p-1">
  <a href="{{route('libros.show',$votacion->libro)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
  <div class="overflow-hidden flex justify-center">
    {{-- <div class="rounded-full absolute z-50 bg-red-600">7.5</div> --}}
    <img class="rounded-md w-42 h-52 object-cover hover:scale-110 transition duration-300 ease-in-out" src="{{$votacion->libro->img ? asset($votacion->libro->img) : asset('img/el-principito.jpg')}}" alt="">
  </div>
</a>
  <div class="p-4 text-center">
    <div class="grid grid-rows">

      <div class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Nota media: 
        <span class="font-bold text-xl">
        {{-- obtiene la nota media --}}
        {{is_int($votacion->libro->votaciones->avg('voto'))? number_format( $votacion->libro->votaciones->avg('voto')): number_format($votacion->libro->votaciones->avg('voto'), 1) }} 
        
      </span>
    </div>
    <div class=" mt-1 inline-block px-2 py-1 leading-none bg-blue-200 text-blue-800 rounded-full font-semibold uppercase tracking-wide text-xs">mi voto: 
      <span class="font-bold text-xl">
        {{-- obtiene mi voto --}}
        {{$votacion->voto }} 
        
      </span>
    </div>
  </div>
    <h2 class="mt-2 mb-2  font-bold">{{$votacion->libro->titulo}}</h2>
    {{-- <p class="text-sm">{{$votacion->libro->titulo_original ?? ''}} </p> --}}
    <div class="mt-3">
      <div class="py-2 border-t border-b text-xs text-gray-700">
      <p class="text-sm text-gray-400">Autor </p>

      <p class="font-bold">{{$votacion->libro->autor->name}}</p>
    </div>
    </div>
  </div>
  <div class="text-center p-4 pt-2 flex items-center text-sm text-gray-600">
    <a href="{{route('edades.show',$votacion->libro->edad)}}"><span class="ml-2">{{$votacion->libro->edad->descripcion}}</span></a>
  </div>
  
  <div class="p-4 border-t border-b text-xs text-gray-700">
    
    @foreach ($votacion->libro->temas as $tema)
      <a class="no-underline hover:underline hover:text-blue-700" href="{{route('temas.show',$tema)}}">
        <span class=" m-1">
          #{{$tema->name}}
        </span>
      </a>    
        @endforeach
        
  </div>
</div>
</div>