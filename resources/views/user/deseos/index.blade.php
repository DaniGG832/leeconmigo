<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Lista de deseos') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  border-2 border-blue-400 " style="min-height: 80vh;">


        <div class="p-6 bg-white border-b border-gray-200">
        

          <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">

              @foreach ($listaDeseos as $libro)

              {{-- {{is_int($libro->votaciones->avg('voto'))? number_format( $libro->votaciones->avg('voto')): number_format($libro->votaciones->avg('voto'), 1,) }} --}}
              {{-- {{number_format($libro->votaciones->avg('voto'), 1,)}} --}}

              @include('user.libros._libro')


              @endforeach



            </div>

          </div>

          




        </div>


      </div>
    </div>
  </div>
  </div>


</x-invitado>
