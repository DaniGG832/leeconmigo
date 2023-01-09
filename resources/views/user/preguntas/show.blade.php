<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Foro') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">

        <div x-data="newPregunta" x-init="alIniciar({{$errors->any()}})" class="p-6 bg-white border-b border-gray-200">

          <a href="{{route('preguntas.index')}}" class="border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

            Volver atras
          </a>

          @auth

          <button @click="abrirModal" class="ml-4 border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg" type="button">
            Añadir respuesta {{-- {{$errors->any()}} --}}
          </button>

          @endauth
          <div class="container mx-auto">


            <div class="flex flex-col -mx-4  p-5" style="min-height: 25em">

              {{-- {{$preguntas->onEachSide(5)->links() }} --}}


              <div class="flex items-start p-5 border border-blue-100 rounded-t mt-2">
                <div>

                  <img class="rounded-full h-12 w-12  object-cover" src="{{$pregunta->user->avatar ? asset($pregunta->user->avatar) : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png'}}" alt="avatar image">

                </div>


                <h3 class="text-gray-900 text-sm md:text-l font-semibold ml-3">
                  {{$pregunta->titulo}}
                  <span class="text-xs text-gray-500 block"> {{$pregunta->descripcion}} </span>

                </h3>

              </div>

              
               @forelse ($pregunta->respuestas as $respuesta)

              @include('user.preguntas._respuestas')

              @empty
              <p class="m-3 text-xl text-gray-700">"no hay ninguna respuesta."</p>  
              @endforelse

              @auth
              <div class="flex justify-end mt-2">

                <button x-on:click="abrirModal"  class="ml-4 border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg" type="button">
                  Añadir respuesta {{-- {{$errors->any()}} --}}
                </button>

              </div>
              @endauth



              {{-- ventana modal --}}
              <div class="container flex justify-center mx-auto ">

                <div x-show="show" class="absolute inset-0 flex items-center justify-center bg-gray-700 bg-opacity-50 ">

                  <div @click.away="show = false" class="max-w-sm p-6 bg-white w-96 rounded-t">

                    <div class="flex items-center justify-between">


                      <h3 class="text-2xl  border border-blue-100 p-1 rounded-t">Añadir</h3>
                      <svg @click="show=false" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>

                    </div>


                    <form action="{{route('respuestas.store',$pregunta)}}" method="post">
                      @csrf

                      {{-- Título --}}{{--
                      <div class="mb-6 mt-3">
                        <label for="titulo" class="block mb-2 text-md font-medium text-gray-900">Título</label>
                        <input type="text" id="titulo" name="titulo" value="{{old('titulo')}}" required placeholder="Escriba aquí..." class="block p-4 w-full text-gray-900 bg-blue-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                      @error('titulo')
                      <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                      </p>
                      @enderror
                  </div> --}}

                  {{-- descripcion --}}


                  <label for="descripcion" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Respuesta</label>
                  <textarea id="descripcion" name="descripcion" rows="10" required class="block p-2.5 w-full text-sm bg-blue-50 text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('descripcion')}}</textarea>

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


            {{-- <h3 class="p-4 mt-20 text-3xl text-center text-bold">Simple Modal</h3>
<div class="container flex justify-center mx-auto">
    <button class="px-6 py-2 text-white bg-blue-600 rounded shadow-xl" type="button">open
        model</button>
    <div class="absolute inset-0 flex items-center justify-center bg-gray-700 bg-opacity-50">
        <div class="max-w-sm p-6 bg-white">
            <div class="flex items-center justify-between">
                <h3 class="text-2xl">Model Title</h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="mt-4">
                <p class="mb-4 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus
                    qui
                    nihil laborum
                    quaerat blanditiis nemo explicabo voluptatum ea architecto corporis quo vitae, velit
                    temporibus eaque quisquam in quis provident necessitatibus.</p>
                <button class="px-4 py-2 text-white bg-red-600 rounded">Cancel</button>
                <button class="px-4 py-2 text-white bg-green-600 rounded">Save</button>
            </div>
        </div>
    </div>
</div> --}}



          </div>
        </div>

      </div>


    </div>
  </div>
  </div>
  </div>
</x-invitado>