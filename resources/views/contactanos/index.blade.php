<x-invitado>


  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Contactanos') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200" style="min-height: 25em">


          <div class=" pb-4 ">
            <a href="{{route('libros')}}" class="border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

              Volver a inicio
            </a>


          </div>



          <div class="flex flex-col -mx-4  p-5" style="min-height: 20em">

            <div class="bg-blue-50 mb-5 border border-blue-300 rounded-t p-5">


              <form action="{{route('contactanos.store')}} " method="post">
                @csrf
                @method('post')

                {{-- nombre --}}
                <div class="mb-6 mt-3">
                  <label for="nombre" class="block mb-2 text-md font-medium text-gray-900">Nombre</label>
                  <input type="text" id="nombre" name="nombre" value="{{old('nombre',$nombre)}}" required placeholder="Escriba aquí..." class="block p-4 w-full text-gray-900  rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                  @error('nombre')
                  <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                  </p>
                  @enderror
                </div>

                {{-- email --}}
                <div class="mb-6 mt-3">
                  <label for="email" class="block mb-2 text-md font-medium text-gray-900">Email</label>
                  <input type="email" id="email" name="email" value="{{old('email',$email)}}" required placeholder="Escriba aquí..." class="block p-4 w-full text-gray-900  rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                  @error('email')
                  <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                  </p>
                  @enderror
                </div>

                {{-- Asunto --}}
                <div class="mb-6 mt-3">
                  <label for="asunto" class="block mb-2 text-md font-medium text-gray-900">Asunto</label>
                  <input type="text" id="asunto" name="asunto" value="{{old('asunto'/* ,$descripcion->titulo */)}}" required placeholder="Escriba aquí..." class="block p-4 w-full text-gray-900  rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                  @error('asunto')
                  <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                  </p>
                  @enderror
                </div>

                {{-- Tu crítica --}}


                <label for="mensaje" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="10" required class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('mensaje')}}</textarea>

                @error('mensaje')
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

</x-invitado>
