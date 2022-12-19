<x-invitado>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Votaciones de '.$user->name ) }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">

        <div class="p-5 bg-white border-b border-gray-200">

          <div class=" pb-4 ">
            <a href="{{route('criticas',$libro)}}" 
            class="border border-blue-600 hover:bg-blue-600 p-2  text-blue-600 hover:text-blue-50 rounded-lg">
              
              Volver a atras
            </a>

          </div>

          <div class="flex items-start  p-5 border border-blue-100 rounded-t mx-4">
            <img class="rounded-full h-12 w-12  object-cover" src="{{$user->avatar ? asset($user->avatar) : 'https://ssl.gstatic.com/accounts/ui/avatar_2x.png'}}" alt="avatar image">
        
            <h3 class="text-gray-900 text-sm md:text-l font-semibold ml-3">
              {{$user->name}}
              
          </div>


          <div class="container mx-auto">
            {{ $votaciones->links() }}

            <div class="flex flex-col -mx-4  p-5" style="min-height: 20em">

              @foreach ($votaciones as $votacion)

              @include('user.votaciones._votos')

              @endforeach

            </div>

        </div>


      </div>
    </div>
  </div>
  </div>
</x-invitado>
