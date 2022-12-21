<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Editar respuesta') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">

        <div x-data="newPregunta" x-init="alIniciar({{$errors->any()}})" class="p-6 bg-white border-b border-gray-200">

          <a href="{{ url()->previous() }}" class="border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

            Volver atras
          </a>

          <div class="container mx-auto">


            <div class="flex flex-col -mx-4  p-5" style="min-height: 25em">


              <div class="flex flex-col -mx-4  p-5" style="min-height: 20em">

                <div class="bg-blue-50 mb-5 border border-blue-300 rounded-t p-5">


                  <form action="{{route('respuestas.update',[$respuesta,$pregunta])}}" method="post">
                    @csrf
                    @method('put')
                    {{-- descripcion --}}


                    <label for="descripcion" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
                    <textarea id="descripcion" name="descripcion" rows="10" required class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('descripcion',$respuesta->descripcion)}}</textarea>

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
