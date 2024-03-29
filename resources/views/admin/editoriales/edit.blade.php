<x-admin>

  <div id="app ">
    <div class="flex font-roboto">

      <x-nav-admin></x-nav-admin>


      <div class="flex-1 flex flex-col overflow-hidden">

        <x-header-admin></x-header-admin>


        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 min-h-screen ">
          <div class="container mx-auto px-6 py-8">

            <x-session />

            <div>


              <div class="flex ">

                <a class=" mr-4 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2" href="{{route('admin.editoriales.index')}}">Atras</a>

                <h3 class="text-3xl font-medium text-gray-700 mt-5">Editar Editorial </h3>


              </div>


              <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="p-4 inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    {{-- formulario --}}


                    <form class="p-10" action="{{ route('admin.editoriales.update', $editorial, true) }}" enctype="multipart/form-data" method="post">

                      @csrf
                      @method('put')

                      {{-- Seleccionar archivo --}}
                      <div>

                        <label class="block mb-2 text-md font-medium text-gray-900" for="Imagen">Selecionar Imagen</label>
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer " id="Imagen" type="file" name="img" accept="image/*" style="display: none" value="{{old('img',$editorial->img)}}">


                        <div id="pre" class="h-32 flex items-center ">
                          <label for='Imagen'><img class='rounded-lg' src="{{$editorial->img ? asset($editorial->img) : asset('img/el-principito.jpg')}}" style='height: 7rem' for='Imagen' /></label>
                          <br><label class="block mb-2 text-md font-medium text-gray-800 ml-2 " for="Imagen">Click en la imagen para seleccionar otra.</label>
                        </div>

                        @error('img')
                        <p class="text-red-500 text-sm mt-1">
                          {{ $message }}
                        </p>
                        @enderror
                      </div>

                      {{-- Titulo --}}
                      <div class="mb-6 mt-3">
                        <label for="name" class="block mb-2 text-md font-medium text-gray-900">Nombre</label>
                        <input type="text" id="name" name="name" value="{{old('name',$editorial->name)}}" required class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                        @error('name')
                        <p class="text-red-500 text-sm mt-1">
                          {{ $message }}
                        </p>
                        @enderror
                      </div>

                      {{-- descripción --}}


                      <label for="descripcion" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
                      <textarea id="descripcion" name="descripcion" rows="4" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('descripcion',$editorial->descripcion)}}</textarea>

                      @error('descripcion')
                      <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                      </p>
                      @enderror

                      <button type="submit" class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Guardar
                      </button>
                    </form>





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
