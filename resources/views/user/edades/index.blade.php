<x-invitado>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Libros por Edad') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">
            
              <div class="p-6 bg-white border-b border-gray-200">
                {{ $edades->links() }}
                <div class="container mx-auto">
                  <div class="flex flex-wrap -mx-4">

                        @foreach ($edades as $edad)

                        <div class="p-1 w-96">
                          <div class="m-1 border-blue-100 rounded-md border p-2">
                            <a href="{{route('edades.show',$edad)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-56 overflow-hidden">
                              {{-- <div class="rounded-full absolute z-50 bg-red-600">7.5</div> --}}
                              <img class="absolute inset-0 h-56 w-full object-cover" src="{{$edad->img ? asset($edad->img) : asset('img/book-1977235_960_720.webp')}}" alt="">
                            </div>
                        </a>
                            <div class="p-4 text-center">
                            
                              <h2 class="mt-2 mb-2  font-bold">{{$edad->descripcion}}</h2>
                            
                            </div>
                          </div>
                          </div>

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