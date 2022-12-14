<x-invitado>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Autores') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">
            
              <div class="p-6 bg-white border-b border-gray-200">
                {{ $autores->links() }}
                <div class="container mx-auto">
                  <div class="flex flex-wrap -mx-4">

                        @foreach ($autores as $autor)

                        <div class="w-1/2 sm:w-1/2 md:w-1/3 xl:w-1/4 lg:w-1/4 2xl:1/6 p-4 bg-blue-50 bg-blue-50 rounded-md border">
                            <a href="{{route('autores.show',$autor)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-56 overflow-hidden">
                              {{-- <div class="rounded-full absolute z-50 bg-red-600">7.5</div> --}}
                              <img class="absolute inset-0 h-56 w-full object-cover" src="{{$autor->img ? asset($autor->img) : asset('img/el-principito.jpg')}}" alt="">
                            </div>
                        </a>
                            <div class="p-4 text-center">
                              <a href="{{route('autores.show',$autor)}}">
                                <h2 class="mt-2 mb-2  font-bold">{{$autor->name}}</h2>
                              </a>
                            
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