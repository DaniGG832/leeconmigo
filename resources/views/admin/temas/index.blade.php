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
              <h3 class="text-3xl font-medium text-gray-700">Temas</h3>
              <div class="mt-4">
                <div class="flex flex-wrap -mx-6">
                  <div class="w-full px-6 mt-2 xl:w-1/2 mt-1">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                      <div class="p-3 bg-blue-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                      <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{$totalUsuarios}}</h4>
                        <div class="text-gray-500">Total Usuarios</div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full px-6 mt-2 xl:w-1/2 mt-1">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                      <div class="p-3 bg-green-600 bg-opacity-75 rounded-full w-12 h-12"></div>
                      <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">{{$totalLibros}}</h4>
                        <div class="text-gray-500">Total Libros</div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="mt-8 ">
                <a href="{{route('admin.temas.create')}}" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                  Añadir tema</a>
              </div>
              <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">

                    {{ $temas->links() }}

                    <table class="min-w-full">
                      <thead>
                        <tr>
                          <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> Nombre </th>
                          <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50"> fecha Creacion </th>

                          <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                          <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                          <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                        </tr>
                      </thead>
                      <tbody class="bg-white">

                        @foreach ($temas as $tema)
                        <tr>
                          <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="flex-shrink-0 w-10 h-10"><img class="w-10 h-12 rounded-lg" src="{{$tema->img ? asset($tema->img) : asset('img/el-principito.jpg')}}" alt=""></div>
                              <div class="ml-4">
                                <div class="text-sm font-medium leading-5 text-gray-900">{{$tema->name}}</div>

                              </div>
                            </div>
                          </td>

                          <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">{{$tema->created_at}}</td>


                          <td class="px-3 py-2 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap"><a href="{{route('admin.temas.show',$tema)}}" class="text-indigo-600 hover:text-indigo-900">Mostrar</a></td>
                          <td class="px-3 py-2 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap"><a href="{{route('admin.temas.edit',$tema)}}" class="text-green-600 hover:text-green-900">Editar</a></td>
                          <td class="px-3 py-2 text-sm font-medium leading-5 text-right border-b border-gray-200 whitespace-nowrap">
                            <form action="{{route('admin.temas.destroy', $tema, true )}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button href="#" class="text-red-600 hover:text-red-900" onclick="return confirm('Desea borrar el tema')">Borrar</button>

                            </form>
                          </td>
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
