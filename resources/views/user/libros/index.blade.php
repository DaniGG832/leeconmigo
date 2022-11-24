<x-invitado>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Libros Infantiles') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                
               
                    <div class="container mx-auto">
                      <div class="flex flex-wrap -mx-4">

                        @foreach ($libros as $libro)

                        <div class="w-1/2 sm:w-1/2 md:w-1/3 xl:w-1/5 lg:w-1/4 2xl:1/6 p-4">
                            <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative pb-56 overflow-hidden">
                              <img class="absolute inset-0 h-56 w-full object-cover" src="{{$libro->img ? asset($libro->img) : asset('img/el-principito.jpg')}}" alt="">
                            </div>
                        </a>
                            <div class="p-4">
                              <span class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                              <h2 class="mt-2 mb-2  font-bold">{{$libro->titulo}}</h2>
                              <p class="text-sm">{{$libro->titulo ?? ''}} </p>
                              <div class="mt-3 flex items-center">
                                <span class="text-sm font-semibold">ab</span>&nbsp;<span class="font-bold text-xl">45,00</span>&nbsp;<span class="text-sm font-semibold">€</span>
                              </div>
                            </div>
                            <div class="p-4 border-t border-b text-xs text-gray-700">
                              
                                @foreach ($libro->temas as $tema)
                                    
                                <span class=" m-1">
                                     #{{$tema->name}}
                                  </span>
                                @endforeach
                                 
                            </div>
                            <div class="p-4 flex items-center text-sm text-gray-600"><span class="ml-2">34 Bewertungen</span></div>
                          
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