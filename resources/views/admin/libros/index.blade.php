<x-admin>

  <div id="app ">
    <div class="flex font-roboto">

      <x-nav-admin></x-nav-admin>


      <div class="flex-1 flex flex-col overflow-hidden">

        <x-header-admin></x-header-admin>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200 min-h-screen">
          <div class="container mx-auto px-6 py-8">
            <div>
              <h3 class="text-3xl font-medium text-gray-700">Libros</h3>
              <div class="mt-4">
                <div class="flex flex-wrap -mx-6">
                  <div class="w-full px-6  xl:w-1/2 mt-1">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                      <div class="p-3 bg-blue-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                      <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{$totalUsuarios}}</h4>
                        <div class="text-gray-500">Total Usuarios</div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full px-6 mt-6 xl:w-1/2 mt-1">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                      <div class="p-3 bg-green-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                      <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{$libros->count()}}</h4>
                        <div class="text-gray-500">Total Libros</div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="mt-8 ">
                <a href="{{route('libros.create')}}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Registrar Libro</a>
              </div>
              <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    
                    <table class="min-w-full">
                      <thead>
                        <tr>
                          <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Título </th>
                          <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> ISBN </th>
                          <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Autor </th>
                          <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Año </th>
                          <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                          <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                          <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                      </thead>
                      <tbody class="bg-white">

                        @foreach ($libros as $libro)
                        <tr>
                          <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="flex-shrink-0 w-10 h-10"><img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt=""></div>
                              <div class="ml-4">
                                <div class="text-sm font-medium leading-5 text-gray-900">{{$libro->titulo}}</div>
                                <div class="text-sm leading-5 text-gray-500">{{$libro->titulo_original}}</div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                            <div class="text-sm leading-5 text-gray-900">{{$libro->ISBN13}}</div>
                            <div class="text-sm leading-5 text-gray-500">{{$libro->ISBN10}}</div>
                          </td>
                          <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">{{$libro->autor->name}}</span></td>
                          <td class="px-6 py-4 text-sm leading-5 text-gray-500 border-b border-gray-200 whitespace-nowrap">{{$libro->year}}</td>
                          <td class="px-3 py-2 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap"><a href="#" class="text-indigo-600 hover:text-indigo-900">Mostrar</a></td>
                          <td class="px-3 py-2 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap"><a href="#" class="text-green-600 hover:text-green-900">Editar</a></td>
                          <td class="px-3 py-2 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap"><a href="#" class="text-red-600 hover:text-red-900">Borrar</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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
