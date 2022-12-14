{{-- {{$votacion->libro->temas}} --}}
<div class="w-1/2 sm:w-1/2 md:w-1/3 xl:w-1/5 lg:w-1/4 2xl:1/6 p-4 bg-blue-50 rounded-md border">

  <a href="{{route('libros.show',$votacion->libro)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
  <div class="relative pb-56 overflow-hidden">
    {{-- <div class="rounded-full absolute z-50 bg-red-600">7.5</div> --}}
    <img class="absolute inset-0 h-56 w-full object-cover" src="{{$votacion->libro->img ? asset($votacion->libro->img) : asset('img/el-principito.jpg')}}" alt="">
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