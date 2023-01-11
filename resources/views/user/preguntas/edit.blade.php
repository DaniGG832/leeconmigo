<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar pregunta ') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">

        <div x-data="newPregunta" x-init="alIniciar({{$errors->any()}})" class="p-6 bg-white border-b border-gray-200">

          <a href="{{URL::previous()}}" class="border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

            Volver atras
          </a>

          <div class="container mx-auto">


            <div class="flex flex-col -mx-4  p-5" style="min-height: 25em">


              <div class="flex flex-col -mx-4  p-5" style="min-height: 20em">

                <div class="bg-blue-50 mb-5 border border-blue-300 rounded-t p-5">


                  <form action="{{route('preguntas.update',[$pregunta])}}" method="post">
                    @csrf
                    @method('put')
                    {{-- Título de tu pregunta --}}
                  <div class="mb-6 mt-3">
                    <label for="titulo" class="block mb-2 text-md font-medium text-gray-900">Título</label>
                    <input type="text" minlength="3" min-l id="titulo" name="titulo" value="{{old('titulo',$pregunta->titulo)}}" required placeholder="Escriba aquí..."
                    class="block p-4 w-full text-gray-900  rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                    @error('titulo')
                    <p class="text-red-500 text-sm mt-1">
                      {{ $message }}
                    </p>
                    @enderror
                  </div>


                    {{-- descripcion --}}


                    <label for="descripcion" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
                    <textarea required minlength="5" id="descripcion" name="descripcion" rows="10" required class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('descripcion',$pregunta->descripcion)}}</textarea>

                    @error('descripcion')
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
  </div>
  </div>
</x-invitado>
