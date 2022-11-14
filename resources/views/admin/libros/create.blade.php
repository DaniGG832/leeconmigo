<x-admin>

  <div id="app ">
    <div class="flex font-roboto">

      <x-nav-admin></x-nav-admin>
      
      
      <div class="flex-1 flex flex-col overflow-hidden">
        
        <x-header-admin></x-header-admin>
        
        
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 min-h-screen">
          <div class="container mx-auto px-6 py-8">
            
            <x-session/>
            
            <div>
              

              <div class="flex ">

                <a class=" mr-4 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2" href="{{route('libros.admin')}}">Atras</a>

                <h3 class="text-3xl font-medium text-gray-700 mt-5">Crear ficha libro </h3>


              </div>


              <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    {{-- formulario --}}


                    <x-form-libros :libro="$libro" :temas="$temas" :autores="$autores" :ilustradores="$ilustradores" :editoriales="$editoriales" :edades="$edades" :idiomas="$idiomas" :encuadernaciones="$encuadernaciones">



                      <form class="p-10" action="{{ route('libros.store', $libro, true) }}" method="post">

                        @csrf
                        @method('post')



                    </x-form-libros>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

      </div>
    </div>
  </div>

</x-admin>














{{-- -------------------------------------------------------------------------------------------------------------------------- --}}
