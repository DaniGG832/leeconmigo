<x-admin>

  <div id="app ">
    <div class="flex font-roboto">

      <x-nav-admin></x-nav-admin>


      <div class="flex-1 flex flex-col overflow-hidden">

        <x-header-admin></x-header-admin>


        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 min-h-screen">
          <div class="container mx-auto px-6 py-8">

            <x-session />

            <div>


              <div class="flex ">

                <a class=" mr-4 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2" href="{{route('admin.libros.index')}}">Atras</a>

                <h3 class="text-3xl font-medium text-gray-700 mt-5">Crear ficha libro </h3>


              </div>


              <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    {{-- formulario --}}


                    <x-form-libros :libro="$libro" :temas="$temas" :autores="$autores" :ilustradores="$ilustradores" :editoriales="$editoriales" :edades="$edades" :idiomas="$idiomas" :encuadernaciones="$encuadernaciones">



                      <form class="p-10" action="{{ route('admin.libros.update', $libro, true) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        
                          {{-- Seleccionar archivo --}}
                      <div>

                        <label class="block mb-2 text-md font-medium text-gray-900" for="Imagen">Selecionar Imagen</label>
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer " id="Imagen" type="file" name="img" accept="image/*" style="display: none" value="{{old('img',$libro->img)}}">


                        <div id="pre" class="h-32 flex items-center ">
                          <label for='Imagen'><img class='rounded-lg' src="{{$libro->img ? asset($libro->img) : asset('img/img-edit-form.png')}}" style='height: 7rem' for='Imagen' /></label>
                          <br><label class="block mb-2 text-md font-medium text-gray-800 ml-2 " for="Imagen">Click en la imagen para seleccionar otra.</label>
                        </div>


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
