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

                <a class=" mr-4 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2" href="{{route('idiomas.admin')}}">Atras</a>

                <h3 class="text-3xl font-medium text-gray-700 mt-5">Registrar Autor </h3>


              </div>


              <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="p-4 inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    {{-- formulario --}}


                    <form class="p-10" action="{{ route('idiomas.update', $idioma, true) }}" method="post">

                      @csrf
                      @method('put')

                      {{-- Seleccionar archivo --}}
                      <label class="block mb-2 text-sm font-medium text-gray-900" for="Imagen">Selecione Imagen</label>
                      <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer " id="Imagen" type="file">

                      {{-- Titulo --}}
                      <div class="mb-6 mt-3">
                        <label for="name" class="block mb-2 text-md font-medium text-gray-900">Código</label>
                        <input type="text" id="name" name="name" value="{{old('name',$idioma->name)}}" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500">
                      </div>

                      {{-- descripción --}}

                      <label for="descripcion" class="block mt-6 mb-2 text-sm font-medium text-gray-900 ">Idioma</label>
                      <textarea id="descripcion" name="descripcion" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Escriba aquí...">{{old('descripcion',$idioma->descripcion)}}</textarea>


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
