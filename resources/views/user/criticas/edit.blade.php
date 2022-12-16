{{-- {{$libro}} --}}

<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar crítica de '.$libro->titulo ) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">

        <div class="p-6 bg-white border-b border-gray-200">


          <div class=" pb-4 ">
            <a href="{{route('libros.show',$libro)}}" class="border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

              Volver a la ficha
            </a>

            <a href="{{route('criticas',$libro)}}" class="ml-4 border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

              Volver a las críticas
            </a>


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
            {{-- {{ $criticas->links() }} --}}

            <div class="flex flex-col -mx-4  p-5" style="min-height: 20em">

              <div class="bg-blue-50 mb-5 border border-blue-300 rounded-t p-5">


                <form action="{{route('criticas.update',[$critica,$libro])}}" method="post">
                  @csrf
                  @method('put')
                  {{-- Título de tu crítica --}}
                  <div class="mb-6 mt-3">
                    <label for="titulo" class="block mb-2 text-md font-medium text-gray-900">Título de tu crítica</label>
                    <input type="text" id="titulo" name="titulo" value="{{old('titulo',$critica->titulo)}}" required placeholder="Escriba aquí..."
                    class="block p-4 w-full text-gray-900  rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                    @error('titulo')
                    <p class="text-red-500 text-sm mt-1">
                      {{ $message }}
                    </p>
                    @enderror
                  </div>

                  {{-- Tu crítica --}}


                  <label for="critica" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Tu crítica</label>
                  <textarea id="critica" name="critica" rows="10" required 
                  class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('critica',$critica->critica)}}</textarea>

                  @error('critica')
                  <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                  </p>
                  @enderror
                  <div class="flex justify-center">

                    <button type="submit" class=" mt-4  border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">
                      Enviar 
                    </button>
                  </div>




                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-invitado>
