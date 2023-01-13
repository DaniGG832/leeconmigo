<x-invitado>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Temas') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 min-h-[22em]">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">
            
              <div class="p-6 bg-white border-b border-gray-200">
                {{ $temas->links() }}
                <div class="container mx-auto">
                  <div class="flex flex-wrap mt-1">

                        @foreach ($temas as $tema)

                        <div class="p-1 w-56">
                          <div class="rounded-md border border-blue-100 p-2 ">
                            <a href="{{route('temas.show',$tema)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-56 overflow-hidden">
                              {{-- <div class="rounded-full absolute z-50 bg-red-600">7.5</div> --}}
                              <img class="absolute inset-0 h-56 w-full object-cover" src="{{$tema->img ? asset($tema->img) : asset('img/book-1977235_960_720.webp')}}" alt="">
                            </div>
                        </a>
                            <div class="p-4 text-center">
                            
                              <h2 class="mt-2 mb-2  font-bold">{{$tema->name}}</h2>
                            
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