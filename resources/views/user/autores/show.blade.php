<x-invitado>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __($autor->name) }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">
            
              <div class="p-6 bg-white border-b border-gray-200">

                <div class=" p-2 mb-4 border-blue-50 border bg-blue-50 rounded-md"  style="min-height: 11em">

                  <img src="{{$autor->img}}" alt="" class="h-36 float-left m-2 rounded-lg">
                  <p class="p-4">{{$autor->descripcion}}</p>
                </div>
                
                {{ $libros->links() }}
                
                <div class="container mx-auto">
                  <div class="flex flex-wrap -mx-4">

                        @foreach ($libros as $libro)

                        @include('user.libros._libro')

                        @endforeach

                        
        
                      </div>
                    </div>


                    {{-- ------------------------------- --}}
                    
                       
                 


                </div>
                

              </div>
          </div>
      </div>
  </div>
</x-invitado>