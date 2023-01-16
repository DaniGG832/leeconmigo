<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Libros infantiles de ' . $tema->name) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-h-[22em]">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400" style="min-height: 25em">

        <div class="p-6 bg-white ">
          <div class="mb-5">

            <a href="{{route('temas.index')}}" class="  border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">

              Volver atras
            </a>
          </div>

          {{ $libros->links() }}

          <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">

              @forelse ($libros as $libro)

              @include('user.libros._libro')

              @empty
              <p class="m-3 mt-5 text-xl text-gray-700">"No hay ningun libro sobre este tema."</p>
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
