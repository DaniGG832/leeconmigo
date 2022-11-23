<x-admin>

  <div id="app ">
    <div class="flex font-roboto">

      <x-nav-admin></x-nav-admin>


      <div class="flex-1 flex flex-col overflow-hidden">

        <x-header-admin></x-header-admin>


        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 min-h-screen ">
          <div class="container mx-auto px-6 py-8">

            <x-session />

            {{-- <div>
              <div class="flex ">
                <a class=" mr-4 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2" href="{{route('admin.libros.index')}}">Atras</a>
            <h3 class="text-3xl font-medium text-gray-700 mt-5"> <span class="text-3xl  text-gray-500 mt-5">Titulo:</span> {{$libro->titulo}} </h3>
          </div>
          <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
              <div class="p-4 inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">


                <div class="flex-shrink-0  mt-1 lg:flex ">
                  <img class=" rounded-lg max-h-64" src="{{$libro->img ? asset($libro->img) : asset('img/el-principito.jpg')}}" alt="">
                  <div class="text-3xl text-gray-500 mt-5 p-5">
                    <h2>Descripción:</h2>
                    <p class="text-sm text-2xl text-gray-700 mt-2">{{$libro->descripcion}}</p>
                  </div>
                </div>
                <div class="flex-shrink-0  mt-1 lg:flex ">
                  <img class=" rounded-lg max-h-64" src="{{$libro->img ? asset($libro->img) : asset('img/el-principito.jpg')}}" alt="">
                  <div class="text-3xl text-gray-500 mt-5 p-5">
                    <h2>Descripción:</h2>
                    <p class="text-sm text-2xl text-gray-700 mt-2">{{$libro->descripcion}}</p>
                  </div>
                </div>
                <div class="text-3xl text-gray-500 mt-5 p-5">
                  <h2>Descripción:</h2>
                  <p class="text-sm text-2xl text-gray-700 mt-2">{{$libro->descripcion}}</p>
                </div> --}}

                {{-- TODO: agregar campos y estilos al show --}}

              
                  <div class="mx-auto max-w-4xl">

                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                      <div class="px-4 py-5 sm:px-6">
                        <div class="flex mb-3">

                          <a class=" mr-4 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2" href="{{route('admin.libros.index')}}">Atras</a>
          
                      <h3 class="text-2xl font-medium leading-6 text-gray-900 text-center inline-flex items-center ml-5">Libro:
                    </div>
                  <img class=" rounded-lg max-h-64" src="{{$libro->img ? asset($libro->img) : asset('img/el-principito.jpg')}}" alt="">

                        {{-- <h3 class="text-lg font-medium leading-6 text-gray-900">Libro: </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500"></p> --}}
                      </div>
                      <div class="border-t border-gray-200">
                        <dl>
                          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Título</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->titulo}}</dd>
                          </div>
                          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Título original</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->titulo}}</dd>
                          </div>
                          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">ISBN (13)</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->ISBN13}}</dd>
                          </div>
                          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">ISBN (10)</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->ISBN10}}</dd>
                          </div>
                          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Año</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->year}}</dd>
                          </div>
                          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Páginas</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->n_pag}}</dd>
                          </div>
                          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Sinopsis</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->sinopsis}}</dd>
                          </div>
                          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Descripción</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->descripcion}}</dd>
                          </div>
                          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Autor</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->autor->name}}</dd>
                          </div>
                          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Ilustrador</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->ilustrador->name}}</dd>
                          </div>
                          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Editorial</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->editorial->name}}</dd>
                          </div>
                          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Edad recomendada</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->edad->name}} ( años )</dd>
                          </div>
                          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Idioma</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{$libro->idioma->name}} - {{$libro->idioma->descripcion}}</dd>
                          </div>
                          <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">temas</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                              <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">

                                @forelse ($libro->temas as $tema)

                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                  <div class="flex w-0 flex-1 items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" x-description="Heroicon name: mini/paper-clip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                      <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-2 w-0 flex-1 truncate">{{$tema->name}}</span>
                                  </div>
                                </li>
                                @empty
                                <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                  <div class="flex w-0 flex-1 items-center">
                                    
                                    <span class="ml-2 w-0 flex-1 truncate">No tiene Temas Relacionados</span>
                                  </div>
                                </li>

                                @endforelse
                              
                              </ul>
                            </dd>
                          </div>
                        </dl>
                      </div>
                    </div>

                  </div>
                
             {{--  </div> --}}


            {{-- </div>
          </div>
      </div>
    </div>
  </div> --}}
  </main>

  </div>
  </div>
  </div>

</x-admin>
