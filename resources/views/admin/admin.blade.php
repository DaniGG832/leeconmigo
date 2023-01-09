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
              <h3 class="text-3xl font-medium text-gray-700">Administrador</h3>
              <div class="mt-4">
                <div class="flex flex-wrap -mx-6">
                  <div class="w-full px-6 mt-2 xl:w-1/2 mt-1">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                      <a href="{{route('admin.libros.index')}}">

                        <div class="p-3 bg-green-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                        <div class="mx-5">
                          <h4 class="text-2xl font-semibold text-gray-700">{{$totalLibros}}</h4>
                          <div class="text-gray-500">Total Libros</div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="w-full px-6 mt-2 xl:w-1/2 mt-1">
                  <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                    <a href="{{route('admin.users.index')}}">
                      <div class="p-3 bg-blue-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                      <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{$totalUsuarios}}</h4>
                        <div class="text-gray-500">Total Usuarios</div>
                    </a>
                  </div>
                </div>
              </div>

            </div>

          </div>

          <div class="mt-4">
            <div class="flex flex-wrap -mx-6">

              <div class="w-full px-6 mt-2 xl:w-1/2 mt-1">
                <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                  <a href="{{route('admin.autores.index')}}">

                    <div class="p-3 bg-red-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                    <div class="mx-5">
                      <h4 class="text-2xl font-semibold text-gray-700">{{$totalAutores}}</h4>
                      <div class="text-gray-500">Total Autores</div>
                  </a>
                  </div>
                </div>
              </div>
              <div class="w-full px-6 mt-2 xl:w-1/2 mt-1">
                <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                  <a href="{{route('admin.ilustradores.index')}}">

                    <div class="p-3 bg-yellow-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                    <div class="mx-5">
                      <h4 class="text-2xl font-semibold text-gray-700">{{$totalIlustradores}}</h4>
                      <div class="text-gray-500">Total Ilustradores</div>
                  </a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="mt-4">
            <div class="flex flex-wrap -mx-6">
              <div class="w-full px-6 mt-2 xl:w-1/2 mt-1">
                <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                  <a href="{{route('admin.editoriales.index')}}">

                    <div class="p-3 bg-purple-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                    <div class="mx-5">
                      <h4 class="text-2xl font-semibold text-gray-700">{{$totalEditoriales}}</h4>
                      <div class="text-gray-500">Total Editoriales</div>
                  </a>
                  </div>
                </div>
              </div>
              <div class="w-full px-6 mt-2 xl:w-1/2 mt-1">
                <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                  <a href="{{route('admin.temas.index')}}">

                    <div class="p-3 bg-orange-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                    <div class="mx-5">
                      <h4 class="text-2xl font-semibold text-gray-700">{{$totalTemas}}</h4>
                      <div class="text-gray-500">Total Temas</div>
                  </a>
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
