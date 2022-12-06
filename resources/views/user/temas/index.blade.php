<x-invitado>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Temas') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            
              <div class="p-6 bg-white border-b border-gray-200">
                {{ $temas->links() }}
                <div class="container mx-auto">
                  <div class="flex flex-wrap -mx-4">

                        @foreach ($temas as $tema)

                        <div class="w-1/2 sm:w-1/2 md:w-1/3 xl:w-1/5 lg:w-1/4 2xl:1/6 p-4">
                            <a href="{{route('temas.show',$tema)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-56 overflow-hidden">
                              {{-- <div class="rounded-full absolute z-50 bg-red-600">7.5</div> --}}
                              <img class="absolute inset-0 h-56 w-full object-cover" src="{{$tema->img ? asset($tema->img) : asset('img/el-principito.jpg')}}" alt="">
                            </div>
                        </a>
                            <div class="p-4 text-center">
                            
                              <h2 class="mt-2 mb-2  font-bold">{{$tema->name}}</h2>
                            
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