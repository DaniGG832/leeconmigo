<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Criticas de '.$libro->titulo ) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">

        <div class="p-6 bg-white border-b border-gray-200">


  <div class=" pb-4 ">
    <a href="{{route('libros.show',$libro)}}" 
    class="border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">
      
      Volver a la ficha
    </a>
    @auth
      
    <a href="{{route('criticas.create',$libro)}}" 
    class="ml-4 border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">
      
      Escribe tu crítica
    </a>
    @endauth
    
    
          </div>
        
          <div class="flex items-start justify-between p-5 border border-blue-100 rounded-t" style="min-height: 11em">


            <img src="{{$libro->img}}" alt="" class="h-36 float-left m-2 rounded-lg">

            <div class="ml-3 mt-5">

              <h3 class="text-gray-900 text-sm md:text-l font-semibold">
                {{$libro->titulo}}
              </h3>
              <p class="text-xs text-gray-500 mt-1"> {{$libro->year}}</p>
              <p class="text-xs text-gray-500 mt-1"> {{$libro->autor->name}}</p>
            </div>
            <div class="text-gray-400 rounded-lg  p-1.5 ml-auto inline-flex items-center">
              <p class="text-2xl text-white  p-3 border border-blue-500 bg-blue-400 rounded-lg">Nota Media:
                <span class="text-blue-800">
                  {{ is_int($libro->votaciones->avg('voto'))
                      ? number_format($libro->votaciones->avg('voto'))
                      : number_format($libro->votaciones->avg('voto'), 1) }}
                </span>
              </p>
            </div>

            <div>

            </div>
          </div>



          <div class="container mx-auto">
            {{ $criticas->links() }}

            <div x-data="critica" class="flex flex-col -mx-4  p-5" style="min-height: 20em">

              @forelse ($criticas as $critica)

              @include('user.criticas._critica')

              @empty
              <p class="m-3 text-xl text-gray-700">"no hay ninguna crítica."</p>

                  
              @endforelse


            </div>
          </div>








        </div>


      </div>
    </div>
  </div>
  </div>
</x-invitado>
