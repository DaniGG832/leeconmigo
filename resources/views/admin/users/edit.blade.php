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

                <a class=" mr-4 text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2" href="{{route('admin.users.index')}}">Atras</a>

                <h3 class="text-3xl font-medium text-gray-700 mt-5">Editar usuario</h3>

              </div>


              <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                  <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    {{-- formulario --}}

                    <form class="p-10" action="{{ route('sadmin.users.update', $user, true) }}" method="post">

                      @csrf
                      @method('put')


                      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-3 ">

                        {{-- ciudad --}}

                        <div class="mb-6 ">


                          <h3 class="block mb-2 text-sm font-medium text-gray-900 ">Bloquear usuario</h3>
                          <div class="flex flex-col">

                            <div class="flex items-center mr-4 mb-1">
                              <input id="comentar" @checked($user->comentar) type="radio" value="1" name="comentar" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500">
                              <label for="comentar" class="ml-2 text-sm font-medium text-green-600">Activo</label>
                            </div>
                            <div class="flex items-center mr-4">
                              <input id="red-radio" {{-- {{!$user->comentar ?? 'checked'}} --}} @checked(!$user->comentar) type="radio" value="0" name="comentar" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500">
                              <label for="red-radio" class="ml-2 text-sm font-medium text-red-800">Boqueado</label>
                            </div>

                            @error('comentar')
                            <p class="text-red-500 text-sm mt-1">
                              {{ $message }}
                            </p>
                            @enderror
                          </div>


                        </div>

                        {{-- cod_postal --}}



                      </div>

                      <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-3">


                        <div>

                          <label for="rol_id" class="block mb-2 text-sm font-medium text-gray-900 ">Cambiar Rol del usuario</label>
                          <select id="rol_id" name="rol_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">

                            {{-- <option value="" class="text-red-900">Selecione una opción</option> --}}

                            @foreach ($roles as $rol)

                            <option value="{{$rol->id}}" {{$user->rol_id==$rol->id ? 'selected' : ''}}>{{$rol->nombre}}</option>

                            @endforeach


                          </select>
                          @error('rol_id')
                          <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                          </p>
                          @enderror

                        </div>

                      </div>
                      <button type="submit" class=" mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Guardar
                      </button>

                    </form>
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
