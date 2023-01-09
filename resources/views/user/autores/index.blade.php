<x-invitado>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Autores') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-2 border-blue-400">
            
          
            <div x-data class="mt-4 ml-4">

              <form id="formBuscar" action="{{route('autores.index')}}"> 
                
                
                <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
                <div class="relative w-72 mr-4">
                  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                  </div>
                  <input value="{{-- {{Request::input('search')}} --}}" name="search" type="search" id="search" class="mt-1 block w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-300 focus:border-blue-300"  placeholder="Buscar ">
                  {{-- <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button> --}}
                  <button type="submit" class="absolute top-0 right-0 p-3 text-sm font-medium text-white bg-blue-400 rounded-r-lg border border-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <span class="sr-only">Search</span>
                  </button>
                </div>
              </form>
            </div>
          

            
            <div class="p-6 bg-white border-b border-gray-200">
              @if (Request::input('search'))

              <p class="text-gray-400">Busqueda: <span class="text-gray-700">" {{Request::input('search')}} "</span></p>
                  
              @endif

                {{ $autores->appends(["search" => $search,])->links() }}
                <div class="container mx-auto">
                  <div class="flex flex-wrap -mx-4" style="min-height: 20em">
                    
                        @forelse ($autores as $autor)

                        <div class="p-1 w-56 ">
                          <div class="m-1 p-2 rounded-md border">
                            <a href="{{route('autores.show',$autor)}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative h-56 overflow-hidden flex justify-center">
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

                          @empty
                      
                          <p class="m-3 text-xl text-gray-700">"No se ha encontrado ninguna coincidencia."</p>

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