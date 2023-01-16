<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Libros infantiles ' . $edad->descripcion) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-h-[22em]">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400 min-h-[15em]">

        <div class="p-6 bg-white  ">
          <div class="mb-5">

            <a href="{{route('edades.index')}}" class="  border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

              Volver atras
            </a>
          </div>
          {{ $libros->links() }}

          <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">

              @forelse ($libros as $libro)

              @include('user.libros._libro')

              @empty

              <p class="mt-4">No se ha encontrado ningun Libro de esa característica</p> 

              @endforelse



            </div>
          </div>


          {{-- ------------------------------- --}}





        </div>


      </div>
    </div>
  </div>
  </div>
</x-invitado>
