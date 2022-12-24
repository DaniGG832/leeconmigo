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

                        <div class="w-1/2 sm:w-1/2 md:w-1/3 xl:w-1/4 lg:w-1/4 2xl:1/6 ">
                          <div class="m-1 p-2 rounded-md border">
                            <a href="{{route('autores.show',$autor)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative h-36 md:h-56 overflow-hidden flex justify-center">
                              {{-- <div class="rounded-full absolute z-50 bg-red-600">7.5</div> --}}
                              <img class=" inset-0 object-cover w-full aspect-square hover:scale-110 transition duration-300 ease-in-out
                              {{-- object-cover  --}}
                              " src="{{$autor->img ? asset($autor->img) : asset('img/el-principito.jpg')}}" alt="">
                            </div>
                        </a>
                            <div class="p-4 text-center">
                              <a href="{{route('autores.show',$autor)}}">
                                <h2 class="mt-2 mb-2  font-bold">{{$autor->name}}</h2>
                              </a>
                            
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