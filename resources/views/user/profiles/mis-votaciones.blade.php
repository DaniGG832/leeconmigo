<x-invitado>


  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Mis votaciones') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class=" overflow-hidden shadow-sm sm:rounded-lg  border-2 border-blue-400">
        <div class="p-6 bg-white border-b border-gray-200">


          <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">

              {{-- {{$votaciones}} --}}

              @foreach ($votaciones as $votacion)

              @include('user.profiles._libro')

              @endforeach




            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-invitado>
